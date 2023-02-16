@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;">Add Product</button>
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
                                <th>Quantity</th>
                                <th>Acrions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                                <td style="display: flex;">
                                    <button type="button" class="btn btn-primary" style="margin-right: 10px;">View</button>
                                    <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                                <td style="display: flex;">
                                    <button type="button" class="btn btn-primary" style="margin-right: 10px;">View</button>
                                    <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                                <td style="display: flex;">
                                    <button type="button" class="btn btn-primary" style="margin-right: 10px;">View</button>
                                    <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                                <td style="display: flex;">
                                    <button type="button" class="btn btn-primary" style="margin-right: 10px;">View</button>
                                    <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
                                </td>
                            </tr>
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