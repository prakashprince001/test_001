@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                                        
                    <form method="POST" action="{{ url('add-product') }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputProductName">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputProductName" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductSku">Product SKU</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" id="exampleInputProductSku" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('sku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="exampleInputProductDesc" class="form-label">Product Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleInputProductDesc" rows="3"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductPrice">Product Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="exampleInputProductPrice" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductQuantity">Product Quantity</label>
                            <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="exampleInputProductQuantity" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection