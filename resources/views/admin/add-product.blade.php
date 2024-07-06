@extends('layout.admin-main')
@section('content')
<h3>New Product</h3>
<div class="card">
    <div class="card-body">
        <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 mb-1">
                <div class="col-md-12 mb-1">
                    <label for="myDropzone" class="form-label">
                        <h4>Image</h4>
                    </label>
                    <input type="file" class="form-control"  name="image" accept=".jpeg, .png, .jpg">
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="input-product">Product Name</label>
                <div class="col-md-12 mb-1">
                    <input type="text" class="form-control" id="input-product"
                        placeholder="Product Name" name="name" />
                </div>
            </div>
            <div class="col-md-12 mb-1">
                <label class="form-label" for="select-cat">Category</label>
                <select class="select2 form-select" id="select-cat" name="cat">
                    <option value="">--Choose Category--</option>
                    @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mb-1">
                <label class="form-label" for="idr-input">Price</label>
                <div class="col-md-12 mb-1">
                    <input type="text" class="form-control" id="idr-input" placeholder="Set Price"
                        name="price" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12 mb-1">
                    <div class="col-md-12">
                        <label class="form-label" for="description">Description</label>
                        <div class="col-md-12 mb-2">
                            <textarea name="desc" id="description" class="form-control" placeholder="Product Description" cols="30"
                                rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12 mb-1">
                    <div class="col-md-12">
                        <label class="form-label" for="term">Product Terms</label>
                        <div class="col-md-12 mb-2">
                            <textarea name="terms" id="term" class="form-control" placeholder="Product Terms" cols="30"
                                rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12 mb-1">
                    <div class="col-md-12">
                        <label class="form-label" for="information">Information(Optional)</label>
                        <div class="col-md-12 mb-2">
                            <textarea name="inf" id="informatio" class="form-control" placeholder="Information" cols="30"
                                rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" name="action" value="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    var idr = document.getElementById("idr-input");
    idr.addEventListener("keyup", function (e) {
        idr.value = formatRupiah(this.value, "Rp. ");
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
</script>
@endsection
