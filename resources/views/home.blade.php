@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table id="product" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Quantity</th>
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
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>T shirt</td>
                                <td>
                                    <img src="/product_images/1.jpg" style="width:100px ;" alt="">
                                </td>
                                <td>This is t shirt</td>
                                <td>10</td>
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