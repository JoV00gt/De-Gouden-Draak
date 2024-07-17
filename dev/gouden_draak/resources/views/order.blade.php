<x-checkout-layout>
   <div class="flex flex-row">
      <div class="ordering-tab mt-5 p-2.5 box-border">
        <div class="ordering-tab-menu box-border p-5 overflow-y-scroll">
            @foreach($items as $type => $dishes)
               <div class="menu-header">{{$type}}</div>
                  <table class="dishes-table">
                     <tbody>
                     @foreach($dishes as $dish)
                        <tr>
                           <td>{{$dish->id}}</td>
                           <td>{{$dish->name}}<i>{{$dish->description}}</i></td>
                           <td>€ {{$dish->price}}</td>
                           <td><button>Toevoegen</button></td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
            @endforeach
        </div>
      </div>
   </div>
</x-checkout-layout>