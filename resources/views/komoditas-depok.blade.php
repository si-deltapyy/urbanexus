<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Depok</title>
</head>
<body>
    <h1>Data Harga Depok</h1>
    <table>
    <thead>
            <tr>
                <th>id Produk</th>
                <th>Komoditi</th>
                <th>Harga Hari Ini</th>
                <th>Harga Kemarin</th>
                <th>Selisih</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['data'] as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['komoditi'] }}</td>
                <td>{{ $item['price_today'] ?? '-' }}</td>
                <td>{{ $item['price_yesterday'] ?? '-' }}</td>
                <td>{{ $item['selisih'] ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
