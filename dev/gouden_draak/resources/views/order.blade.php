<x-checkout-layout>
   <div id="orderingroot" v-cloak class="flex flex-row">
   @if(session()->has('error'))
        <div>
            <x-flash-message class="bg-red-400 dark:bg-red-800">{{ session('error') }}</x-flash-message>
        <div>
    @endif
      <div class="dishes-tab mt-5 p-2.5 box-border">
        <div class="ordering-tab-menu box-border p-5 overflow-y-scroll">
            @foreach($items as $type => $dishes)
               <div class="menu-header">{{$type}}</div>
                  <table class="dishes-table">
                     <tbody>
                     @foreach($dishes as $dish)
                        <tr>
                           <td>{{$dish->addition}}{{$dish->item_number}}.</td>
                           <td>{{$dish->name}}<i>{{$dish->description}}</i></td>
                           <td>€ {{$dish->price}}</td>
                           <td><x-primary-button @click="addToOrder({{ json_encode($dish) }})">Toevoegen</x-primary-button></td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
            @endforeach
        </div>
      </div>
      <div class="mt-5 p-2.5 select-tab box-border">
         <div class="h-full">
            <div class="ordering-tab box-border p-5 overflow-y-scroll">
               <div class="mt-0 order-header">Bestelling</div>
               <table class="w-full item-selected-table">
                  <tr v-for="item in order" :key="item.id">
                     <td>@{{ item.addition }}@{{ item.item_number }}.</td>
                     <td>@{{ item.name }}<i>@{{item.description}}</i></td>
                     <td>€ @{{ (item.price * item.quantity).toFixed(2).replace('.', ',') }}</td>
                     <td><input class="w-full" type="number" min="1" v-model="item.quantity"></td>
                  </tr>
               </table>
            </div>
            <div class="box-border px-4 py-6 total-tab w-full">
               <div class="flex justify-between total-table w-full">
                  <div>
                     <span>Totaal: € <span class="totalAmount">@{{ totalAmount.toFixed(2).replace('.', ',') }}</span></span>
                  </div>
                  <div>
                     <form id="pdfForm" action="{{ route('generatePDF') }}" method="POST">
                           @csrf
                           <input type="hidden" name="orderData" :value="orderData">
                           <x-primary-button type="submit">PDF downloaden</x-primary-button>
                     </form>
                  </div>
                  <div>
                     <button class="primary-button" @click="payOrder" id="payOrder">Afrekenen</button>
                     <button class="secondary-button"  @click="clearOrder" id="clearOrder">Verwijderen</button>
                  </div>
               </div>
               <x-error-modal id="orderModal">
                  <span id="message"></span>
               </x-error-modal>
            </div>
         </div>
      </div>
   </div>
   <script src="{{ asset('js/vue/ordering.js') }}" defer></script>
</x-checkout-layout>
<style>
   [v-cloak] { display: none; }
</style>