

<!-- Navbar Start -->

<nav class="nav-agroglobal navbar sticky-top navbar-expand-lg navbar-light nav-color">
    <a class="navbar-brand" href="index.php">
        <img class="nav-icon-web nav-icon-large nav-icon-medium" src="assets/bgIcon/logo-agroglobal.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Agroglobal
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="kategori-dropdown nav-item dropdown kategori-text">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Organik</a>
                    <a class="dropdown-item" href="#">Non-Organik</a>
                </div>
            </li>

            <form class="search-bar center form-inline my-2 my-lg-0">
                <input id="search-bar-size" class="border-search form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <li class="account-list account-list-large nav-item active">
                <a class="nav-link" href="akun.php">Daftar</a>
            </li>
            <li class="nav-item">
                <a id="signIn" class="nav-link" data-toggle="modal" data-target="#exampleModal" href="">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profile</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Navbar End -->

<!-- Modal Sign In Start -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal Masuk Start -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'pages/akun/masuk.php'; ?>
</div>

<!-- Modal Masuk End -->

<!-- Style Start -->

<style>
    <?php include 'homestyle/navbar.scss'; ?>
</style>

<style>
    <?php include 'akunStyle/daftar.scss'; ?>
</style>

<!-- Style End -->
