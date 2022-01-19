<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.admin-user.actions.create'))

@section('body')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"> </script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"> </script>
   <style>
    .table td,
    .table th {
        text-align: center;
    }
   </style> 
</head>
    <body class="antialiased">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2><strong>List Of All Orders</strong></h2>
                    <table id="OrdersTable" class="table table-striped table-bordered mt-4" style="width:100%">
                        <thead>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Account Level</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jacket</td>
                            <td>20000₹</td>
                            <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>20000₹</td>
                            <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>20000₹</td>
                            <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>20000₹</td>
                            <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>20000₹</td>
                            <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </body>
<script>
$(document).ready(function () {
  $('#OrdersTable').DataTable();
});
</script>
@endsection
</html>
