@extends('layouts.adminheader')
@section('admincontent')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Users Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    {{-- <th>Salary</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $row)   
                                <tr>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email}}</td>
                                    <td><a href="{{ route('admin.users.view',$row->id) }}" class="btn btn-sm btn-primary">view</a></td>
                                    {{-- <td>$320,800</td> --}}
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection