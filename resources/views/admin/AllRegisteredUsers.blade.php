@extends('admin.layout.master')
@push('page_script')
<script>
$(document).ready(function () {
  $('#transactionTable').DataTable(
      {
        language: {
        searchPlaceholder: "Search records"
    }
      }
  );
});
</script>
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
                <th>Earnings</th>
                <th>Account Level</th>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Anthony</td>
                    <td>Anthony@gmail.com</td>
                    <td>7833929341</td>
                    <td><img></img></td>
                    <td>20000₹</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Anthony</td>
                    <td>Anthony@gmail.com</td>
                    <td>7833929341</td>
                    <td><img></img></td>
                    <td>20000₹</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
</html>
