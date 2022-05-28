@extends('admin.layouts.main')
@section('container')
<div>
  <div>
    <div class="row mt-3">
      <div class="col"><h2 >Halaman Roles</h2></div>
        <div class="col">
          <form class="d-flex" action="{{ route('roles') }}" method="GET">
            <input class="form-control me-2" name="search" type="search" placeholder="Type to search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </div>
  </div>
  <table class="table caption-top">
    <caption>List of roles</caption>
    <a href="{{ route('generate.roles') }}"><button type="button" class="btn btn-primary">Export PDF</button></a>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Email verified at</th>
        <th scope="col">Roles</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      @foreach ($dataUser as $index => $row)
      <tr>
        <th scope="row">{{ $index + $dataUser->firstItem() }}</th>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->created_at->isoFormat('dddd, D MMM Y') }}</td>
        <td>
          <span><button type="button" class="btn btn-primary" style="font-size: 12px; padding:5%" disabled>
            @foreach ($row->roles as $role)
              {{ $role->name}}
            @endforeach
          </button></span>
        </td>
        <td>
          <a href="{{ url('/roles/view/'.$row->id) }}"><button type="button" class="btn btn-warning" style="font-size:12px">View</button></a>
          <button type="button" class="btn btn-danger" style="font-size:12px">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $dataUser->links() }}
</div>
@endsection