<!DOCTYPE html>
<html lang="en">

<?php
include('crud.php');
$crud = new Crud();
?>



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

    <?php include 'navbar.php' ?>

    <div class="tm-container-fluid">
        <section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
            <i class="fas fa-heart fa-3x"></i>
            <h1>Hasil Konsultasi</h1>
            <h3 style="color: white;">asdas</h3>
            <?php
            if (isset($_POST['submit'])) {
                if (!isset($_POST['gejala'])) {
                    header("Location: konsul.php");
                    die();
                }
                // group kemungkinan terdapat penyakit
                $groupKemungkinanPenyakit = $crud->getGroupPengetahuan(implode(",", $_POST['gejala']));
                // menampilkan kode gejala yang di pilih

                var_dump($groupKemungkinanPenyakit);
                die();
                $sql = $_POST['gejala'];
                if (isset($sql)) {
                    // mencari data penyakit kemungkinan dari gejala
                    for ($h = 0; $h < count($sql); $h++) {
                        $kemungkinanPenyakit[] = $crud->getKemungkinanPenyakit($sql[$h]);
                        for ($x = 0; $x < count($kemungkinanPenyakit[$h]); $x++) {
                            for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
                                $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
                                if ($kemungkinanPenyakit[$h][$x]['nama_penyakit'] == $namaPenyakit) {
                                    // list di kemungkinan dari gejala
                                    $listIdKemungkinan[$namaPenyakit][] = $kemungkinanPenyakit[$h][$x]['id_pengetahuan'];
                                }
                            }
                        }
                    }

                    $id_penyakit_terbesar = '';
                    $nama_penyakit_terbesar = '';
                    // list penyakit kemungkinan
                    for ($h = 0; $h < count($groupKemungkinanPenyakit); $h++) {
                        $namaPenyakit = $groupKemungkinanPenyakit[$h]['nama_penyakit'];
                        // list penyakit kemungkinan dari gejala
                        for ($x = 0; $x < count($listIdKemungkinan[$namaPenyakit]); $x++) {
                            $daftarKemungkinanPenyakit = $crud->getListPenyakit($listIdKemungkinan[$namaPenyakit][$x]);
                            $mb = $daftarKemungkinanPenyakit[0]['mb'];
                            $md = $daftarKemungkinanPenyakit[0]['md'];
                            if ($mb < $md) {
                                $cf = ($mb - $md) / (1 - $mb);
                            } else {
                                $cf = ($mb - $md) / (1 - $md);
                            }
                            if ($x == 0) {
                                $daftar_cf[$namaPenyakit][] = $cf;
                                $cf_accumulative = $cf;
                            } else {
                                $cf_baru = $cf_accumulative + ($cf * (1 - $cf_accumulative));
                                $cf_accumulative = $cf_baru;
                                $daftar_cf[$namaPenyakit][] = $cf_baru;
                            }
                        }
                    }
                }
            ?>
                <table class="table table-light table-bordered border-dark" style="text-align: center;">
                    <thead class="table-info table-bordered border-dark">
                        <tr>
                            <th scope="col">Nama Penyakit</th>
                            <th scope="col">Nilai CF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $crud->hasilCFTertinggi($daftar_cf, $groupKemungkinanPenyakit);
                            ?>
                        </tr>
                    </tbody>
                </table>
                <h2 style="font-family: 'Permanent Marker', cursive;"> Kemungkinan Penyakit Anda : </h2>
                <form name="form_diagnosis" action="Solusi.php" method="POST">
                    <ul style="font-family: 'Source Sans Pro', sans-serif; font-size:24px;">
                        <?php $crud->hasilAkhir($daftar_cf, $groupKemungkinanPenyakit); ?>
                    </ul>
                    <button id="btn-solusi" type="submit" name="btn-solusi">Solusi</button>
                </form>
            <?php } ?>
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
// $gejala = $_POST['gejala'];
// var_dump($gejala);
?>

</html>