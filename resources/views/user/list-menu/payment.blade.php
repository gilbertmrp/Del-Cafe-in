@extends('user.layouts.main')
@section('container')
<div class="card">
    <div class="card-header mt-4">
        Show Menu
    </div>
    <form action="{{ url('/payments/'.$payments->id) }}" enctype="multipart/form-data" method="POST">
    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Lauk
                        </th>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="lauk">
                                  <option value="{{ $payments->lauk }}" selected>{{ $payments->lauk }}</option>
                                  <option value="{{ $payments->alternatif_1 }}" >{{ $payments->alternatif_1 }}</option>
                                  @if($payments->alternatif_2 != '')
                                    <option value="{{ $payments->alternatif_2 }}" >{{ $payments->alternatif_2 }}</option>
                                  @endif
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sayur
                        </th>
                        <td>
                            {{ $payments->sayur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minuman
                        </th>
                        <td>
                            {{ $payments->minuman }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Harga 
                        </th>
                        <td>
                            {{ $payments->harga }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Type
                        </th>
                        <td>
                            {{ $payments->menuType->type }}
                        </td>
                    </tr>
                </tbody>
            </table>

    <div class="card-header mt-4">
        List Coupons
    </div>
    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
            <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Kode Coupon</th>
            <th scope="col">Discount</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
            @foreach($coupons as $row)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $row->code }}</td>
              <td>{{ $row->discount_percent }}</td>
              <td>
                <button type="button" id="coupon{{$row->coupon_id}}" onclick="couponFunction({{$row->coupon_id}}, {{ $row->discount_percent }}, {{$payments->harga}})" class="btn btn-success">Apply</button>
              </td>
            </tr>
            @endforeach
        </tbody>
            </table>

            
            @csrf
            <div class="form-group">
                <div class="d-flex justify-content-center"><h3 class="text-center">Total Harga : </h3> &nbsp; <h3 id="mainPrice"> Rp. {{ $payments->harga }}</h3> &nbsp; &nbsp; <h3 id="discPrice"> </h3></div>
                <div style="display:inline;"> 
                <a class="btn btn-default" href="{{ url()->previous() }}">
                    Back to list
                </a>
                <input type="number" class="form-control" id="coupon" name="coupon" value="0" hidden>
                <button class="btn btn-secondary" style="margin-left: 38%; padding-right:20px; padding-left:20px" type="submit">Bayar</button>
                </div>
                <div class="container text-center">
                </div>
            </div>
            </form>
        </div>
    </div>
    
<script>
    function couponFunction(id, disc, harga) {
        const btn1 = document.getElementById("coupon"+id);
        const coupon = document.getElementById("coupon");
        if(coupon.value == id){
            btn1.textContent = 'Apply'
            btn1.className = "btn btn-success";
            coupon.value = 0;
            const mainPrice = document.getElementById("mainPrice");
            mainPrice.style.textDecoration = "none";
            mainPrice.style.color = "black";
            const discPrice = document.getElementById("discPrice");
            discPrice.textContent = "";
        }else{
            if(coupon.value != 0){
                btn2 = document.getElementById("coupon"+coupon.value);
                btn2.textContent = 'Apply'
                btn2.className = "btn btn-success";
            }
            btn1.textContent = 'Remove';
            btn1.className = "btn btn-danger";
            coupon.value = id;
            const mainPrice = document.getElementById("mainPrice");
            mainPrice.style.textDecoration = "line-through";
            mainPrice.style.color = "red";
            var potongan = harga * disc / 100;
            var price = harga - potongan;
            const discPrice = document.getElementById("discPrice");
            discPrice.textContent = "Rp. "+price;
        }
        
    }
</script>
@endsection
