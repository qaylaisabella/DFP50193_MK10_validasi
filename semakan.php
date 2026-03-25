<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Semakan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h2 class="title">Keputusan Permohonan</h2>

        <?php
        $nama     = isset($_SESSION['nama']) ? $_SESSION['nama'] : "";
        $telefon  = isset($_SESSION['telefon']) ? $_SESSION['telefon'] : "";
        $tarikh   = isset($_SESSION['tarikh']) ? $_SESSION['tarikh'] : "";
        $program  = isset($_SESSION['program']) ? $_SESSION['program'] : "";
        $guna     = isset($_SESSION['guna']) ? $_SESSION['guna'] : "";
        $alasan   = isset($_SESSION['alasan']) ? $_SESSION['alasan'] : "";
        $spec     = isset($_SESSION['spec']) ? $_SESSION['spec'] : [];
        $errorMsg = isset($_SESSION['errorMsg']) ? $_SESSION['errorMsg'] : [];

        if (!empty($errorMsg)) {
            foreach ($errorMsg as $err) {
                echo "<p class='error'>$err</p>";
            }
        } else {
            echo "<p class='success'>Permohonan berjaya dihantar!</p>";
            echo "<p>Nama: $nama</p>";
            echo "<p>No Telefon: $telefon</p>";
            echo "<p>Tarikh: $tarikh</p>";
            echo "<p>Program: $program</p>";
            echo "<p>Tujuan Penggunaan: $guna</p>";
            echo "<p>Alasan: $alasan</p>";

            echo "<p>Spesifikasi Laptop: ";
            if (!empty($spec)) {
                echo implode(", ", $spec);
            } else {
                echo "Tiada pilihan";
            }
            echo "</p>";
        }

        // optional: buang error lepas papar
        unset($_SESSION['errorMsg']);
        ?>

        <br>
        <a href="index.php" class="link">Kembali ke Borang</a>

    </div>

</body>
</html>