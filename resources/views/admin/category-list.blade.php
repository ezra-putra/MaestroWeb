@extends('layout.admin-main')
@section('content')
    <div class="d-flex justify-content-between">
        <h3>Category List</h3>
        <a href="#addCategory" data-bs-toggle="modal" class="btn btn-outline-primary">
            <i data-feather="plus"></i>
        </a>
    </div>
    <table id="product-table" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter = 1
            @endphp
            @foreach ($category as $c)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $c->name }}</td>
                    <td>
                        <form method="POST" action="{{ route('destroy.category', $c->id) }}"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-icon btn-danger"
                                onclick="return confirm('Do you want to delete this Transaction (Name: {{ $c->name }})?');">
                                <i data-feather="trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('add.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label class="form-label" for="input-category">Category Name</label>
                            <div class="col-md-12 mb-1">
                                <input type="text" class="form-control" id="input-category"
                                    placeholder="Category Name" name="name" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        $('#product-table').DataTable();
    </script>
@endsection
