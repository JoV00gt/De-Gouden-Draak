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
        }
    });
});