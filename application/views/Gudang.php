<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome & Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/desive.css'); ?>">

    <title>Desive Storage</title>
</head>
<body>
<div class="row px-4 mx-0 mb-3">
    <div class="col-md-11 col-10 text-white">
        <h1 class="mb-0 d-text-header">Desive Inventory</h1>
    </div>
    <div class="col-md-1 col-2">
        <div class="text-white text-center">
            <i class="fas fa-building fa-4x mt-4"></i>
            <p class="card-title mb-0">Storage</p>
        </div>
    </div>
</div>

<div class="row mx-0">
    <div class="d-content">
        <div class="row text-left">
            <div class="col-2 mr-4">
                <nav class="nav flex-column">
                    <a class="nav-link btn-outline-light active" href="<?= site_url('gudang'); ?>">Home</a>
                    <a class="nav-link btn-outline-light" href="#">Master Barang</a>
                    <a class="nav-link btn-outline-light" href="#">Master Supplier</a>
                    <div class="dropdown">
                        <a class="nav-link btn-outline-light dropdown-toggle" id="dropdownmenu" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Transaksi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownmenu">
                            <a class="dropdown-item" href="">Input Masuk Barang</a>
                            <a class="dropdown-item" href="">Input Keluar Barang</a>
                            <a class="dropdown-item" href="">Input Retur Barang</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-9 border-left pl-5">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">Selamat datang diprogram buatan untuk syarat nilai Tugas Kelompok pada mata kuliah
                        <b>Web Enterprise</b></p>
                    <hr class="my-4">
                    <p>Adapun nama - nama yang terlibat dalam pembuatan program ini adalah : </p>
                    <p>
                    <ul>
                        <li>
                            Muhammad Irfan (41815110165) as Developer
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>
</html>
