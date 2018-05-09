
<!-- Modal Start -->

<div class="modal-dialog modal-text" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <a href="index.php">
                        <img class="img-fluid img-masuk-size text-center" src="assets/bgIcon/logo-agroglobal.png" alt="">
                    </a>
                </div>
                <div class="col">
                    <h2 class="text-center">Masuk</h2>
                </div>
                <hr>

                <!-- Form Start -->

                <form method="post" action="#" class="form-text">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control form-box" id="inputEmail3" placeholder="Email" required>
                        </div>
                        <div class="invalid-feedback">
                            Masukkan Alamat Email.
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control form-box" id="inputPassword3" placeholder="Password" required>
                        </div>
                        <div class="invalid-feedback">
                            Masukkan Password.
                        </div>
                    </div>
                    <div class="form-group row masuk-button">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary text-center masuk-button-size">Masuk</button>
                        </div>
                    </div>
                </form>
                
                <!-- Form End -->

                <hr>
                <p class="text-center">Belum Punya Akun? <span><a href="akun.php">Daftar</a></span></p>

            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal End -->

<!-- Style Start -->
<style>
    <?php include 'akunStyle/masuk.scss'; ?>
</style>
<!-- Style End -->