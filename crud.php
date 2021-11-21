<?php

include 'connect.php';

/**
 * Crud class
 * turunan dario class koneksi
 */
class Crud extends koneksi
{
    // untuk mengambil function dari parent(koneksi)
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * function readGejala
     * mengambil tabel dari gejala
     * return array isi tabel
     */
    public function readGejala()
    {
        $sql = "SELECT * FROM gejala";
        $result = $this->conn->query($sql);

        // merubah data tabel menjadi array
        $row = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    /**
     * funtion getGejala
     * mengambil data sebagian dari tabel gejala
     */
    public function getGejala($value)
    {
        $sql = "SELECT * FROM gejala WHERE id_gejala IN ($value)";
        $result = $this->conn->query($sql);

        // merubah data tabel menjadi array
        $row = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getPenyakit($value)
    {

        $sql = "SELECT * FROM penyakit WHERE id_penyakit IN ($value)";
        $result = $this->conn->query($sql);

        // merubah data tabel menjadi array
        $row = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    /**
     * Gets the group pengetahuan.
     *
     * mengambil salah satu nama penyakit bila terdapat nama penyakit sama
     */
    public function getGroupPengetahuan($value)
    {
        // p, g , pyt merupakan inisialisasi dari tabel yang dituju
        $sql = "SELECT pyt.nama_penyakit FROM pengetahuan p
        JOIN gejala g ON p.id_gejala = g.id_gejala
        JOIN penyakit pyt ON p.kode_penyakit = pyt.kode_penyakit
        WHERE p.id_gejala IN ($value)
        GROUP BY p.kode_penyakit ORDER BY p.kode_penyakit";

        $result = $this->conn->query($sql);

        if (isset($result)) {
            // merubah data tabel menjadi array
            $row = [];
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            return $rows;
        }
    }

    /**
     * Gets the kemungkinan penyakit.
     *
     * mengambil data pengetahuan bila terdapat gejala
     */
    public function getKemungkinanPenyakit($sql)
    {
        // p, g , pyt merupakan inisialisasi dari tabel yang dituju
        $sql = "SELECT pyt.nama_penyakit, p.id_pengetahuan FROM pengetahuan p
        JOIN gejala g ON p.id_gejala = g.id_gejala
        JOIN penyakit pyt ON p.kode_penyakit = pyt.kode_penyakit
        WHERE g.id_gejala IN ($sql)";


        $result = $this->conn->query($sql);

        if (isset($result)) {
            // merubah data tabel menjadi array
            $row = [];
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            return $rows;
        }
    }

    public function getListPenyakit($value)
    {
        // p, g , pyt merupakan inisialisasi dari tabel yang dituju
        $sql = "SELECT * FROM pengetahuan p
        JOIN gejala g ON p.id_gejala = g.id_gejala
        JOIN penyakit pyt ON p.kode_penyakit = pyt.kode_penyakit
        WHERE p.id_pengetahuan IN ($value)";

        $result = $this->conn->query($sql);

        if (isset($result)) {
            // merubah data tabel menjadi array
            $row = [];
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            return $rows;
        }
    }

    public function hasilCFTertinggi($daftar_cf, $groupKemungkinanPenyakit)
    {
        echo "<br/>";
        for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
            $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
            echo "<td>" . $namaPenyakit . "</td>";
            for ($x = 0; $x < count($daftar_cf[$namaPenyakit]); $x++) {
                $merubahIndexCF = max($daftar_cf[$namaPenyakit]) * 100;
            }
            echo "<td>" . number_format((float)$merubahIndexCF, 2, '.', '') . " %" . "</td>";
            echo "<tr>" . "</tr>";
        }
    }

    public function hasilAkhir($daftar_cf, $groupKemungkinanPenyakit)
    {
        for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
            $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
            for ($x = 0; $x < count($daftar_cf[$namaPenyakit]); $x++) {
                $merubahIndexCF[$i] = max($daftar_cf[$namaPenyakit]);
            }
        }
        $j = 0;
        for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
            $hasilMax = max($merubahIndexCF);
            if ($merubahIndexCF[$i] === $hasilMax) {
                $namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
                $penyakits[$j] = $namaPenyakit;
                echo '<li>' . $penyakits[$j] . '</li>';
                echo '<input type="hidden" name="diagnosa_penyakit[]" value="' . $penyakits[$j] . '">';
                $sql = "SELECT solusi_penyakit FROM penyakit
          WHERE nama_penyakit = '$namaPenyakit'";
                $result = $this->conn->query($sql);
                if (isset($result)) {
                    // merubah data tabel menjadi array
                    $row = [];
                    while ($row = $result->fetch_assoc()) {
                        $rows[] = $row;
                    }
                }
                $j++;
            }
        }
        for ($i = 0; $i < $j; $i++) {
            echo '<input type="hidden" name="solusi[]" value="' . $rows[$i]["solusi_penyakit"] . '">';
        }
    }
}
