@extends('layouts.app')
 
@section('title', 'Create Product')
 
@section('contents')
    <hr>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Product name">
            </div>
            <div class="col">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Code Number">
            </div>
            <div class="col">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Details of the product"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
