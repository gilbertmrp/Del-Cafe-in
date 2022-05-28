@extends('admin.layouts.main')
@section('container')
<div class="">
  <div class="row mt-3">
    <div class="col"><h2 >Halaman Transaksi</h2></div>
    <div class="col">
      <form class="d-flex" action="{{ route('tampil.transaksi') }}" method="GET">
        <input class="form-control me-2" name="search" type="search" placeholder="Type with your id not name" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <a href="{{ url('/transaction-pdf')}}"><button type="button" class="btn btn-outline-dark">PDF</button></a>
  </div>
  <table class="table">
    <thead>
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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php $no=1; @endphp
      @foreach ($dataTransaksi as $index => $item)
      <tr>
        <th scope="row">{{ $index + $dataTransaksi->firstItem() }}</th>
        <td>{{ $item->user->name }}</td>
        <td>{{ $item->lauk }}</td>
        <td>{{ $item->sayur }}</td>
        <td>{{ $item->minuman }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->id }}</td>
        <td>{{ $item->menuType->type }}</td>
        <td>{{ $item->created_at->isoFormat('dddd, D MMM Y') }}</td>
        <td>
          <a href="{{ url('/view-transaction/'.$item->id) }}"><button type="button" class="btn btn-warning">View</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $dataTransaksi->links() }}
</div>
@endsection