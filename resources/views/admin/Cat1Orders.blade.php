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
.dataTables_filter {
    float: right;
}
</style>
@endpush
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-12">
            <h3><span style="color: #4273FA;">All Contracts Ordered</span></h3>
            <table id="OrdersTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>User Name</th>
                <th>User Email</th>
                <th>Ordered At</th>
                <th></th>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a class="btn btn-info text-light" href="{{$item->contract_url}}">View Contract</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
