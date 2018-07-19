<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome & Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/desive.css">
</head>

<body>
    <title>Desive Storage</title>

    <div class="row px-4 mx-0 mb-3">
        <div class="col-md-11 col-10 text-white">
            <h1 class="mb-0 d-text-header">Desive Inventory</h1>
        </div>
        <div class="col-md-1 col-2">
            <div class="text-white text-center">
                <i class="fas fa-user-tie fa-4x mt-4"></i>
                <p class="card-title mb-0">Manager</p>
            </div>
        </div>
    </div>

    <div class="row m-auto" style="width:95%;">
        <ul class="nav nav-tabs w-100">
            <li class="nav-item">
                <a class="nav-link rounded-0 text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0 text-white" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0 text-white" href="#">Data List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0 text-white" href="#">Stock</a>
            </li>
        </ul>
    </div>

    <div class="row mx-0">
        <div class="d-content">
            <div class="row text-left">
                <div class="col-2 mr-4">
                    <div class="nav flex-column nav-tabs border-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link rounded-0 btn-outline-light" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dasboard</a>
                        <a class="nav-link rounded-0 btn-outline-light" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gudang</a>
                        <a class="nav-link rounded-0 btn-outline-light" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Barang</a>
                        <a class="nav-link rounded-0 btn-outline-light" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Laporan</a>
                    </div>
                </div>
                <div class="col-9 border-left pl-5">
                    <h4 class="text-white">Barang Masuk</h4>
                    <hr class="bg-white mb-4">
                    <form class="text-white">
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-4 mr-5">
                                <input type="text" class="form-control" id="jenis" placeholder="Jenis Barang">
                            </div>
                            <label for="kd_barang" class="col-sm-1 col-form-label">Kode</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="kd_barang" placeholder="Kode Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="supplier" placeholder="Supplier">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user" class="col-sm-2 col-form-label">User</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="user" placeholder="User">
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-outline-light float-right">Batal</button>
                            <button type="button" class="btn btn-outline-light float-right mr-3">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>