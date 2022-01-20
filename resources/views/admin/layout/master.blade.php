<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .table td,
    .table th {
        text-align: center;
    }

    .dataTables_filter input {
        border-radius: 5px;
        font-size: 12px;
        width: 200px;
    }
    .dataTables_length select {
        border-radius: 5px;
        font-size: 12px;
    }

    #transactionTable_filter {
     float: right;
    }
    
    #OrdersTable_filter {
     float: right;
    }
   </style> 
</head>
@extends('brackets/admin-ui::admin.layout.default')
@section('title', trans('admin.admin-user.actions.create'))
@section('body')
    <div class="container-fluid mt-5">
        @yield('body')
    </div>
@endsection
</html>
