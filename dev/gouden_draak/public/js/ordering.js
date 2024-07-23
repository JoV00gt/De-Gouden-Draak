document.addEventListener('DOMContentLoaded', () => {
    new Vue({
        el: '#app',
        data: {
            order: [],
        },
        computed: {
            totalAmount() {
                return this.order.reduce((total, item) => {
                    return total + (item.price * item.quantity);
                }, 0);
            }
        },
        methods: {
            addToOrder(dish) {
                const existingItem = this.order.find(item => item.id === dish.id);
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    this.order.push({
                        ...dish,
                        quantity: 1
                    });
                }
            },
            clearOrder() {
                this.order = [];
            },
            async payOrder() {
                if(this.order.length <= 0) {
                    return;
                }

                try {
                    await axios.post('/order', {
                        orderData: this.order
                    }, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    });
                    this.clearOrder();
                } catch (error) {
                    console.error('Error placing order:', error);
                    alert('An error occurred while placing the order.: ' + error);
                }
            }
        }
    });
});