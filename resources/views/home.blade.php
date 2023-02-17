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
                    <table id="product-table" class="display table table-bordered">
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
                                    <a href="{{ url('product') . '/' . $product->id }}">
                                        <button type="button" class="btn btn-primary"  style="margin-right: 10px;">View</button>
                                    </a>
                                    <a href="{{ url('edit-product') . '/' . $product->id }}">
                                        <button type="button" class="btn btn-success" style="margin-right: 10px;">Edit</button>
                                    </a>
                                    <a href="{{ url('add-product') . '/' . $product->id }}">
                                        <button type="button" id="{{ $product->id }}" class="btn btn-danger deleteProduct" style="margin-right: 10px;">Delete</button>
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
    $(document).ready(function() {
        const APP_URL = "{{ env('APP_URL') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Data table
        $('#product-table').DataTable({
            fixedColumns: true
        });

        // Delete Product
        $('.deleteProduct').click(function() {
            event.preventDefault();
            Swal.showLoading();
            var id = $(this).attr('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "DELETE",
                        url: APP_URL + "delete-product/" + id,
                        success: function(res) {
                            console.log(res)
                            if (res.status == 200) {
                                Swal.fire(
                                    'Deleted!',
                                    res.message,
                                    'success'
                                );
                                $('.swal2-confirm').click(function() {
                                    setInterval(function() {
                                        location.reload();
                                    }, 500);
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: res.message,
                                })
                            }
                        },
                    });
                }
            });
        });

    });
</script>
@endsection