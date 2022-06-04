@extends('layouts.adminheader')
@section('admincontent')
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="" method="post" class="">
                <div class="form-group">
                    @foreach ($user as $row)
                        
                    <div class="input-group">
                        <input type="text" id="username2" name="username2" placeholder="Username" class="form-control" value="{{ $row->name }}" disabled>
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email2" name="email2" placeholder="Email" class="form-control" value="{{ $row->email }}" disabled>
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        {{-- <input type="password" id="password2" name="password2" placeholder="Password" class="form-control" value="{{ $row-> }}" disabled> --}}
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                    </div>
                </div>
                @endforeach
                <div class="form-actions form-group d-none"><button type="submit" class="btn btn-secondary btn-sm">Submit</button></div>
            </form>
        </div>
    </div>
</div>

@endsection