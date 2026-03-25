<?php
session_start();

if (!isset($_SESSION['success_data'])) {
    header("Location: index.php");
    exit();
}

$data = $_SESSION['success_data'];
unset($_SESSION['success_data']);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2 class="title">Semakan Permohonan</h2>

        <div class="success-box">
            Permohonan berjaya dihantar
        </div>

        <div class="result-box">
            <div class="result-row">
                <div class="result-label">Nama Penuh</div>
                <div class="result-value"><?= $data['nama']; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">No Telefon</div>
                <div class="result-value"><?= $data['telefon']; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Tarikh Permohonan</div>
                <div class="result-value"><?= $data['tarikh']; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Program Pengajian</div>
                <div class="result-value"><?= $data['program']; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Tujuan Penggunaan</div>
                <div class="result-value"><?= $data['guna']; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Spesifikasi Laptop</div>
                <div class="result-value">
                    <?= !empty($data['spec']) ? implode(', ', $data['spec']) : 'Tiada pilihan'; ?>
                </div>
            </div>

            <div class="result-row">
                <div class="result-label">Alasan Permohonan</div>
                <div class="result-value"><?= $data['alasan']; ?></div>
            </div>
        </div>

        <div class="button-group">
            <a href="index.php" class="link">Kembali ke Borang</a>
        </div>
    </div>

</body>
</html>