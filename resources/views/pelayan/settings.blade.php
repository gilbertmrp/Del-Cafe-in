@extends('pelayan.layouts.main')
@section('container')
<div >
    <h1 class="h2">Settings</h1>
    <form class="row g-3" method="POST" action="{{ route('settings.edit') }}">
        @method("put")
        @csrf
        <div class="col-md-12">
            <label for="current_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="current_email" name="current_email" value="{{ old('current_email', Auth::user()->email) }}" disabled>
        </div>
        <div class="col-md-12">
            <label for="current_password" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
            @error('current_password')
                <div class="text-danger mt-2 text-sm">
                    {{$message}} 
                </div> 
            @enderror
        </div>
        <div class="col-md-12">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <div class="text-danger mt-2 text-sm">
                    {{$message}}    
                </div> 
            @enderror
        </div>
        <div class="col-md-12">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <div class="text-danger mt-2 text-sm">
                    {{$message}} 
                </div> 
            @enderror
        </div>
        <div class="col-md-6 flex">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
  </form>
</div>
@endsection


