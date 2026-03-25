<?php
session_start();

$nama    = isset($_POST['nama']) ? trim($_POST['nama']) : "";
$telefon = isset($_POST['telefon']) ? trim($_POST['telefon']) : "";
$tarikh  = isset($_POST['tarikh']) ? trim($_POST['tarikh']) : "";
$program = isset($_POST['program']) ? trim($_POST['program']) : "";
$guna    = isset($_POST['guna']) ? trim($_POST['guna']) : "";
$alasan  = isset($_POST['alasan']) ? trim($_POST['alasan']) : "";
$spec    = isset($_POST['spec']) ? $_POST['spec'] : [];

$errorMsg = [];

if ($nama == "") {
    $errorMsg[] = "Nama tidak boleh kosong";
}

if ($telefon == "") {
    $errorMsg[] = "No telefon tidak boleh kosong";
}

if ($tarikh == "") {
    $errorMsg[] = "Tarikh tidak boleh kosong";
}

if ($program == "") {
    $errorMsg[] = "Program mesti dipilih";
}

if ($guna == "") {
    $errorMsg[] = "Tujuan penggunaan mesti dipilih";
}

if ($alasan == "") {
    $errorMsg[] = "Alasan tidak boleh kosong";
} elseif (strlen($alasan) < 25) {
    $errorMsg[] = "Alasan mesti sekurang-kurangnya 25 aksara";
}

// simpan data dalam session
$_SESSION['nama'] = $nama;
$_SESSION['telefon'] = $telefon;
$_SESSION['tarikh'] = $tarikh;
$_SESSION['program'] = $program;
$_SESSION['guna'] = $guna;
$_SESSION['alasan'] = $alasan;
$_SESSION['spec'] = $spec;
$_SESSION['errorMsg'] = $errorMsg;

// redirect ke semakan
header("Location: semakan.php");
exit();
?>