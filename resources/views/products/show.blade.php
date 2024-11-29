@extends('layouts.app')
 
@section('title', 'Show Product')
 
@section('contents')
    <hr>
    <div class="col-12 mt-5">
        <div class="row mb-3">
            <div class="col-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $product->category }}" readonly>
            </div>
            <div class="col-3">
                <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ $product->brand }}" readonly>
            </div>
            <div class="col-3">
                <label class="form-label">Price</label>
                <input type="integer" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
            </div>
            <div class="col-3">
                <label class="form-label">Product Code</label>
                <input type="integer" name="product_code" class="form-control" placeholder="Code Number" value="{{ $product->product_code }}" readonly>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row mb-3">
            <div class="col-3">
                <label class="form-label">Quantity</label>
                <input type="integer" name="quantity" class="form-control" placeholder="Pieces or Box or Kilo" value="{{ $product->quantity }}" readonly>
            </div>
            <div class="col-3">
                <label class="form-label">Expiry Date</label>
                <input type="date" name="expiry" class="form-control" placeholder="expiry" value="{{ $product->expiry }}" readonly>
            </div>
            <div class="col-6">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Details of the product" readonly>{{ $product->description }}</textarea>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
    <hr>
@endsection
