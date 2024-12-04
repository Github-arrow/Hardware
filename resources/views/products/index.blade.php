@extends('layouts.app')
 
@section('title', 'Home Product')
 
@section('contents')
    <hr>
    <div class="d-flex align-items-end justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th class="d-flex justify-content-end">Action</th>
            </tr>
        </thead>
        <tbody>
            <br>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->brand }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->quantity }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">{{ $rs->created_at  }}</td>
                        <td class="align-middle">{{ $rs->updated_at  }}</td>  
                        <td class="d-flex align-items-end justify-content-end">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">View</a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Update</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
