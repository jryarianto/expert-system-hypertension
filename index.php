<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <title>Home Page</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container1">

        <div class="box1">
            <h1>Selamat Datang</h1>
            <h3>ALPHAMALE merupakan sistem pakar diagnosa penyakit hipertensi berbasis web</h3>
            <h3>
                Hipertensi adalah kondisi ketika tekanan darah di 130/80 mmHg atau lebih.
                Jika tidak segera ditangani, hipertensi bisa menyebabkan munculnya penyakit-penyakit serius yang mengancam nyawa,
                seperti gagal jantung, penyakit ginjal, dan stroke.
            </h3>
            <a href="konsul.php">
                <input class="button button1" type="button" value="Konsultasi Sekarang!">
            </a>
        </div>

        <img src="images/doctor.jfif" alt="Images not found" width="300px" height="300">
    </div>

    <div class="container2">
        <div class="img">
            <img src="images/hypertension.jpg" alt="Images not found" width="100%" height="100%">
        </div>
        <div class="box3">
            <h1>Jenis Hipertensi</h1>
            <ul>
                <li>Hipertensi Primer atau Esensial</li>
                <li>Hipertensi Sekunder</li>
                <li>Prehipertensi</li>
                <li>Krisis Hipertensi</li>
                <li>Hipertensi Urgensi</li>
                <li>Hipertensi Urgensi</li>
            </ul>
        </div>
    </div>
</body>

</html>