<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM gejala");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gejala Page</title>
    <?php include_once 'navbar.php' ?>
    <link href="css/gejala.css" rel="stylesheet">
</head>

<body>
    <h1>Gejala</h1>
    <h3>Sistem Pakar Diagnosa Penyakit Hipertensi</h3>
    <h2 class="title">Tabel Gejala</h2>
    <div class="bg1">
        <di class="bg2">
            <?php
            if (!$result || mysqli_num_rows($result) > 0) {
            ?>
                <table id="customer">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Nomor Gejela</td>
                            <td style="text-align: center;">Nama Gejala</td>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $row["id_gejala"]; ?></td>
                                <td><?php echo $row["gejala"]; ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } else {
                echo "No result found";
            }
            ?>
        </di>
    </div>
</body>

</html>