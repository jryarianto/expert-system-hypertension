<?php
include('crud.php');
$crud = new Crud();
$arrayName = $crud->readGejala();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <title>Gejala Page</title>
    <link href="css/gejala.css" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php' ?>
    <h2 class="title">Tabel Gejala</h2>
    <!-- <div class="bg1">
        <div class="bg2"> -->
    <div class="tablebox">
        <table id="customer">
            <thead>
                <tr>
                    <td style="text-align: center;">Nomor Gejela</td>
                    <td style="text-align: center;">Nama Gejala</td>
                </tr>
            </thead>
            <?php
            foreach ($arrayName as $r) {
            ?>
                <tbody>
                    <tr>
                        <td style="text-align: center;"><?php echo $r["id_gejala"]; ?></td>
                        <td style="text-align: center;"><?php echo $r["gejala"]; ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
    <!-- </div>
    </div> -->
</body>

</html>