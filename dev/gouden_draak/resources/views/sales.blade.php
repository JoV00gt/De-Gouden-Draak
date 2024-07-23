<x-checkout-layout>
    <div class="flex">
        <div class="date-picker-tab border-box p-2.5 mt-5">
            <div class="dates p-5 w-full h-full border-box">
                <div>
                    <form method="GET" action="{{ route('sales.overview') }}" class="flex">
                        @csrf
                        <div class="flex-col space-y-1">
                            <div class="flex justify-between">
                                <label>Begin Datum:</label>
                                <input class="date-input" type="date" name="begindate"></input>
                            </div>
                            <div class="flex justify-between">
                                <label>Eind datum:</label>
                                <input class="date-input" type="date" name="enddate"></input>
                           </div>
                        </div>
                        <div>
                            <button class="overview-button">Maak Overzicht</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="total-sales-tab mt-5 p-2.5 border-box">
            <div class="total-info p-5 w-full h-full border-box">
                <table class="w-full">
                    <tbody>
                        <tr>
                            <td>Omzet:</td>
                            <td><span>€ </span><span>0,00</span></td>
                            <td>BTW:</td>
                            <td><span>€ </span><span >0,00</span></td>
                            <td>excl. BTW:</td>
                            <td><span>€ </span><span>0,00</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="overview-tab w-full p-2.5 border-box">
            <div class="overview p-5 w-full h-full border-box">
            <table>
                <thead>
                    <tr>
                        <th>
                            Datum
                        </th>
                        <th>
                            Gerecht
                        </th>
                        <th>
                            Prijs
                        </th>
                        <th>
                            Aantal
                        </th>
                        <th>
                            Subtotaal
                        </th>
                    </tr>
                </thead>
                @if(isset($items) && $items->count() > 0)
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($item->order->date)->format('d-m-Y') }}</td>
                                <td>{{ $item->dish->name }}</td> 
                                <td>€ {{ number_format($item->dish->price, 2, ',', '.') }}</td>
                                <td>{{ $item->amount }}</td> 
                                <td>€ {{ number_format($item->dish->price * $item->amount, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
            </div>
        </div>
    </div>
</x-checkout-layout>