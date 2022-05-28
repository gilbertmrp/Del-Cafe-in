@extends('pelayan.layouts.main')
@section('container')
    <h1>Halaman View</h1>
@section('container')
<div class="card">
    <div class="card-header mt-4">
        Show Feedback
    </div>
    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $viewFeed->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $viewFeed->users->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $viewFeed->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ url('/feedback') }}">
                    Back to Feedback Page
                </a>
            </div>
        </div>
    </div>
    
@endsection

@endsection
