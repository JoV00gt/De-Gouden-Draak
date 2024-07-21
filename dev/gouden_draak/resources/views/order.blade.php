<x-checkout-layout>
   <div id="app" v-cloak class="flex flex-row">
      <div class="dishes-tab mt-5 p-2.5 box-border">
        <div class="ordering-tab-menu box-border p-5 overflow-y-scroll">
            @foreach($items as $type => $dishes)
               <div class="menu-header">{{$type}}</div>
                  <table class="dishes-table">
                     <tbody>
                     @foreach($dishes as $dish)
                        <tr>
                           <td>{{$dish->id}}.</td>
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
                     <td>@{{ item.id }}.</td>
                     <td>@{{ item.name }}<i>@{{item.description}}</i></td>
                     <td>€ @{{ (item.price * item.quantity).toFixed(2).replace('.', ',') }}</td>
                     <td><input class="w-full" type="number" v-model="item.quantity"></td>
                  </tr>
               </table>
            </div>
            <div class="total-tab box-border w-full p-2.5">
               <table class="w-full total-table">
                  <tr>
                     <td></td>
                     <td>Totaal:</td>
                     <td>
                        <span>€ </span>
                        <span class="totalAmount">@{{ totalAmount.toFixed(2).replace('.', ',') }}</span>
                     </td>
                     <td>
                        <button class="primary-button" id="payOrder">Afrekenen</button>
                        <button class="secondary-button"  @click="clearOrder" id="clearOrder">Verwijderen</button>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</x-checkout-layout>
<style>
   [v-cloak] { display: none; }
</style>