<x-checkout-layout>
    <div id="salesroot">
        <table class=" menu-table min-w-full divide-y divide-gray-200">
            <thead class="menu-table-header">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('date')}}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('turnover')}}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('turnover excl btw')}}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('btw')}}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('profit')}}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="item in items" :key="item.id">
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        @{{ item.date }}
                    </td>
                    <td class="max-w-lg px-6 py-4 text-sm text-gray-500">
                    € @{{ item.total_sales }}
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    € @{{ item.total_sales_excl_btw }}
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        € @{{ item.total_btw }}
                    </td>
                    <td colspan="2" class="max-w-lg px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        € @{{ item.total_profit }}
                    </td>
                    @role('admin')
                    <td class="max-w-lg px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a :href="'/salesreport/download/' + item.id" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{__('download_report')}}</a>
                    </td>
                    @endrole
                </tr>
            </tbody>
        </table>
    </div>
    <script> window.items = @json($reports) </script>
    <script src="{{ asset('js/vue/salesreport.js') }}" defer></script>
</x-checkout-layout>