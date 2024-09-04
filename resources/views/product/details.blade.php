@extends('layout.main')
@section('content')
<section class="section bg-secondary-dark">
    <div class="r-container">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset("upload/product/$product->id/".$product->image) }}" class="img-fluid" width="500" heigth="900">
                </div>
            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column gap-3">
                            <h4 class="font-1 accent-color lh-1 fw-bold">{{ $product->name }}</h4>
                            <h6 class="lh-1 ls-2 fw-bold font-1">Category: {{ $product->category->name }}</h6>
                            <h5 class="font-1 accent-color lh-1 fw-bold">@currency($product->price)/hari</h5>

                            <div class="d-flex align-items-center mt-1">
                                <span class="quantity-title me-2">Jumlah:</span>

                                <button class="btn btn-icon btn-flat-danger me-2" id="decrement-btn">-</button>

                                <input type="text" inputmode="numeric" id="quantity" style="text-align: center; border: none; width: 20px;" name="quantity" class="quantity-counter me-2" value="1" min="1"
                                oninput="updateQuantityLimit(this)">

                                <button class="btn btn-icon btn-flat-success me-2" id="increment-btn">+</button>

                                <a href="https://wa.me/6287884829063/?text=Hai%20Maestro,%20aku%20mau%20pesen%20produk%20{{ $product->name }}%20dengan%20jumlah%201%20unit!" id="wa-link" class="btn btn-outline-warning" target="__blank">
                                    <i class="fa fa-shop"></i> Pesan Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <nav class="mb-3">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-desc-tab" data-bs-toggle="tab" data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc" aria-selected="true">Deskripsi</button>
                                <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab" data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms" aria-selected="false">Ketentuan Produk</button>
                                <button class="nav-link" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Informasi Lainnya</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                <h6 class="font-1">{{ $product->description }}</h6>
                            </div>
                            <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                @if ($product->terms === "-")
                                    <h6 class="font-1">Tidak ada informasi ketentuan produk.</h6>
                                @else
                                    <h6 class="font-1">{{ $product->terms }}</h6>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                                @if ($product->information === "-")
                                    <h6 class="font-1">Tidak ada informasi lainnya untuk produk ini.</h6>
                                @else
                                    <h6 class="font-1">{{ $product->information }}</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('increment-btn').addEventListener('click', function() {
            incrementQuantity();
        });

        document.getElementById('decrement-btn').addEventListener('click', function() {
            decrementQuantity();
        });

        function incrementQuantity() {
            var quantityInput = document.getElementById('quantity');
            var stock = parseInt(quantityInput.getAttribute('max'));
            var newQuantity = parseInt(quantityInput.value);
            if(newQuantity >= stock) {
                var modalInfoCart = new bootstrap.Modal(document.getElementById('alertMaxQuantity'));
                modalInfoCart.show();
            } else {
                quantityInput.value = newQuantity + 1;
                updateQuantity(quantityInput);
            }
        }

        function decrementQuantity() {
            var quantityInput = document.getElementById('quantity');
            var newQuantity = parseInt(quantityInput.value) - 1;
            quantityInput.value = newQuantity > 0 ? newQuantity : 1;
            updateQuantity(quantityInput);
        }

        function updateQuantity(element) {
            var quantity = element.value ? element.value : 1;
            var productName = "{{ $product->name }}";
            var waLink = document.getElementById('wa-link');
            waLink.href = `https://wa.me/6287884829063/?text=Hai%20Maestro,%20aku%20mau%20pesen%20produk%20${productName}%20dengan%20jumlah%20${quantity}%20unit!`;
        }
    });
</script>
@endsection
