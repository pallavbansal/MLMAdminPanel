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
                    <h2><strong>List Of All Registered Users</strong></h2>
                    <table id="transactionTable" class="table table-striped table-bordered mt-4" style="width:100%">
                        <thead>
                        <th>Id No.</th>
                        <th>Name</th>
                        <th>Email ID</th>
                        <th>Phone No.</th>
                        <th>DL Photo</th>
                        <th>Earnings</th>
                        <th>Account Level</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anthony</td>
                            <td>Anthony@gmail.com</td>
                            <td>7833929341</td>
                            <td><img></img></td>
                            <td>20000₹</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Anthony</td>
                            <td>Anthony@gmail.com</td>
                            <td>7833929341</td>
                            <td><img></img></td>
                            <td>20000₹</td>
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
  $('#transactionTable').DataTable();
});
</script>
@endsection
</html>
