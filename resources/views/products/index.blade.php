@extends('products.layout')

@section('content')
    <div class="row g-2 mb-3">
        <div class="col-lg-12">
            <div class="text-left">
                <h2 class="page-title shadow-sm">Product List</h2>
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

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped mb-0">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <form class="text-center mb-0" action="{{ route('products.destroy', $product->id) }}"
                                    method="POST">
                                    <a class="btn btn-dark" href="{{ route('products.show', $product->id) }}"><i
                                            class="fa-solid fa-eye"></i> Show</a>
                                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}"><i
                                            class="fa-solid fa-pencil"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    {{ $products->links() }}
@endsection
