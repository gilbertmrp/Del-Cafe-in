@extends('user.layouts.main')
@section('container')
<div>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Lauk</th>
              <th scope="col">Sayur</th>
              <th scope="col">Minuman</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Coupon</th>
              <th scope="col">Tipe Menu</th>
              <th scope="col">Tanggal Transaksi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php $no=1; ?>
              @foreach ($transaction as $item)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $item->lauk }}</td>
              <td>{{ $item->sayur }}</td>
              <td>{{ $item->minuman }}</td>
              @if($item->coupon_id != null && $item->coupon != null)
              <td><div class="d-flex">Rp. <p style="color:red; text-decoration:line-through ">{{ $item->harga }}</p> &nbsp;<p> {{ $item->harga - ($item->harga*$item->coupon->discount_percent/100) }}  </p></div></td> 
              @else
                <td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td> 
              @endif
              
              <td>@if($item->coupon_id != null && $item->coupon != null) {{ $item->coupon->code }} @endif</td>
              <td>{{ $item->menuType->type }}</td>
              <td>{{ $item->created_at->isoFormat('dddd, D MMM Y') }}</td>
              <td>
                @if($item->created_at->format('Y-m-d') < Date::now()->format('Y-m-d'))
                  <a href="{{ url('/ulasan/'.$item->id) }}"><button type="button" class="btn btn-outline-success">Ulasan</button></a>
                @elseif(time() > strtotime($item->menuType->menu_time))
                  <a href="{{ url('/ulasan/'.$item->id) }}"><button type="button" class="btn btn-outline-success">Ulasan</button></a>
                @else
                  <a href="{{ url('/ubah-pesanan/'.$item->id) }}"><button type="button" class="btn btn-outline-danger">Ubah Pesanan</button></a>
                @endif
                
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
  </div>
@endsection