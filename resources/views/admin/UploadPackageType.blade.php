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

const regex = /^[a-zA-Z ]+$/;
function validate(e) {
  const chars = e.target.value.split('');
  const char = chars.pop();
  if (!regex.test(char)) {
    e.target.value = chars.join('');
    console.log(`${char} is not a valid character.`);
  }
}
document.querySelector('#package_name').addEventListener('input', validate);


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
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form action="CreatePackageType" method="POST">
                @csrf
            <h3><span style="color: #4273FA;">Package Type Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="package_name">Package Name</label>
                        <input type="name" class="form-control" id="package_name" name="package_name" placeholder="Package Type Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCategory">Select Monitoring Provider</label>
                        <select id="company" name="company" class="form-control">
                            <option selected>Choose Monitoring Provider</option>
                            @foreach ($company as $item)
                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                            @endforeach
                           
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload Package Type</button>
            </form>
        </div>
        <div class="col-md-6">
        <h3><span style="color: #4273FA;">Package List</span></h3>
            <table id="packageTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Package Type</th>
                <th>Monitoring Provider</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($package as $item)
                    <tr>
                        <td>{{$item->package_name}}</td>
                        <td>{{$item->company_name}}</td>
                        <td><a href="DeletePackageType/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
