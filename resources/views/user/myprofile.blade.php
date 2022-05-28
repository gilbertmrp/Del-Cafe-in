@extends('user.layouts.main')
@section('container')
<div class="card" style="width: 30rem;">
        <div class="card-body">
            <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Profile Anda</h3>
            <div class="form-group">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ Auth::user()->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                {{ Auth::user()->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                {{ Auth::user()->email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email verified at 
                            </th>
                            <td>
                                {{ Auth::user()->created_at->isoFormat('dddd, D MMM Y') }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Saldo
                            </th>
                            <td>
                                Rp.{{ Auth::user()->balance }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection


