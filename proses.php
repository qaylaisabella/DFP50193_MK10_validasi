<?php
session_start();

$_SESSION['inputs'] = $_POST;

$nama = trim($_POST['nama'] ?? '');
$telefon = trim($_POST['telefon'] ?? '');
$tarikh = trim($_POST['tarikh'] ?? '');
$program = trim($_POST['program'] ?? '');
$guna = trim($_POST['guna'] ?? '');
$alasan = trim($_POST['alasan'] ?? '');
$spec = $_POST['spec'] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['success_data']);

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['errors'] = ['Sila hantar borang dahulu'];

} elseif ($nama == '') {
    $_SESSION['errors'] = ['Sila masukkan Nama Penuh'];

} elseif ($telefon == '') {
    $_SESSION['errors'] = ['Sila masukkan No Telefon'];

} elseif (!ctype_digit($telefon)) {
    $_SESSION['errors'] = ['No Telefon mesti nombor sahaja'];

} elseif (strlen($telefon) < 10 || strlen($telefon) > 11) {
    $_SESSION['errors'] = ['No Telefon mesti 10 hingga 11 nombor'];

} elseif ($tarikh == '') {
    $_SESSION['errors'] = ['Sila pilih Tarikh Permohonan'];

} elseif ($program == '') {
    $_SESSION['errors'] = ['Sila pilih Program Pengajian'];

} elseif (empty($spec)) {
    $_SESSION['errors'] = ['Sila pilih sekurang-kurangnya satu Spesifikasi Laptop'];

} elseif ($guna == '') {
    $_SESSION['errors'] = ['Sila pilih Tujuan Penggunaan'];

} elseif ($alasan == '') {
    $_SESSION['errors'] = ['Sila masukkan Alasan Permohonan'];

} elseif (strlen($alasan) < 25) {
    $_SESSION['errors'] = ['Alasan mesti sekurang-kurangnya 25 aksara'];

} else {
    $_SESSION['success_data'] = [
        'nama' => $nama,
        'telefon' => $telefon,
        'tarikh' => $tarikh,
        'program' => $program,
        'guna' => $guna,
        'spec' => $spec,
        'alasan' => $alasan
    ];

    header('Location: view.php');
    exit();
}

header('Location: index.php');
exit();
?>