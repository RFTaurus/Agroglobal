

<!-- Rekomendasi Produk Start -->
<div class="best-produk">
        <div class="container-fluid">
            <p>
                <div class="col">
                    <img class="logo-best-size card-img-top" src="assets/iklan/logo-best.png" alt="Card image cap">
                    <span class="text-best-produk">Best Product</span>
                </div>
            </p>
            <img class="logo-right card-img-top" src="assets/iklan/logo-best-right.png" alt="Card image cap">
        </div>
    </div>
</div>

<div class="produk">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid">
                    <div class="card-group">
                        <div class="card-size card">
                            <img class="image-size card-img-top" src="assets/iklan/best-product.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="text-title card-title">Beras Organik</h5>
                                <p class="description text card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <button class="btn btn-buy btn-buy-small" data-toggle="modal" data-target="#exampleModalBeli">Buy</button>
                                    <button class="btn btn-detail btn-detail-small" onclick="location.href='detailBarang.php'"><span class="detail-position">detail</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img class="image-size card-img-top" src="assets/iklan/best-product.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="text-title card-title">Beras Organik</h5>
                                <p class="description text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <button class="btn btn-buy btn-buy-small" data-toggle="modal" data-target="#exampleModalBeli">Buy</button>
                                    <button class="btn btn-detail btn-detail-small" onclick="location.href='detailBarang.php'"><span class="detail-position">detail</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="card last-card">
                            <img id="last-image" class="image-size card-img-top" src="assets/iklan/best-product.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="text-title card-title">Beras Organik</h5>
                                <p class="description text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <button class="btn btn-buy btn-buy-small" data-toggle="modal" data-target="#exampleModalBeli">Buy</button>
                                    <button class="btn btn-detail btn-detail-small" onclick="location.href='detailBarang.php'"><span class="detail-position">detail</span></button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>        
        </div>
    </div>
</div>

<!-- Rekomendasi Produk End -->

<!-- Modal Beli Start -->

<div class="modal fade" id="exampleModalBeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'pages/home/modalBeli.php'; ?>
</div>

<!-- Modal Beli End -->

<!-- Style Start -->
<style>
    <?php include 'homestyle/bestProduk.scss'; ?>
</style>
<!-- Style End -->
