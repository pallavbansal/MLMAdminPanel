@extends('admin.layout.master')
@push('page_script')
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

$(document).ready(function () {
    $('#EquipementsTable').DataTable({
        language: {
        searchPlaceholder: "Search records"
    }
    });
});


const regex = /^[a-zA-Z ]+$/;
function validate(e) {
  const chars = e.target.value.split('');
  const char = chars.pop();
  if (!regex.test(char)) {
    e.target.value = chars.join('');
    console.log(`${char} is not a valid character.`);
  }
}
document.querySelector('#equipment_name').addEventListener('input', validate);

const regex2 = /[0-9]/;
function validateNumber(e) {
  const chars = e.target.value.split('');
  const char = chars.pop();
  if (!regex2.test(char)) {
    e.target.value = chars.join('');
    console.log(`${char} is not a valid character.`);
  }
}
document.querySelector('#equipment_price').addEventListener('input', validateNumber);

</script>
@endpush
@push('page_style')
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
@endpush
@section('body')
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
                        <td><img src="{{$item->equipment_media_url}}" style="width:80px" ></td>
                        <td>{{$item->package_name }}</td>
                        <td><a href="DeleteEquipements/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
