@extends('products.layout')

@section('content')
    <div class="row g-2">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2 class="page-title shadow-sm"> Show Product</h2>
            </div>
            <div class="text-end">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->description }}
            </div>
        </div>
    </div>
@endsection
