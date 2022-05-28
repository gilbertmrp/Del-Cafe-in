@extends('admin.layouts.main')
@section('container')
<div >
  <div>
    <div class="row mt-3">
      <div class="col"><h2 >Halaman Top Up</h2></div>
      <div class="col">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  <form action="/top-up" method="GET">
    <table class="table caption-top">
        <caption>Data User Top Up</caption>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          @foreach ($dataRole as $index=>$row)
          <tr>
            <th scope="row">{{ $index + $dataRole->firstItem() }}</th>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>
                <a href="{{ url('/add/top-up/'.$row->user_id) }}"><button type="button" class="btn btn-warning">Top Up</button></a>
            </td>
          @endforeach
        </tbody>
    </table>
  </form>
 {{ $dataRole->links() }}
</div>
@endsection


