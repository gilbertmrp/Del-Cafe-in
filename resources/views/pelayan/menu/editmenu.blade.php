@extends('pelayan.layouts.main')
@section('container')
<div class="container ">
    <h1>Edit Menu</h1>
    <div class="row ">
        <div class="col-8 ">
            <div class="card ">
                <div class="card-body ">
                    <form action="{{ url('/update/'.$data->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Hari</label>
                          <select class="form-select" aria-label="Default select example" name="day_id">
                            <option>--Pilih Hari--</option>
                            @foreach ($days as $row)
                                <option value="{{ $row->id }}" 
                                  @if($row->id == $data->day_id)
                                    selected
                                  @endif
                                  >{{ $row->days_name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis</label>
                          <select class="form-select" aria-label="Default select example" name="menu_type_id">
                            <option>--Pilih Jenis Menu--</option>
                            @foreach ($menulevels as $row)
                                <option value="{{ $row->id }}" 
                                  @if($row->id == $data->menu_type_id)
                                    selected
                                  @endif
                                  >{{ $row->type }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3 ">
                          <label for="exampleInputEmail1" class="form-label">Lauk</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lauk" value="{{ $data->lauk }}">
                        </div>
                        <div class="mb-3 ">
                          <label for="exampleInputEmail1" class="form-label">Alternatif 1 Lauk</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alternatif_1" value="{{ $data->alternatif_1 }}">
                        </div>
                        <div class="mb-3 ">
                          <label for="exampleInputEmail1" class="form-label">Alternatif 2 Lauk</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alternatif_2" value="{{ $data->alternatif_2 }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Sayur</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sayur" value="{{ $data->sayur }}">
                          </div>
                          <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Minuman</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="minuman" value="{{ $data->minuman }}">
                          </div>
                          <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="{{ $data->harga }}">
                          </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection