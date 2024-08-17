document.addEventListener('DOMContentLoaded', () => {
    new Vue({
        el: '#orderingroot',
        data: {
            order: [],
            show: {
                type: Boolean,
                default: false,
              },
        },
        computed: {
            totalAmount() {
                return this.order.reduce((total, item) => {
                    return total + (item.price * item.quantity);
                }, 0);
            },
            orderData() {
                return JSON.stringify(this.order);
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
                    if (error.response && error.response.status === 422) {
                        const errors = error.response.data.errors;

                        const errorMessage = Object.values(errors).flat().join(', ');

                        document.getElementById('orderModal').style.display = 'block';
                        const message = document.getElementById('message');
                        message.textContent = errorMessage;
                    }
                }
            }
        }
    });
});