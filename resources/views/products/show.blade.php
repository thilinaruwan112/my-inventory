@extends('products.layout')

@section('content')
    <div class="row g-2">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h3 class="page-title shadow-sm"> Show Product</h3>
            </div>
            <div class="text-end">
                <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
                <a class="btn btn-dark" href="{{ route('products.edit', $product->id) }}"><i class="fa-solid fa-pencil"></i>
                    Edit</a>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img class="w-100 rounded-4" src="{{ asset('images/no-image.jpg') }}" alt="">
        </div>
        <div class="col-md-8">
            <div class="row g-3">
                <div class="col-md-12">
                    <p class="mb-0 text-secondary">Product Name</p>
                    <h4>{{ $product->name }}</h4>
                </div>

                <div class="col-md-6">
                    <p class="mb-0 text-secondary">Product Price</p>
                    <h2>LKR {{ $product->price }}</h2>
                </div>

                <div class="col-md-6">
                    <p class="mb-0 text-secondary">Current Stock</p>
                    <h2>{{ $product->quantity }}</h2>
                </div>

                <div class="col-md-12">
                    <p class="mb-0 text-secondary">Product Description</p>
                    <h5>{{ $product->description }}</h5>
                </div>

            </div>
        </div>
    </div>
@endsection
