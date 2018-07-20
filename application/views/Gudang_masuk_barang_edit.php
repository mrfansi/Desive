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
                    <a class="nav-link btn-outline-light" href="<?= site_url('gudang/master_supplier'); ?>">Master
                        Supplier</a>
                    <a class="nav-link btn-outline-light active" href="<?= site_url('gudang/masuk_barang'); ?>">Input
                        Masuk
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

                    <p class="h2">Transaksi Masuk Barang</p>
                    <p class="h5 text-muted">Edit Data</p>
                    <a href="<?= site_url('gudang/masuk_barang'); ?>" class="btn btn-outline-light btn-sm rounded-0">Kembali
                        ke Menu Transaksi Masuk Barang</a>

                </div>

                <form action="simpan" method="post" class="col-8 text-white">
                    <input type="hidden" name="id_barang_m" value="<?= $id_barang_m; ?>">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tgl_masuk">Tanggal Masuk</label>
                                <input class="form-control" type="date" name="tgl_masuk" placeholder="Tanggal Masuk"
                                       value="<?= $tgl_masuk; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kode_jenis">Kode Jenis</label>
                                <input class="form-control" type="text" name="kode_jenis" placeholder="Kode Jenis"
                                       value="<?= $kode_jenis; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama_bahan">Nama Bahan</label>
                        <input class="form-control" type="text" name="nama_bahan" placeholder="Nama Bahan"
                               value="<?= $nama_bahan; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input class="form-control" type="number" name="jumlah" placeholder="Jumlah"
                               value="<?= $jumlah; ?>">
                    </div>
                    <div class="form-group">
                        <label for="id_supplier">Supplier</label>
                        <select class="form-control" name="id_supplier" id="id_supplier">
                            <option value="">Pilih Supplier</option>
                            <?php foreach ($suppliers as $s): ?>
                                <option value="<?= $s->id_supplier; ?>" <?= $id_supplier == $s->id_supplier ? 'selected' : ''; ?>><?= $s->nama_supplier; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_user">User</label>
                        <select class="form-control" name="id_user" id="id_user">
                            <option value="">Pilih User</option>
                            <?php foreach ($users as $u): ?>
                                <option value="<?= $u->id_user; ?>" <?= $id_user == $u->id_user ? 'selected' : ''; ?>><?= $u->nama_user; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-light btn-sm">Submit</button>
                        <button type="reset" class="btn btn-outline-light btn-sm">Clear</button>

                    </div>
                </form>

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
