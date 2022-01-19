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
</head>
<body class="antialiased">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col">
                <h2><strong>For The Registration Of First Level Account</strong></h2><br>
                <img src="https://pngimg.com/uploads/qr_code/qr_code_PNG26.png" alt="QR" width="300" height="300">
                <br>
                <H5>Scan this QR code to register first level account.</H5>
                <H6>www.xyz.com</H6>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
