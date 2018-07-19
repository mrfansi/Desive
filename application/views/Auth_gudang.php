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
<div class="d-title mb-3" style="margin-top: 100px;">
    <h2 class="text-center text-white">Login User</h2>
</div>
<div class="d-login m-auto">
    <div class="row">
        <?php if (isset($_SESSION['berhasil'])): ?>
            <div class="col">
                <p class="text-success"><?= $_SESSION['berhasil']; ?></p>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['gagal'])): ?>
            <div class="col">
                <p class="text-danger"><?= $_SESSION['gagal']; ?></p>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col">
            <div class="border text-white mb-3">
                <i class="fas fa-building fa-5x p-4"></i>
                <h5 class="card-title">Storage</h5>
            </div>
            <form action="<?= site_url('auth/gudang/login'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control d-form-control" name="username" id="username"
                           aria-describedby="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    <small class="text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control d-form-control" name="password" id="password"
                           aria-describedby="password" placeholder="Password" value="<?= set_value('password'); ?>">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
                <button class="btn btn-primary btn-block d-btn">Login</button>
            </form>
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