@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
    $('#MonitoringTable').DataTable({
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
            <form action="{{route('CreateParentCategory')}}" method="post">
                @csrf
            <h3><span style="color: #4273FA;">Parent Category Upload</span></h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="category_name">Parent Category Name</label>
                        <input type="name" class="form-control" id="category_name" name="category_name" placeholder=" Parent Category Name">
                        <span class="text-danger">@error('category_name') {{$message}} @enderror</span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="max_time">Max Time (In Months)</label>
                        <input type="number" class="form-control" id="max_time" name="max_time" placeholder=" Max Time (In Months)">
                        <span class="text-danger">@error('max_time') {{$message}} @enderror</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        <div class="col-md-8">
        <h3><span style="color: #4273FA;">Parent Category List</span></h3>
            <table id="MonitoringTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Parent Category Name</th>
                <th>Min Time(In Months)</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($parentCategory as $item)
                    <tr>
                        <td>{{$item->parent_category_name}}</td>
                        <td>{{$item->max_time}}</td>
                        <td><a href="DeleteParentCategory/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
