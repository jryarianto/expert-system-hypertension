<?php
$mysqli = new mysqli("localhost", "root", "", "hipertensi");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$sql = "SELECT * FROM gejala";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<h1>Konsultasi Hipertensi</h1>";
        echo "<table class='table'>";
        echo "<thead>"; 
                echo "<tr>";
                    echo "<th>Nomor Gejela</th>";
                    echo "<th>Pilih Gejela</th>";
                    echo "<th>Nama Gejala</th>";
                echo "</tr>";
        echo "</thead>"; 
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['id_gejala'] . "</td>";
                echo "<td> <input type='checkbox' id='vehicle1' name='vehicle1' value='$row[gejala]'> </td>";
                echo "<td>" . $row['gejala'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$mysqli->close();

?>