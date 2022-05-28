@extends('admin.layouts.main')
@section('container')
<div class="card">
    <div class="card-header mt-4">
        Show Users
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ url('/roles') }}">
                    Back to roles
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $dataUser->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $dataUser->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $dataUser->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email verified at 
                        </th>
                        <td>
                            {{ $dataUser->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Roles
                        </th>
                        <td>
                            <span class="label label-info" disabled>
                                @foreach ($dataUser->roles as $role)
                                    {{ $role->name}}
                                @endforeach
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ url('/roles') }}">
                    Back to list
                </a>
            </div>
        </div>
    </div>
    
@endsection
