<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link href="css/hasil.css" rel="stylesheet">
    <link href="css/hasil2.css" rel="stylesheet">
    <?php include_once 'navbar.php' ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    // if (isset($_POST['button'])) {
    //     echo "sadas";
    // }
    $vehicle1 = $_POST['vehicle1'];
    var_dump($vehicle1);
    ?>
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

</html>