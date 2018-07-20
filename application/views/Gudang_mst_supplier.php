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
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang'); ?>">Home</a>
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang/master_barang'); ?>">Master
                        Barang</a>
                    <a class="nav-link btn-outline-light active" href="<?= site_url('gudang/master_supplier'); ?>">Master
                        Supplier</a>
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang/masuk_barang'); ?>">Input Masuk
                        Barang</a>
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang/keluar_barang'); ?>">Input Keluar
                        Barang</a>
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang/retur_barang'); ?>">Input Retur
                        Barang</a>
                </nav>
            </div>
            <div class="col-9 border-left pl-5">
                <?php if (isset($_SESSION['berhasil'])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $_SESSION['berhasil']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['gagal'])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $_SESSION['gagal']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="mb-4 text-white">
                    <p class="h2">Master Supplier</p>
                    <a href="<?= site_url('gudang/master_supplier/tambah'); ?>"
                       class="btn btn-outline-light btn-sm rounded-0">Tambah Data</a>
                </div>
                <!--<hr class="bg-white">-->
                <table class="table table-sm text-white">
                    <thead>
                    <tr>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= $member->nama_supplier; ?></td>
                            <td><?= $member->alamat; ?></td>
                            <td><?= $member->telp; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm"
                                   href="<?= site_url('gudang/master_supplier/edit/' . $member->id_supplier); ?>">Edit</a>
                                <a class="btn btn-danger btn-sm"
                                   href="<?= site_url('gudang/master_supplier/delete/' . $member->id_supplier); ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
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
