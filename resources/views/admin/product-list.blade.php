@extends('layout.admin-main')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>Product List</h3>
        <a href="/form-add-product" class="btn btn-outline-primary">
            <i data-feather="plus"></i>
        </a>
    </div>
    <table id="product-table" class="table table-bordered">
        <thead class="table-light">
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
                    <td><img src="{{ asset("upload/product/$p->id/".$p->image) }}" class="img-thumbnail" style="width:100px"/></td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->category->name }}</td>
                    <td>@currency($p->price)</td>
                    <td>
                        <a href="#" class="btn btn-icon btn-flat-secondary">
                            <i data-feather="edit-2"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-flat-secondary">
                            <i data-feather="eye"></i>
                        </a>
                        <form method="POST" action="{{ route('destroy.product', $p->id) }}"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon btn-danger"
                                onclick="return confirm('Do you want to delete this Transaction (Name: {{ $p->name }})?');">
                                <i data-feather="trash"></i>
                            </button>
                        </form>
                    </td>
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
