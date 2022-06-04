@extends('layouts.adminheader')
@section('admincontent')

<div class="container">
    <tr>
        <td colspan="2">
            <h1>Edit Promocode</h1>
        </td>
    </tr>
    <form action="{{ route('admin.promocodeupdate') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $promocode->id }}" >
    <table class="table">
        <tr>
            <th>Promocode Name</th>
            <td><input type="text" name="name" id="" value="{{$promocode->name}}"></td>
        </tr>
        <tr>
            <th>Promocode Discount</th>
            <td><input type="text" name="discount" id="" value="{{$promocode->discount}}"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" id="" value="Update" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>
@endsection