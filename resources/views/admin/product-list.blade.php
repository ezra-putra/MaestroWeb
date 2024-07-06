@extends('layout.admin-main')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>Product List</h3>
        <a href="/form-add-product" class="btn btn-outline-primary">
            <i data-feather="plus"></i>
        </a>
    </div>
    <table id="product-table" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1
            @endphp
            @foreach ($product as $p)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        $('#product-table').DataTable();
    </script>
@endsection
