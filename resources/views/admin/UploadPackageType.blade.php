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
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form>
            <h3><span style="color: #4273FA;">Package Type Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Package Name</label>
                        <input type="name" class="form-control" id="inputName" placeholder="Package Type Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCategory">Select Monitoring Provider</label>
                        <select id="inputCategory" class="form-control">
                            <option selected>Choose Monitoring Provider</option>
                            <option>...</option>
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
                </thead>
                <tbody>
                <tr>
                    <td>Package</td>
                    <td>Company one</td>
                </tr>
                <tr>
                    <td>Package</td>
                    <td>Company two</td>
                </tr>
                <tr>
                    <td>Package</td>
                    <td>Company three</td>
                </tr>
                <tr>
                    <td>Package</td>
                    <td>Company four</td>
                </tr>
                <tr>
                    <td>Package</td>
                    <td>Company Five</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
