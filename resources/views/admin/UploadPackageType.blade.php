@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
    $('#packageTable').DataTable({
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
        <div class="col-md-3" style="border-right: 1px dashed #333;">
            <form action="{{route('CreatePackageType')}}" method="POST">
                @csrf
            <h3><span style="color: #4273FA;">Package Type Upload</span></h3>
               
                    <div class="form-group ">
                        <label for="package_name">Package Name</label>
                        <input type="name" class="form-control" id="package_name" name="package_name" placeholder="Package Type Name">
                        <span class="text-danger">@error('package_name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory">Select Monitoring Provider</label>
                        <select id="company" name="company" class="form-control">
                            <option selected>Choose Monitoring Provider</option>
                            @foreach ($company as $item)
                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                            @endforeach
                           
                        </select>
                        <span class="text-danger">@error('inputCategory') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group ">
                        <label for="price" class="text-black">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Total Price">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>

                <div class="form-row">
                        <h5><span style="color: #4273FA;">Pricing Chart Percentage 1</span></h5>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="admin_percentage" name="admin_percentage" placeholder="% for Admin">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="a1_percentage" name="a1_percentage" placeholder="% for A1">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="a2_percentage" name="a2_percentage" placeholder="% for A2">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="a3_percentage" name="a3_percentage" placeholder="% for A3">
                    </div>
                </div>


                <div class="form-row">
                    <h5><span style="color: #4273FA;">Pricing Chart Percentage 2</span></h5>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="admin_percentage2" name="admin_percentage2" placeholder="% for Admin">
                </div>
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="a1_percentage2" name="a1_percentage2" placeholder="% for A1">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="a2_percentage2" name="a2_percentage2" placeholder="% for A2">
                </div>
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="a3_percentage2" name="a3_percentage2" placeholder="% for A3">
                </div>
            </div>

                <button type="submit" class="btn btn-primary">Upload Package Type</button>
            </form>
        </div>
        <div class="col-md-9">
        <h3><span style="color: #4273FA;">Package List</span></h3>
            <table id="packageTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Package Type</th>
                <th>Monitoring Provider</th>
                <th>Pricing Chart 1</th>
                <th>Pricing Chart 2</th>
                <th>Price</th>
                <th></th>
                </thead>
                <tbody>
                    @foreach ($package as $item)
                    <tr>
                        <td>{{$item->package_name}}</td>
                        <td>{{$item->company_name}}</td>
                        <td><table><tr><th>Admin</th><th>A1 </th><th>A2 </th><th>A3 </th></tr><tr><td>{{$item->admin_percentage}} %</td><td>{{$item->a1_percentage}} %</td><td>{{$item->a2_percentage}} %</td><td>{{$item->a3_percentage}} %</td></tr></table></td>
                        <td><table><tr><th>Admin</th><th>A1 </th><th>A2 </th><th>A3 </th></tr><tr><td>{{$item->admin_percentage2}} %</td><td>{{$item->a1_percentage2}} %</td><td>{{$item->a2_percentage2}} %</td><td>{{$item->a3_percentage2}} %</td></tr></table></td>
                        <td>{{$item->price}} $</td>
                        <td><a href="DeletePackageType/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
