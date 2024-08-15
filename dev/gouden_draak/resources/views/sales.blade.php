<x-checkout-layout>
    <div class="flex">
        <div class="date-picker-tab border-box p-2.5 mt-5">
            <div class="dates p-5 w-full h-full border-box">
                <div>
                    <form id="app" method="GET" action="{{ route('sales.overview') }}" class="flex"
                        data-errors="{{ json_encode($errors->first()) }}"
                        data-show-errors="{{ json_encode($errors->any()) }}">
                        @csrf
                        <div class="flex-col space-y-1">
                            <div class="flex justify-between">
                                <label>{{__('sales-begin-date')}}</label>
                                <input class="date-input" type="date" value="{{ request('begindate') }}" name="begindate"></input>
                            </div>
                            <div class="flex justify-between">
                                <label>{{__('sales-end-date')}}</label>
                                <input class="date-input" type="date" value="{{ request('enddate') }}" name="enddate"></input>
                           </div>
                        </div>
                        <div>
                            <button class="overview-button">{{__('sales-create-overview')}}</button>
                        </div>
                        @if($errors->any())
                            <x-error-modal id="salesModal">{{ $errors->first() }}</x-error-modal>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="total-sales-tab mt-5 p-2.5 border-box">
            <div class="total-info p-5 w-full h-full border-box">
                <div class="flex flex-row justify-between w-full">
                    <span>{{__('sales-volume')}}</span><span>€ {{ number_format($total ?? 0, 2, ',', '.') }}</span>
                    <span>{{__('sales-vat')}}</span><span>€ {{ number_format(($total ?? 0) - ($exVat ?? 0), 2, ',', '.') }}</span>
                    <span>{{__('sales-excl-vat')}}</span><span>€ {{ number_format($exVat ?? 0, 2, ',', '.') }}</span>
                </div>
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
                           {{__('sales-date')}}
                        </th>
                        <th>
                          {{__('name')}}
                        </th>
                        <th>
                        {{__('price')}}
                        </th>
                        <th>
                        {{__('sales-amount')}}
                        </th>
                        <th>
                        {{__('sales-subtotal')}}
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