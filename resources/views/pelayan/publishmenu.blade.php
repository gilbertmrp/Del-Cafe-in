@extends('pelayan.layouts.main')
@section('container')
    <h1>Halaman Publish Menu</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Hari</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($days as $row)
          <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->days_name  }}</td>
            <td>
              @if($row->status == 'Published')
              <button type="button" class="btn btn-success">Published</button>
              @else
                <a href="{{ url('/publish-menu/'.$row->id) }}"><button type="button" class="btn btn-info">Publish</button></a>
              @endif
            
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
