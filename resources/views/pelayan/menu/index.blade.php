@extends('pelayan.layouts.main')
@section('container')
<div>
    <h1 class="h2">Halaman Menu</h1>
    <a href="{{ url('/menu/add') }}"><button type="button" class="btn btn-success mb-3">Tambah Menu</button></a>
    @foreach($days as $day)
      <h3>{{ $day->days_name }}</h3>
      <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Lauk</th>
            <th scope="col">Sayur</th>
            <th scope="col">Minuman</th>
            <th scope="col">ALternatif-1 Lauk</th>
            <th scope="col">ALternatif-2 Lauk</th>
            <th scope="col">Harga</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
            @foreach($menu as $row)
              @if($row->day_id == $day->id)
                <tr>
                  <th scope="row">{{ $no++; }}</th>
                  <td>{{ $row->lauk }}</td>
                  <td>{{ $row->sayur }}</td>
                  <td>{{ $row->minuman }}</td>
                  <td>{{ $row->alternatif_1 }}</td>
                  <td>{{ $row->alternatif_2 }}</td>
                  <td>{{ $row->harga }}</td>
                  <td>{{ $row->menuType->type }}</td>
                  <td>
                      <a href="{{ url('/edit/'.$row->id) }}"><button type="button" class="btn btn-success">Update</button></a>
                      <a href="#"><button type="button" class="btn btn-danger delete" data-id="{{ $row->id }}" >Delete</button></a>
                  </td>
                </tr>
            @endif
          @endforeach
        </tbody>
    </table>
    @endforeach

    
</div>

@endsection