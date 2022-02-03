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
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form action="CreateSystemPanel" method="POST">
                @csrf
            <h3><span style="color: #4273FA;">System Panel Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="system_panel_name">Name</label>
                        <input type="name" class="form-control" id="system_panel_name" name="system_panel_name" placeholder="System Panel Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="package">Select Pacakge Type</label>
                        <select id="package" name="package" class="form-control">
                            <option selected>Choose Package Type</option>
                            @foreach ($package as $item)
                                <option value="{{$item->id }}">{{$item->package_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="system_panel_price">Price</label>
                        <input type="number" class="form-control" id="system_panel_price" name="system_panel_price" placeholder="System Panel Price">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload System Panel</button>
            </form>
        </div>
        <hr>
        <div class="col-md-6">
        <h3><span style="color: #4273FA;">System Panel List</span></h3>
            <table id="SystemPanelTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>System Panel</th>
                <th>Package Type</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($system_panel as $item)
                    <tr>
                        <td>{{$item->system_panel_name}}</td>
                        <td>{{$item->package_name}}</td>
                        <td><a href="DeleteSystemPanel/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
