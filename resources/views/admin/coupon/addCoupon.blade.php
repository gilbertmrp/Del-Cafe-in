@extends('admin.layouts.main')
@section('container')
<div >
  <h1 class="h2">Buat Coupon</h1>
  <form class="row g-3" action="{{ url('/add-coupon-process') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Code</label>
      <input type="text" class="form-control" id="inputEmail4" name="code">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Discount</label>
      <input type="number" class="form-control" id="inputAddress" placeholder="1%-100%" name="discount_percent">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Expired</label>
      <input type="date" class="form-control" id="inputAddress2" placeholder="Tanggal Berakhir" name="expired">
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Status</label>
      <input type="text" class="form-control" id="inputZip" name="status" value="Active" readonly>
    </div>
    <div class="col-12">
      <a href="{{ url('/coupon') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
  </form>
</div>
@endsection