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
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="buku.php">Buku</a>
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

    <!-- Buku -->
    <section class="container my-5">
        <div class="h5">
            Buku Populer <hr>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100" style="width: 18rem">
                <img src="img/the-true-life-of-habibie.jpg" class="card-img-top" alt="The True Life of Habibie">
                <div class="card-body">
                    <h5 class="card-title">The True Life of Habibie</h5>
                    <p class="card-text text-muted">
                        Kategori: Biography<br>
                        Bahasa: Indonesian <br>
                        Halaman: 97 <br>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="the-true-life-of-habibie.php" class="text-decoration-none text-secondary">Komentar</a>
                    </small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem">
                <img src="img/thinking-fast-and-slow.jpg" class="card-img-top" alt="Thinking Fast and Slow">
                <div class="card-body">
                    <h5 class="card-title">Thinking Fast and Slow</h5>
                    <p class="card-text text-muted">
                        Kategori: Psychology <br>
                        Tahun: 2020 <br>
                        Penerbit: Gramedia Pustaka Utama <br>
                        Bahasa: Indonesian <br>
                        Halaman: 651 / 654 <br>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="thinking-fast-and-slow.php" class="text-decoration-none text-secondary">Komentar</a>
                    </small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem">
                <img src="img/sejarah-dunia-yang-disembunyikan.jpg" class="card-img-top" alt="Sejarah Dunia yang Disembunyikan">
                <div class="card-body">
                    <h5 class="card-title">Sejarah Dunia yang Disembunyikan</h5>
                    <p class="card-text text-muted">
                        Kategori: Arts <br>
                        Tahun: 2015 <br>
                        Penerbit: Pustaka Alvabet <br>
                        Bahasa: Indonesian <br>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="sejarah-dunia-yang-disembunyikan.php" class="text-decoration-none text-secondary">Komentar</a>
                    </small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 18rem">
                <img src="img/reason-to-stay-alive.jpg" class="card-img-top" alt="Reason to Stay Alive">
                <div class="card-body">
                    <h5 class="card-title">Reason to Stay Alive</h5>
                    <p class="card-text text-muted">
                        Kategori: Self-Help
                        Tahun: 2018
                        Edisi: Pertama
                        Penerbit: PT. Gramedia Pustaka Utama
                        Bahasa: Indonesian
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <a href="reason-to-stay-alive.php" class="text-decoration-none text-secondary">Komentar</a>
                    </small>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Buku -->

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