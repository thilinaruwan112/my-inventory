@extends('products.layout')

@section('content')
    <div class="row g-2 mb-3">
        <div class="col-lg-12">
            <div class="text-left">
                <h3 class="page-title shadow-sm">Product List</h3>
            </div>
            <div class="text-end">
                <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fa-solid fa-plus"></i> Create New
                    Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ $message }}</p>
        </div>
    @endif

    <div class="row g-2 mb-3">
        <div class="col-12">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-0">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price(Rs)</th>
                                <th>Stock</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="no-wrap">{{ $product->id }}</td>
                                    <td class="no-wrap">{{ $product->name }}</td>
                                    <td class="no-wrap text-end">{{ $product->price }}</td>
                                    <td class="no-wrap text-end">{{ $product->quantity }}</td>
                                    <td class="no-wrap">{{ $product->description }}</td>
                                    <td>
                                        <form class="text-center mb-0"
                                            action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            <div class="row g-1">
                                                <div class="col-md-4 d-flex">
                                                    <a class="btn btn-dark flex-fill"
                                                        href="{{ route('products.show', $product->id) }}"><i
                                                            class="fa-solid fa-eye d-block"></i> Show</a>
                                                </div>
                                                <div class="col-md-4 d-flex">
                                                    <a class="btn btn-primary flex-fill"
                                                        href="{{ route('products.edit', $product->id) }}"><i
                                                            class="fa-solid fa-pencil  d-block"></i> Edit</a>
                                                </div>
                                                <div class="col-md-4 d-flex">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger flex-fill"><i
                                                            class="fa-solid fa-trash d-block"></i>
                                                        Delete</button>
                                                </div>
                                            </div>



                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $products->links() }}
@endsection
