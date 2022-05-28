@extends('user.layouts.main')
@section('container')
<div >
    <h1 class="h2">Halaman Review</h1>
    <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Hasil Feedback</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($review as $item)
              <tr>
                <th scope="row">{{ $no++; }}</th>
                <td>{{ $item->users->name }}</td>
                <td>{{ $item->description }}</td>
                @endforeach
              </tr>
            </tbody>
    </table>
  </div>
@endsection