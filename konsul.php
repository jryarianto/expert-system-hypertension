<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM gejala");
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once 'navbar.php' ?>
    <title> Retrive data</title>
    <link href="css/konsul.css" rel="stylesheet">
</head>

<body>
    <h1>Konsultasi Hipertensi</h1>
    <h3>Silahkan pilih gejala dibawah ini :</h3>
    <?php
    if (!$result || mysqli_num_rows($result) > 0) {
    ?>
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
    <?php
    } else {
        echo "No result found";
    }
    ?>
    <a class="button button1" href="">
        <button type="submit" >Selesai</button>
    </a>
</body>

</html>