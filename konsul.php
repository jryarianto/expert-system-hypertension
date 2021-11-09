<?php
$mysqli = new mysqli("localhost", "root", "", "hipertensi");
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$sql = "SELECT * FROM gejala";

if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<h1>Konsultasi Hipertensi</h1>";
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nomor Gejela</th>";
        echo "<th>Pilih Gejela</th>";
        echo "<th>Nama Gejala</th>";
        echo "</tr>";
        echo "</thead>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id_gejala'] . "</td>";
            echo "<td> <input type='checkbox' id='vehicle1' name='vehicle1' value='$row[gejala]'> </td>";
            echo "<td>" . $row['gejala'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$mysqli->close();
?>

<?php
include_once 'connect.php';
$result = mysqli_query($conn, "SELECT * FROM hipertensi");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
        <table>

            <tr>
                <td>Nomor Gejela</td>
                <td>Pilih Gejala</td>
                <td>Nama Gejala</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["id_gejala"]; ?></td>
                    <td><input type='checkbox' id='vehicle1' name='vehicle1' value='$row["gejala"]'></td>
                    <td><?php echo $row["gejala"]; ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>
</body>

</html>