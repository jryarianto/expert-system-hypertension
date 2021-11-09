<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM gejala");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <link href="css/konsul.css" rel="stylesheet">
    <link href="css/allpage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h1>Konsultasi Hipertensi</h1>
    <h3>Silahkan pilih gejala dibawah ini :</h3>
    <?php
    if (!$result || mysqli_num_rows($result) > 0) {
    ?>
        <div class="customer">
            <table id="customers">
                <thead>
                    <tr>
                        <td style="text-align: center;">Nomor Gejela</td>
                        <td style="text-align: center;">Pilih Gejala</td>
                        <td style="text-align: center;">Nama Gejala</td>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><?php echo $row["id_gejala"]; ?></td>
                            <td><input type='checkbox' id='vehicle1' name='vehicle1' value='$row["gejala"]'></td>
                            <td><?php echo $row["gejala"]; ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    <?php
    } else {
        echo "No result found";
    }
    ?>
    <div class="btn">
        <a class="button" href="">
            <button style="float: right;" type="submit">Selesai</button>
        </a>
    </div>

</body>

</html>