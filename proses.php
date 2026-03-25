<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

$nama = trim($_POST['nama'] ?? '');
$telefon = trim($_POST['telefon'] ?? '');
$tarikh = trim($_POST['tarikh'] ?? '');
$program = trim($_POST['program'] ?? '');
$guna = trim($_POST['guna'] ?? '');
$alasan = trim($_POST['alasan'] ?? '');
$spec = $_POST['spec'] ?? [];

$errors = [];
$inputs = [
    'nama' => $nama,
    'telefon' => $telefon,
    'tarikh' => $tarikh,
    'program' => $program,
    'guna' => $guna,
    'alasan' => $alasan,
    'spec' => $spec
];

if ($nama === '') {
    $errors[] = 'Nama penuh belum diisi.';
}

if ($telefon === '') {
    $errors[] = 'No telefon belum diisi.';
} elseif (!preg_match('/^[0-9]{10,11}$/', $telefon)) {
    $errors[] = 'No telefon mesti mengandungi 10 hingga 11 nombor sahaja.';
}

if ($tarikh === '') {
    $errors[] = 'Tarikh permohonan belum dipilih.';
}

if ($program === '') {
    $errors[] = 'Program pengajian belum dipilih.';
}

if (empty($spec)) {
    $errors[] = 'Spesifikasi laptop belum dipilih.';
}

if ($guna === '') {
    $errors[] = 'Tujuan penggunaan belum dipilih.';
}

if ($alasan === '') {
    $errors[] = 'Alasan permohonan belum diisi.';
} elseif (strlen($alasan) < 25) {
    $errors[] = 'Alasan permohonan mesti sekurang-kurangnya 25 aksara.';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $inputs;

    header('Location: index.php');
    exit();
}

$_SESSION['success_data'] = $inputs;

header('Location: view.php');
exit();
?>