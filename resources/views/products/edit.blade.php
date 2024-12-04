@extends('layouts.app')
 
@section('title', 'Edit Product')
 
@section('contents')
    <hr>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12 mt-5">
            <div class="row mb-3">
                <div class="col-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $product->category }}">
                </div>
                <div class="col-3">
                    <label class="form-label">Brand</label>
                    <input type="text" name="brand" class="form-control" placeholder="Brand Name" value="{{ $product->brand}}">
                </div>
                <div class="col-3">
                    <label class="form-label">Price</label>
                    <input type="decimal" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                </div>
                <div class="col-3">
                    <label class="form-label">Product Code</label>
                    <input type="integer" name="product_code" class="form-control" placeholder="Code Number" value="{{ $product->product_code }}">
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <div class="row mb-3">
                <div class="col-3">
                    <label class="form-label">Quantity</label>
                    <input type="integer" name="quantity" class="form-control" placeholder="Number of Product" value="{{ $product->quantity }}">
                </div>
                {{-- <div class="col-3">
                    <label class="form-label">Expiry Date</label>
                    <input type="date" name="expiry" class="form-control" placeholder="Expiry Date" value="{{ $product->expiry }}">
                </div> --}}
                <div class="col-9">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Details of the product">{{ $product->description }}</textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="container mt-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
