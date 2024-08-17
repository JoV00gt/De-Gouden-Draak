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
    <div class="order-table">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Name</th>
                    <th class="text-right">Price</th>
                    <th class="text-right">Amount</th>
                    <th class="text-right">SubTotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item['id'] }}.</td>
                        <td>{{ $item['name'] }}</td>
                        <td>€ {{ number_format($item['final_price'], 2, ',', '.') }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>€ {{ number_format($item['final_price'] * $item['quantity'], 2, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="total">
        <span>Total: € {{ $total }}</span>
    </div>
</body>
</html>
