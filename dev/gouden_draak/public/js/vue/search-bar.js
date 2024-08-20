Vue.component('search-bar', {
    props: ['text'],
    template: `
        <div>
            <input v-model="query" @input="onInput" :placeholder="text" class="p-2 border rounded" />
        </div>`,
    data() {
        return {
            query: ''
        }
    },
    methods: {
        onInput() {
            this.$emit('search', this.query);
        }
    }
});

Vue.component('category-filter', {
    template: `
        <div>
        <select v-model="selectedCategory" @change="onCategoryChange" class="p-2 border rounded">
            <option value="">{{ text }}</option>
            <option v-for="category in categories" :key="category" :value="category">
                {{ category }}
            </option>
        </select>
    </div>
    `,
    props: {
        categories: {
            type: Array,
            required: true
        },
        text: {
            type: String
        }
    },
    data() {
        return {
            selectedCategory: ''
        };
    },
    methods: {
        onCategoryChange() {
            this.$emit('category-selected', this.selectedCategory);
        }
    }
});

new Vue({
    el: '#menuroot',
    data: {
        searchQuery: '',
        selectedCategory: '',
        items: window.items,
        categories: []
     },
 
     computed: {
        filteredItems() {
            const searchTerm = this.searchQuery.toLowerCase();

            return this.items.filter(item => {
                const matchesSearch = searchTerm
                    ? item.name.toLowerCase().includes(searchTerm) ||
                      (item.addition + item.item_number).toLowerCase().includes(searchTerm)
                    : true;

                const matchesCategory = this.selectedCategory
                    ? item.dish === this.selectedCategory
                    : true;

                return matchesSearch && matchesCategory;
            });
        },
        
        hasResults() {
            return this.filteredItems.length > 0;
        }
     },
 
     methods: {
        updateSearchQuery(query) {
            this.searchQuery = query;
        },
        updateCategory(category) {
            this.selectedCategory = category;
        },
         formatPrice(price) {
            const numericPrice = parseFloat(price);
            return numericPrice.toFixed(2).replace('.', ',');
        }
     },
     mounted() {
        const set= new Set();
        this.items.forEach(item => {
            set.add(item.dish);
        });
        this.categories = Array.from(set);
    }
});