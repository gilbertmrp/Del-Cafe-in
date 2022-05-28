@extends('admin.layouts.main')
@section('container')
<div >
  <h1 class="h2">Halaman Coupon</h1>
  <a href="{{ url('/add-coupon') }}"><button type="button" class="btn btn-success">Add Coupon</button></a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Code Coupon</th>
        <th scope="col">Diskon</th>
        <th scope="col">Expired</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1 ?>
      @foreach ($dataCoupon as $row)
      <tr>
        <th scope="row">{{ $no++; }}</th>
        <td>{{ $row->code }}</td>
        <td>{{ $row->discount_percent }}</td>
        <td>{{ $row->expired }}</td>
        <td>{{ $row->status }}</td>
        <td>
          <a href="{{ url('/edit-coupon/'.$row->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
          <a href="#"><button type="button" class="btn btn-danger delete" data-id= "{{ $row->id }}" data-code="{{ $row->code }}">Delete</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection