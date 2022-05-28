@extends('user.layouts.main')
@section('container')
<h1>Halaman Feedback</h1>
<div class="container align-item-center container-fluid">
    <div class="card" style="width: 27rem;">
        <div class="card-body">
            <form action="{{ url('/ulasan-process/'.$dataFeed->id) }}" method="POST">
                @csrf
                <input type="number" class="form-control" id="user_id" value="{{ $dataFeed->user->id }}" name="user_id" hidden>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $dataFeed->user->name }}" disabled>
                  @error('user_id')
                  <div class="text-danger">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ulasan</label>
                    <textarea id="" cols="30" rows="10" class="form-control" name="description" style="resize: none"></textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <a href="{{ route('transaction') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection