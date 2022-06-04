@extends('layouts.adminheader')
@section('admincontent')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                Product Table
            </div>
            <div class="col-lg-2">
                <Button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add</Button>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>GST</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $row)
                    <tr>
                        <td><img src="{{asset('image/'.$row->image)}}" alt="" srcset=""></td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description}}</td>
                        <td>{{ $row->price}}</td>
                        <td>{{ $row->gst }}</td>
                        <td>{{ $row->type}}</td>
                        <td>
                            <a href="{{ route('admin.product.edit',$row->id)}}">Edit</a>
                            <a href="{{ route('admin.product.delete',$row->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Add Product Modal --}}
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputName" name="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputImage" class="form-label">Image</label>
                  <input type="file" name="image" class="form-control" id="exampleInputImage">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice" class="form-label">Price</label>
                    <input type="tex" name="price" class="form-control" id="exampleInputPrice">
                </div>
                <div class="mb-3">
                    <label for="exampleInputGst" class="form-label">GST</label>
                    <input type="text" name="gst" class="form-control" id="exampleInputGst">
                </div>
                <div class="mb-3">
                    <label for="exampleInputType" class="form-label">Product Type</label>
                    <select name="type" id="exampleInputType" class="form-control">
                        <option value="veg">Veg</option>
                        <option value="n-veg">None Veg</option>
                        <option value="cold">cold</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputDescription">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Store</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection