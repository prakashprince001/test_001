@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <p>Date: <input type="text" id="datepicker"></p>
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

                    <div class="row gx-5">
                        <div class="col-xxl-3 col-md-6 mb-5">
                            <div class="card card-raised bg-primary text-white">
                                <div class="card-body px-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="me-2">
                                            <div class="display-5 text-white" id="total_user">{{ isset($data['total_user']) ? $data['total_user'] : 0 }}</div>
                                            <div class="card-text">Total Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mb-5">
                            <div class="card card-raised bg-warning text-white">
                                <div class="card-body px-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="me-2">
                                            <div class="display-5 text-white" id="total_product">{{ isset($data['total_product']) ? $data['total_product'] : 0 }}</div>
                                            <div class="card-text">Total Product</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mb-5">
                            <div class="card card-raised bg-secondary text-white">
                                <div class="card-body px-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="me-2">
                                            <div class="display-5 text-white" id="total_product_price">{{ isset($data['total_product_price']) ? $data['total_product_price'] : 0 }}</div>
                                            <div class="card-text">Total Product Price</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mb-5">
                            <div class="card card-raised bg-info text-white">
                                <div class="card-body px-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="me-2">
                                            <div class="display-5 text-white" id="total_inventory">{{ isset($data['total_inventory']) ? $data['total_inventory'] : 0 }}</div>
                                            <div class="card-text">Total Product Quantity</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

        // Date picker
        $("#datepicker").datepicker().on('change', function(ev) {
            var date = $(this).val();
            // alert(firstDate);
            $.ajax({
                method: "GET",
                url: APP_URL + "dashboard/?date=" + date,
                success: function(res) {
                    console.log(res);
                    if (res.status == 200) {
                        $("#total_user").text(res.data.total_user);
                        $("#total_product").text(res.data.total_product);
                        $("#total_product_price").text(res.data.total_product_price);
                        $("#total_inventory").text(res.data.total_inventory);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
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