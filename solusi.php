<?php
if (!isset($_POST['btn-solusi'])) {
    header("Location: pertanyaan.php");
    die();
}
// untuk memanggil file
include 'Crud.php';
// untuk mendeklarasikan class menjadi variabel
$crud = new Crud();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="css/solusiStyle.css" rel="stylesheet">
    <title>Document-Solution</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <h1>SOLUSI</h1>
                <table class="table table-light table-bordered border-dark">
                    <thead class="table-info table-bordered border-dark">
                        <th>Nama Penyakit</th>
                        <th>Solusi</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach (array_combine($_POST["diagnosa_penyakit"], $_POST["solusi"]) as $dp => $s) {
                            // echo $r;
                            echo    "<tr>
                                    <td>$dp</td>
                                    <td>$s</td>
                                    
                                ";
                        } ?>
                    </tbody>
                </table>

                <a href="index.php">
                    <button id="btn-home">Home</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>