<x-home-layout>
    <div class="text-bold flex flex-col justify-center items-center p-10">
      <h2 class="text-xl mb-6">{{__('deals-title')}}</h2>
       <ul class="list-disc space-y-4">
            @foreach($deals as $deal)
                <li class="text-gray-700 text-m"> {{ $deal->dish->addition }}{{$deal->dish->item_number }},  {{ $deal->dish->name }},  <i class="text-red-700">€ {{ number_format($deal->price, 2, ',', '.') }}.</i>  <b>{{ date('d-m-Y', strtotime($deal->start_date)) }} to {{ date('d-m-Y', strtotime($deal->expire_date)) }}</b></li>
            @endforeach
       </ul>
    </div>

</x-home-layout>