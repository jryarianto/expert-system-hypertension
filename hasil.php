<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link href="css/hasil.css" rel="stylesheet">
    <link href="css/hasil2.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a href="index.php">
                <img src="images/logo.png" alt="" width="100" height="100" class="d-inline-block">
            </a>
            <div class="navbar-p">
                <a href="index.php">
                    <p style="color: black;">AlphaMale</p>
                </a>
            </div>
            <div class="navbar-right navbar-home">
                <a href="index.php">
                    <p style="color: black;">Home</p>
                </a>
            </div>
            <div class="navbar-right navbar-konsultasi">
                <a href="konsul.php">
                    <p style="color: black;">Konsultasi</p>
                </a>
            </div>

            <div class="navbar-right navbar-gejala">
                <a href="gejala.php">
                    <p style="color: black;">Gejala</p>
                </a>
            </div>

        </div>
        <hr class="hr">
    </nav>
    <div class="tm-container-fluid">
        <section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
            <i class="fas fa-heart fa-3x"></i>
            <h1>Hasil Konsultasi</h1>
            <h3 style="color: white;">asdas</h3>
        </section>

        <section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-2 tm-border-rounded">
            <div class="tm-about-header tm-flex-center">
                <i class="fas fa-users fa-2x"></i>
                <h2>Solusi</h2>
            </div>
            <div class="tm-about-text">
                <p class="tm-mb-40">werwer</p>
            </div>
        </section>
</body>

<?php
// if (isset($_POST['button'])) {
//     echo "sadas";
// }
$gejala = $_POST['gejala'];
var_dump($gejala);
?>

</html>