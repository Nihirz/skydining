@extends('layouts.adminheader')
@section('admincontent')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                Promocode Table
            </div>
            <div class="col-lg-2">
                <Button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Add</Button>
            </div>
        </div>
        <div class="container">
            <table class="table tablpromocodee-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Discount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promocode as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->discount }}</td>
                        <td>
                            <a href="{{ route('admin.promocodeedit',$row->id)}}">Edit</a>
                            <a href="{{ route('admin.destroy.promocode',$row->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Add Promocode</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.store.promocode') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Promocode Name</label>
                  <input type="text" class="form-control" id="exampleInputName" name="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputImage" class="form-label">Discount</label>
                  <input type="text" name="discount" class="form-control" id="exampleInputImage">
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