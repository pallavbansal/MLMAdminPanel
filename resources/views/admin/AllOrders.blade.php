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
                <tr>
                    <td>Jacket</td>
                    <td>20000₹</td>
                    <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                    <td>20000₹</td>
                    <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                    <td>20000₹</td>
                    <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                    <td>20000₹</td>
                    <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Jacket</td>
                    <td>20000₹</td>
                    <td><img src = "{{ asset('/images/img.png') }}" width="70px;"></td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
