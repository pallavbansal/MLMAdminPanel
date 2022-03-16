@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
    $('#OrdersTable').DataTable({
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
.dataTables_filter {
    float: right;
}
</style>
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-12">
            <h3><span style="color: #4273FA;">Orders</span></h3>
            <table id="OrdersTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Account Level</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
