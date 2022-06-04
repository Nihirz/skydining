@extends('layouts.adminheader')
@section('admincontent')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
            Product Table
        </div>
    </div>
    <div class="container">
        <form action="{{ route('admin.product.update') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
        <table class="table table-hover">
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <td><input class="form-control" type="text" name="name" id="" value="{{ $product->name }}"></td>
            </tr>
            <tr>
                <th>Description</th>
            </tr>
            <tr>
                <td>
                    <input class="form-control" type="text" name="description" id="" value="{{ $product->description }}">
                </td>
            </tr>
            <tr>
                <th>Price</th>
            </tr>
            <tr>
                <td><input class="form-control" type="text" name="price" id="" value="{{ $product->price }}"></td>
            </tr>
            <tr>
                <th>GST</th>
            </tr>
            <tr>
                <td><input class="form-control" type="text" name="gst" id="" value="{{ $product->gst }}"></td>
            </tr>
            <tr>
                <th>Type</th>
            </tr>
            <tr>
                <td>
                <select class="form-control" name="type" id="exampleInputType" class="form-control">
                    <option {{ $product->type == 'veg' ? 'selected="selected"' : '' }} value="veg">Veg</option>
                    <option {{ $product->type == 'n-veg' ? 'selected="selected"' : '' }} value="n-veg">None Veg</option>
                    <option {{ $product->type == 'cold' ? 'selected="selected"' : '' }} value="cold">cold</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Image</td>
            </tr>
            <tr>
                <td>
                    <input type="file" name="image" id="">
                    <img src="{{asset('image/'.$product->image)}}" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="save" id="" value="Update" class="btn btn-sm btn-primary" >
                </td>
            </tr>
        </table>
    </form>
    </div>
</div>



@endsection