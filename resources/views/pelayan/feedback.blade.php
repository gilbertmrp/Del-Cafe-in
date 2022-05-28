@extends('pelayan.layouts.main')
@section('container')
    <h1>Halaman Feedback</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($feedbacks as $row)
          <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->users->name  }}</td>
            <td>{{ $row->description }}</td>
            <td>
            <a href="{{ url('/feedback/view/'.$row->id) }}"><button type="button" class="btn btn-warning"><span data-feather="eye"></span> View</button></a>
            <a href="#"><button type="button" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</button></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
