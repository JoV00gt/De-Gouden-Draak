Vue.component('search-bar', {
    template: '<div><input type="text" v-model="query" @input="onInput" placeholder="Search..." class="p-2 border rounded" /></div>',
    data() {
        return {
            query: ''
        };
    },

    methods: {
        onInput() {
            this.$emit('search', this.query);
            console.log('Emitting search event with:', this.query);
        }
    }
});

new Vue({
    el: '#app',
    data: {
        searchQuery: '',
        items: window.items,
     },
 
     computed: {
        filteredItems() {
            const searchTerm = this.searchQuery.toLowerCase();
            return Array.isArray(this.items) ? this.items.filter(item => {
                const itemName = item.name.toLowerCase();
                const itemCombined = (item.addition + item.item_number).toLowerCase();
                
                return itemName.includes(searchTerm) || itemCombined.includes(searchTerm);
            }) : [];
        }
     },
 
     methods: {
         updateSearchQuery(query) {
             this.searchQuery = query;
         },
         formatPrice(price) {
            const numericPrice = parseFloat(price);
            return numericPrice.toFixed(2).replace('.', ',');
        }
     }
});