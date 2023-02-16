@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <a href="{{ url('add-product') }}">
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;">
                        Add Product</button>
                    </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <table id="product" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Acrions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products) > 0)
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img src="{{ $product->image }}" style="width:100px ;" alt="">
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td style="display: flex;">
                                    <a href="{{ url('add-product') . '/' . $product->id }}">
                                        <button type="button" class="btn btn-primary" style="margin-right: 10px;">View</button>
                                    </a>
                                    <a href="{{ url('add-product') . '/' . $product->id }}">
                                        <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    </a>
                                    <a href="{{ url('add-product') . '/' . $product->id }}">
                                        <button type="button" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#product').DataTable({
        fixedColumns: true
    });
</script>
@endsection