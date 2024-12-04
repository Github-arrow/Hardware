@extends('layouts.app')
 
@section('title', 'Dashboard')
 
@section('contents')
<hr>
  <h1>This is your Dashboard</h1>

  {{-- <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <p>Total Products</p>
      </div>
      <div class="icon">
      <i class="fas fa-dolly-flatbed"></i>
      </div>
      <a href="{{route('products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div> --}}
@endsection
