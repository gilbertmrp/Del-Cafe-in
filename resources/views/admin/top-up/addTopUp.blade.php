@extends('admin.layouts.main')
@section('container')
<h3>Tambah Top Up</h3>
<form action="{{ url('/add/top-up/process/'.$dataUser->id) }}" method="post">
    @csrf
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Top Up :</label>
                    <input type="number" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="balance">
                </div>
            </div>  
        <a href="{{ route('topup') }}"><button type="button" class="btn btn-secondary mt-3">Back</button></a>
        <button type="submit" class="btn btn-success mt-3">Top Up</button>
        </div>
    </div>
</form>
@endsection