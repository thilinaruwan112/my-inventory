@extends('products.layout')

@section('content')
    <div class="row g-2">
        <div class="col-lg-12">
            <h2 class="page-title shadow-sm">Add New Product</h2>
        </div>
        <div class="col-md-12 text-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="card border-0 shadow-sm mt-3">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="number" name="price" class="form-control" placeholder="Price">
                        </div>
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <strong>Quanitity:</strong>
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <strong>Detail:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 text-end">
                        <button type="submit" class="btn btn-dark"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                    </div>
                </div>
        </div>
    </div>
    </form>
@endsection
