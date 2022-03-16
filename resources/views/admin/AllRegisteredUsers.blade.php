@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
    $('#transactionTable').DataTable({
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
@endpush
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-12">
            <h3><span style="color: #4273FA;">Registered Users</span></h3>
            <table id="transactionTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Id No.</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Phone No.</th>
                <th>DL Photo</th>
                <th>Bank Account</th>
                <th>IFSC Code</th>
                <th>Bank Account Name</th>
                <th>Account Level</th>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->dl_number}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->ifsc}}</td>
                        <td>{{$item->account_name}}</td>
                        <td>{{$item->account_type}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
</html>
