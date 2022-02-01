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
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form>
            <h3><span style="color: #4273FA;">Monitoring Provider Upload</span></h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="inputName">Monitoring Provider Name</label>
                        <input type="name" class="form-control" id="inputName" placeholder=" Monitoring Provider Name">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload Monitoring Provider</button>
            </form>
        </div>
        <div class="col-md-6">
        <h3><span style="color: #4273FA;">Monitoring Provider List</span></h3>
            <table id="MonitoringTable" class="table table-hover table-listing" style="width:100%">
                <thead>
                <th>Monitoring Provider Name</th>
                </thead>
                <tbody>
                <tr>
                    <td>Company one</td>
                </tr>
                <tr>
                    <td>Company two</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
