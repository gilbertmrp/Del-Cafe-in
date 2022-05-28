@extends('user.layouts.main')
@section('container')
<div >
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Code Coupon</th>
        <th scope="col">Diskon</th>
        <th scope="col">Expired</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($coupons as $row)
      <tr>
        <th scope="row">{{ $row->id }}</th>
        <td>{{ $row->code }}</td>
        <td>{{ $row->discount_percent }}</td>
        <td>{{ $row->expired }}</td>
        <td>
            {{$status = false}}
            @foreach ($claimCoupons as $claim)
                @if($claim->coupon_id == $row->id)
                    @php $status = true @endphp
                    @break
                @endif
            @endforeach
            @if($status == true)
                <button type="button" class="btn btn-info" disabled>Claimed</button> 
            @else
            <a href="{{ url('/claim-coupon/'.$row->id) }}"><button type="button" class="btn btn-success">Claim</button></a>
            @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection