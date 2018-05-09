

<!-- Daftar Start -->

<!-- Code for Mobile Website Start -->


<!-- Code for Mobile Website Start -->


<!-- Code for Website Start -->

<div id="Daftar" class="daftar">
    <div class="card daftar-body">
        <div class="card-body">
            <div class="col">
                <a href="index.php">
                    <img class="img-fluid img-size text-center" src="assets/bgIcon/logo-agroglobal.png" alt="">
                </a>
            </div>
            <div class="col">
                <h2 class="text-center">Daftar Pengguna Baru</h2>
            </div>
            <hr>

            <!-- Form Start -->

            <form method="post" action="#" class="form-text-daftar">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label t text-input">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control form-box-daftar" id="inputNama" placeholder="Nama" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Nama Pengguna.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-input">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control form-box-daftar" id="inputEmail3" placeholder="Email" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Alamat Email.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label text-input">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control form-box-daftar" id="inputPassword3" placeholder="Password" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Password.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRePassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control form-box-daftar" id="inputRePassword" placeholder="Ketik Ulang Password" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Ulang Password.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNoTelp" class="col-sm-2 col-form-label text-input">No.Hp</label>
                    <div class="col-sm-10">
                    <input type="Number" class="form-control form-box-daftar" id="inputNoTelp" placeholder="Nomor Handphone" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Nomor Handphone.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label text-input">Alamat</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control form-box-daftar" id="inputAlamat" placeholder="Alamat" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Alamat.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPos" class="col-sm-2 col-form-label text-input">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control form-box-daftar" id="inputPos" placeholder="Kode Pos" required>
                    </div>
                    <div class="invalid-feedback">
                        Masukkan Nomor Kode Pos.
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary daftar-button text-center text-input">Daftar</button>
                    </div>
                </div>
            </form>
            
            <!-- Form End -->

            <hr>
            <p class="text-center">Sudah Punya Akun? <span><a id="signIn" class="nav-link" data-toggle="modal" data-target="#exampleModal">Masuk</a></span></p>

        </div>
    </div>
</div>

<!-- Code for Website End -->


<!-- Rekomendasi Produk End -->

<!-- Modal Masuk Start -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'pages/akun/masuk.php'; ?>
</div>

<!-- Modal Masuk End -->

<!-- Style Start -->

<style>
    <?php include 'akunStyle/daftar.scss'; ?>
</style>

<!-- Style End -->
