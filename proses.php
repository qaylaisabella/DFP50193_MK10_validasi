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

        $nama    = isset($_POST['nama']) ? $_POST['nama'] : "";
        $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : "";
        $tarikh  = isset($_POST['tarikh']) ? $_POST['tarikh'] : "";
        $program = isset($_POST['program']) ? $_POST['program'] : "";
        $guna    = isset($_POST['guna']) ? $_POST['guna'] : "";
        $alasan  = isset($_POST['alasan']) ? $_POST['alasan'] : "";

        $error = false;

        if ($nama == "") {
            echo "<p class='error'>Nama tidak boleh kosong</p>";
            $error = true;
        }

        if ($telefon == "") {
            echo "<p class='error'>No telefon tidak boleh kosong</p>";
            $error = true;
        }

        if ($tarikh == "") {
            echo "<p class='error'>Tarikh tidak boleh kosong</p>";
            $error = true;
        }

        if ($program == "") {
            echo "<p class='error'>Program mesti dipilih</p>";
            $error = true;
        }

        if ($guna == "") {
            echo "<p class='error'>Tujuan penggunaan mesti dipilih</p>";
            $error = true;
        }

        if ($alasan == "") {
            echo "<p class='error'>Alasan tidak boleh kosong</p>";
            $error = true;
        }

        if (strlen($alasan) < 25) {
            echo "<p class='error'>Alasan mesti sekurang-kurangnya 25 aksara</p>";
            $error = true;
        }

        if ($error == false) {

            echo "<p class='success'>Permohonan berjaya dihantar!</p>";

            echo "<p>Nama: $nama</p>";
            echo "<p>No Telefon: $telefon</p>";
            echo "<p>Tarikh: $tarikh</p>";
            echo "<p>Program: $program</p>";
            echo "<p>Tujuan Penggunaan: $guna</p>";
            echo "<p>Alasan: $alasan</p>";
        }

        ?>

        <br>
        <a href="index.php" class="link">Kembali ke Borang</a>

    </div>

</body>
</html>