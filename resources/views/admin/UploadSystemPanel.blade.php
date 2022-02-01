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
@section('body')
    <div class="row shadow p-3 mb-5 bg-white rounded">
        <div class="col-md-6" style="border-right: 1px dashed #333;">
            <form>
            <h3><span style="color: #4273FA;">System Panel Upload</span></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="name" class="form-control" id="inputName" placeholder="System Panel Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCategory">Select Pacakge Type</label>
                        <select id="inputCategory" class="form-control">
                            <option selected>Choose Package Type</option>
                            <option>...</option>
                        </select>
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
                </thead>
                <tbody>
                <tr>
                    <td>System panel one</td>
                    <td>Package one</td>
                </tr>
                <tr>
                <td>System panel two</td>
                    <td>Package two</td>
                </tr>
                <tr>
                    <td>System panel three</td>
                    <td>Package three</td>
                </tr>
                <tr>
                    <td>System panel four</td>
                    <td>Package four</td>
                </tr>
                <tr>
                    <td>System panel Five</td>
                    <td>Package Five</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
