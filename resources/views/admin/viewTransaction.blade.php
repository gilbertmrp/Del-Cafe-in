@extends('admin.layouts.main')
@section('container')
<div class="card">
    <div class="card-header mt-4">
        Show Transaction History
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('tampil.transaksi') }}">
                    Back to list
                </a>         
                <a href="{{ url('/view-transaction-pdf/'.$dataUserTransaksi->id) }}"><button type="button" class="btn btn-outline-dark">PDF</button></a>
            </div>
            <table class="table table-bordered table-striped">
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
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('tampil.transaksi') }}">
                    Back to list
                </a>
            </div>
        </div>
    </div>
    
@endsection
