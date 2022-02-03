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
    <style>
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
</head>
<body class="antialiased">
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form method="post" action="CreateEquipements" enctype="multipart/form-data">
                @csrf
            <h3><span style="color: #4273FA;">Equipement Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="equipment_name">Name</label>
                        <input type="name" class="form-control" id="equipment_name"  name="equipment_name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package">Select Package Type</label>
                        <select id="package" name="package" class="form-control">
                            @foreach ($package as $item)
                                <option value="{{$item->id }}">{{$item->package_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="equipment_price">Price</label>
                    <input type="number" class="form-control" id="equipment_price" name="equipment_price" placeholder="Equipment Price">
                </div>
                <div class="form-group">
                    <label for="inputPhoto">Upload Photo</label>
                    <div class="row">
                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2 shadow-sm">
                                <input id="equipment_media" name="equipment_media" type="file"  class="form-control border-0">
                            </div>
                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload Equipement</button>
            </form>
        </div>
        <div class="col-md-6">
        <h3><span style="color: #4273FA;">Equipements List</span></h3>
            <table id="EquipementsTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Package Type</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($equipment as $item)
                    <tr>
                        <td>{{$item->equipment_name}}</td>
                        <td>{{$item->price }}</td>
                        <td><img src="{{$item->equipment_media_url}}" style="width:150px" ></td>
                        <td>{{$item->package_name }}</td>
                        <td><a href="DeleteEquipements/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

$(document).ready(function () {
    $('#EquipementsTable').DataTable({
        language: {
        searchPlaceholder: "Search records"
    }
    });
});
</script>
@endsection
</html>
