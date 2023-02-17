@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('View Product') }}
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

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($product->name) ? $product->name : 'NA' }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product Image</p>
                                </div>
                                <div class="col-sm-9">
                                    <img src="{{ isset($product->image) ? $product->image : '' }}" width="200px;" alt="{{ isset($product->image) ? $product->image : '' }}">
                                    <!-- <p class="text-muted mb-0">example@example.com</p> -->
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product sku</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($product->sku) ? $product->sku : 'NA' }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($product->description) ? $product->description : 'NA' }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Product Quantity</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ isset($product->quantity) ? $product->quantity : 'NA' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection