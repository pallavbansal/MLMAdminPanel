@extends('admin.layout.master')
@section('body')

<div class="row p-3 mb-5 bg-white rounded">
    <div class="col-4 " style="border-right: 1px dashed #333;">
<form action="{{route('CreateProduct')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <H2><strong>Upload Products</strong></H2><br>
  <div class="form-row">
    <div class="form-group col-md-6" >
      <label for="product_name">Name</label>
      <input type="name" class="form-control" id="product_name" placeholder="Name" name="product_name" value="{{old('product_name')}}">
      <span class="text-danger">@error('product_name') {{$message}} @enderror</span>
    </div>
    <div class="form-group col-md-6">
      <label for="category_id">Product Category</label>
      <select id="category_id" class="form-control" name="category_id">
        <option value="0">Select Category</option>
        @foreach ($categories as $item)
        <option value="{{$item->id}}">{{$item->category_name}}</option>
        @endforeach
      </select>
      <span class="text-danger">@error('category_id') {{$message}} @enderror</span>
    </div>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" placeholder="Product Price" name="price">
    <span class="text-danger">@error('price') {{$message}} @enderror</span>
  </div>
  <div class="form-group">
  <label for="media">Upload Photo</label>
    <input id="media" name="media" type="file" class="form-control border-0" >
    <span class="text-danger">@error('media') {{$message}} @enderror</span>
  </div>
  <button type="submit" class="btn btn-primary">Upload Product</button>
</form>
</div>
<div class="col-md-8">
    <H2><strong>Uploaded Products List</strong></H2><br>
        <table id="MonitoringTable" class="table table-hover table-listing" style="width:100%">
            <thead>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Photo</th>
            <th>Action</th>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->category_name}}</td>
                    <td>$ {{$item->price}}</td>
                    <td><img src="{{$item->product_media_url}}" style="width:150px" ></td>
                    <td><a href="DeleteProduct/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             $('#imageResult')
//                 .attr('src', e.target.result);
//         };
//         reader.readAsDataURL(input.files[0]);
//     }
// }

// $(function () {
//     $('#upload').on('change', function () {
//         readURL(input);
//     });
// });

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
// var input = document.getElementById( 'upload' );
// var infoArea = document.getElementById( 'upload-label' );

// input.addEventListener( 'change', showFileName );
// function showFileName( event ) {
//   var input = event.srcElement;
//   var fileName = input.files[0].name;
//   infoArea.textContent = 'File name: ' + fileName;
// }
// </script>
@endsection
</html>
