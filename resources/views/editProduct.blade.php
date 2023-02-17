@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit Product') }}
                    <a href="{{ url('home') }}">
                        <button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;">
                            Back
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ url('update-product') . '/' . $product->id }}" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputProductName">Product Name</label>
                            <input type="text" value="{{ isset($product->name) ? $product->name : 'NA' }}" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputProductName" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            @if (isset($product->image))
                            <img id="imagePreview" style="width: 200px;height: 200px;" class="profile-user-img img-fluid img-circle" src="{{ $product->image }}" alt="{{ $product->image }}">
                            @else
                            <img id="imagePreview" style="width: 200px;height: 200px;" class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/no-image-available-icon.jpg') }}" alt="Product image">
                            @endif
                            <label for="uploadImage">
                                <span class="btn btn-primary btn-block" style="width: 331px;">Select Image</span>
                                <input id="uploadImage" type="file" onchange="readURL(this);" accept="image/*" name="image" style="display:none" />
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductSku">Product SKU</label>
                            <input type="text" value="{{ isset($product->sku) ? $product->sku : 'NA' }}" class="form-control @error('sku') is-invalid @enderror" name="sku" id="exampleInputProductSku" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('sku')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductDesc" class="form-label">Product Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleInputProductDesc" rows="3">{{ isset($product->description) ? $product->description : 'NA' }}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductPrice">Product Price</label>
                            <input type="number" value="{{ isset($product->price) ? $product->price : 'NA' }}" class="form-control @error('price') is-invalid @enderror" name="price" id="exampleInputProductPrice" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputProductQuantity">Product Quantity</label>
                            <input type="number" value="{{ isset($product->quantity) ? $product->quantity : 'NA' }}" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="exampleInputProductQuantity" aria-describedby="emailHelp" placeholder="Enter product name">
                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const APP_URL = "{{ env('APP_URL') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // image preview
        readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>
@endsection
