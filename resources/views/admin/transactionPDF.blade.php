<!DOCTYPE html>
<html>
    <head>
        <style>
            h2 {
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            table, td, th {  
            border: 1px solid #ddd;
            text-align: left;
            font-size: 12px
            }

            table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2>Data Semua Transaksi</h2>
        <table>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Lauk</th>
                <th scope="col">Sayur</th>
                <th scope="col">Minuman</th>
                <th scope="col">Harga</th>
                <th scope="col">Coupon</th>
                <th scope="col">Tipe Menu</th>
                <th scope="col">Tanggal Transaksi</th>
            </tr>
            @php $no=1; @endphp
            @foreach ($dataTransaksi as $index => $item)
            <tr>
                    <th scope="row">{{ $no++; }}</th>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->lauk }}</td>
                    <td>{{ $item->sayur }}</td>
                    <td>{{ $item->minuman }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->menuType->type }}</td>
                    <td>{{ $item->created_at->isoFormat('dddd, D MMM Y') }}</td>
               
            </tr> 
            @endforeach
        </table>
    </body>
</html>


