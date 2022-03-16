{{-- <!DOCTYPE html> --}}
{{-- < lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }
   </style> 
</head> --}}
@extends('brackets/admin-ui::admin.layout.default')
@section('title', trans('admin.admin-user.actions.create'))
@section('body')
<div class="container-fluid mt-5">
     @yield('body')
</div>
@endsection
