<?php 
session_start();
if(!isset($_SESSION['login'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoLibrary</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- NavBar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">GoLibrary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="anggota.php">Anggota</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Akhir NavBar -->

    <!-- Home -->
    <section class="container my-5 text-center">
        <div class="mb-3">
            <img src="img/home.png" alt="Logo Website" width="150">
        </div>
        <div class="h1 fw-bolder mb-3">
            Lihat data buku yang terdapat <br>
             di perpustakaan A
        </div>
        <div class="text-muted fs-5 mb-5">
            GoLibrary merupakan sebuah sistem yang dibangun sebagai <br>
            solusi dalam pemantauan data buku yang tertata dan <br>
            sistematis, sehingga memudahkan pengunjung dalam memantau <br>
            buku yang tersedia di perpustakaan A <br>
        </div>
        <div>
            <a href="buku.php" class="btn btn-primary btn-lg me-3 col-md-2 py-3">Data buku</a>
            <a href="anggota.php" class="btn btn-outline-secondary btn-lg col-md-3 py-3">Registrasi Anggota</a>
        </div>
    </section>
    <!-- Akhir Home -->

    <!-- Footer -->
    <section class="bg-secondary py-3">
      <div class="container text-light text-center">
        Copyright © 2022 Fery Anuar | 2010631250046
      </div>
    </section>
    <!-- Akhir Footer -->
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>