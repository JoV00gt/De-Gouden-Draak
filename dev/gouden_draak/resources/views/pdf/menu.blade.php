<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ public_path('images/logo_goudendraak.png') }}" alt="Logo"/>
        </div>
    </div>
    <div>
        <h1 class="text-center">Aanbiedingen</h1>
        <div class="order-table">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Geldigheid</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deals as $deal)
                        <tr>
                            <td>{{ $deal['dish']['addition'] }}{{ $deal['dish']['item_number'] }}.</td>
                            <td>{{ $deal['dish']['name'] }}</td>
                            <td>€ {{ $deal['price'] }}</td>
                            <td>{{ date('d-m-Y', strtotime($deal['start_date'])) }} tot {{ date('d-m-Y', strtotime($deal['expire_date'])) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="page-break"></div>
    <h1 class="text-center">Menu</h1>
    <div class="order-table">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item['addition'] }}{{ $item['item_number'] }}.</td>
                        <td>{{ $item['name'] }}<i> {{$item['description']}}</i></td>
                        <td>{{ $item['dish'] }}</td>
                        <td class="whitespace-nowrap">€ {{ number_format($item['price'], 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
