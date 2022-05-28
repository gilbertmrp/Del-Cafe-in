<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .title {
        font-family: 'Lato';
    }
</style>
<body>

<div class="w3-container">
<h3 class="title">Transaction by : {{ $dataUserTransaksi->user->name }}</h4>
  <table class="w3-table-all">  
    <tbody>
        <tr>
            <th>
                ID
            </th>
            <td>
                {{ $dataUserTransaksi->user->id }}
            </td>
        </tr>
        <tr>
            <th>
                Name
            </th>
            <td>
                {{ $dataUserTransaksi->user->name }}
            </td>
        </tr>
        <tr>
            <th>
                Lauk
            </th>
            <td>
                {{ $dataUserTransaksi->lauk }}
            </td>
        </tr>
        <tr>
            <th>
                Sayur 
            </th>
            <td>
                {{ $dataUserTransaksi->sayur }}
            </td>
        </tr>
        <tr>
            <th>
                Minuman
            </th>
            <td>
                {{ $dataUserTransaksi->minuman }}
            </td>
        </tr>
        <tr>
            <th>
                Harga
            </th>
            <td>
                Rp{{ number_format($dataUserTransaksi->harga, 0, ',', '.') }}
            </td>
        </tr>
        <tr>
            <th>
                Coupon
            </th>
            <td>
                {{ $dataUserTransaksi->id_coupon }}
            </td>
        </tr>
        <tr>
            <th>
                Tipe Menu
            </th>
            <td>
                {{ $dataUserTransaksi->menuType->type }}
            </td>
        </tr>
    </tbody>
  </table>
</div>

</body>
</html>
