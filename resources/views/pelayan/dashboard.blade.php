@extends('pelayan.layouts.main')
@section('container')
    <h1>Welcome Pelayan, {{ Auth::user()->name }}</h1>
@endsection
