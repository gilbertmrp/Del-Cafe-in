@extends('user.layouts.main')
@section('container')
<div class="card">
    <div class="card-header mt-4">
        Ubah Menu
    </div>
    <form action="{{ url('/ubah-pesanan/'.$transaction->id) }}" enctype="multipart/form-data" method="POST">
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
                                  <option value="{{ $menu->lauk }}" @if($transaction->lauk == $menu->lauk) selected @endif>{{ $menu->lauk }}</option>
                                  <option value="{{ $menu->alternatif_1 }}" @if($transaction->lauk == $menu->alternatif_1) selected @endif>{{ $menu->alternatif_1 }}</option>
                                  @if($menu->alternatif_2 != '')
                                    <option value="{{ $menu->alternatif_2 }}" @if($transaction->lauk == $menu->alternatif_2) selected @endif>{{ $menu->alternatif_2 }}</option>
                                  @endif
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sayur
                        </th>
                        <td>
                            {{ $transaction->sayur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Minuman
                        </th>
                        <td>
                            {{ $transaction->minuman }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Type
                        </th>
                        <td>
                            {{ $transaction->menuType->type }}
                        </td>
                    </tr>
                </tbody>
            </table>
            @csrf
            <div class="form-group">
                
                <div style="display:inline;"> 
                <a class="btn btn-default" href="{{ url()->previous() }}">
                    Back to list
                </a>
                <input type="number" class="form-control" id="coupon" name="coupon" value="0" hidden>
                <button class="btn btn-secondary" style="margin-left: 38%; padding-right:20px; padding-left:20px" type="submit">Ubah</button>
                </div>
                <div class="container text-center">
                </div>
            </div>
            </form>
        </div>
    </div>
   
@endsection