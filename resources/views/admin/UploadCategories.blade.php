@extends('admin.layout.master')
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
    <div class="col-4" style="border-right: 1px dashed #333;">
    <form action="{{route('CreateCategory')}}" method="POST">
    @csrf
<H2><strong>Upload Categories</strong></H2><br>
  <div class="form-row">
    <div class="form-group">
      <label for="inputCity">Category</label>
      <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
      <span class="text-danger">@error('inputCity') {{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group">
      <label for="inputState">Sub-category</label>
      <select id="parent_category" class="form-control" name="parent_category">
        <option value="0">Parent Category</option>
        @foreach ($categories as $item)
        <option value="{{$item->id}}">{{$item->category_name}}</option>
        @endforeach
      </select>
      <span class="text-danger">@error('inputState') {{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-row">
        <div class="form-group">
        <label for="inputPhoto">Upload Photo</label>
         
        <input type="file" class="form-control" id="" name="" placeholder="Category Photo">
                {{-- <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div> --}}
                <span class="text-danger">@error('inputPhoto') {{$message}} @enderror</span>
           
        </div>
  </div>
  <button type="submit" class="btn btn-primary">Upload</button>
</form>
    </div>
    <div class="col-md-8">
      <h3><span style="color: #4273FA;">Monitoring Provider List</span></h3>
          <table id="MonitoringTable" class="table table-hover table-listing" style="width:100%">
              <thead>
              <th>Category Name</th>
              <th>Parent Category</th>
              <th>Action</th>
              </thead>
              <tbody>
                  @foreach ($categories as $item)
                  <tr>
                      <td>{{$item->category_name}}</td>
                      <td>{{$item->id}}</td>
                      <td><a href="DeleteCategories/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
</div>
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
</script>
@endsection
</html>
