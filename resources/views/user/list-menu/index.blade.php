@extends('user.layouts.main')
@section('container')
<div>
    <h1>Sajian Menu</h1>
    <p>Berikut daftar menu yang tersedia dalam 1 minggu ini :</p>
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
                    @if($day->status == 'Published' && time() <= strtotime($row->menuType->menu_time))
                    <a href="{{ url('/payments/'.$row->id) }}"><button type="button" class="btn btn-success">Pesan</button></a>
                    @endif
                  </td>
                </tr>
            @endif
          @endforeach
        </tbody>
    </table>
    @endforeach

    
</div>

@endsection