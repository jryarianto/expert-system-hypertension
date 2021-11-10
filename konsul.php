<?php
include_once 'crud.php';
$crud = new Crud;
$arrayName = $crud->readGejala(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Konsultasi Page</title>
    <link href="css/konsul.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h1>Konsultasi Hipertensi</h1>
    <h3>Silahkan pilih gejala dibawah ini :</h3>

    <div class="customer">
        <form method="POST" action="hasil.php">
            <table id="customers">
                <thead>
                    <tr>
                        <td style="text-align: center;">Pilih Gejala</td>
                        <td style="text-align: center;">Nama Gejala</td>
                    </tr>
                </thead>
                <?php
                foreach ($arrayName as $r) {
                ?>
                    <tbody>
                        <tr>
                            <td style="text-align: center;" name="gejala[]"><input id="gejala<?php echo $r['id_gejala']; ?>" name="gejala[]" type="checkbox" value="<?php echo $r['id_gejala']; ?>" style="width: 1.5em; height:1.5em;"></td>
                            <td style="text-align: center;"><?php echo $r["gejala"]; ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
            <div class="btn">
                <input class="button" type="submit" value="Selesai" name="submit">
            </div>
        </form>
    </div>
</body>
<?php
// // if (isset($_POST['gejala'])) {
// //     echo "sadas";
// // } else {
// //     echo "tai";
// // }
// $gejala = $_POST['gejala'];
// var_dump($gejala);
?>

</html>