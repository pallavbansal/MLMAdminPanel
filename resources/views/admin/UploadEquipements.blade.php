@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
    $('#SystemPanelTable').DataTable({
        language: {
        searchPlaceholder: "Search records"
    }
    });
});
</script>
@endpush
@push('page_style')
<style>
.pagination {
    float: right;
}
#SystemPanelTable_filter {
    float: right;
}
</style>
@endpush
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-4" style="border-right: 1px dashed #333;">
            <form method="post" action="{{route('CreateEquipements')}}" enctype="multipart/form-data">
                @csrf
            <h3><span style="color: #4273FA;">Equipement Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="equipment_name">Name</label>
                        <input type="name" class="form-control" id="equipment_name"  name="equipment_name" placeholder="Name" value="{{old('equipment_name')}}">
                        <span class="text-danger">@error('equipment_name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package">Select Package Type</label>
                        <select id="package" name="package" class="form-control">
                            @foreach ($package as $item)
                                <option value="{{$item->id }}">{{$item->package_name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('package') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group col">
                        <label for="description">Equipment Description</label>
                        <textarea type="description" class="form-control" id="description"  name="description" placeholder="Equipment Description"></textarea>
                        <span class="text-danger">@error('package') {{$message}} @enderror</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="equipment_price">Price</label>
                    <input type="number" class="form-control" id="equipment_price" name="equipment_price" placeholder="Equipment Price">
                    <span class="text-danger">@error('equipment_price') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="inputPhoto">Upload Photo</label>
                    <div class="row">
                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2 shadow-sm">
                                <input id="equipment_media" name="equipment_media" type="file"  class="form-control border-0">
                            </div>
                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                            <span class="text-danger">@error('inputPhoto') {{$message}} @enderror</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        <div class="col-md-8">
        <h3><span style="color: #4273FA;">Equipements List</span></h3>
            <table id="EquipementsTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Package Type</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($equipment as $item)
                    <tr>
                        <td>{{$item->equipment_name}}</td>
                        <td>{{$item->price }}</td>
                        <td><img src="{{$item->equipment_media_url}}" style="width:150px" ></td>
                        <td>{{$item->description }}</td>
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
