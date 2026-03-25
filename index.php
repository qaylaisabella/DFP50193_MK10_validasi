<?php
session_start();

$errors = $_SESSION['errors'] ?? [];
$inputs = $_SESSION['inputs'] ?? [];

unset($_SESSION['errors'], $_SESSION['inputs']);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2 class="title">Borang Permohonan Skim Pinjaman Komputer Riba</h2>

        <?php if (!empty($errors)): ?>
            <div class="error-box">
                <?php foreach ($errors as $error): ?>
                    <p><?= $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="proses.php" method="POST">

            <div class="form-group">
                <label class="label">Nama Penuh</label>
                <input type="text" name="nama" class="input"
                    value="<?= $inputs['nama'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label class="label">No Telefon</label>
                <input type="text" name="telefon" class="input"
                    value="<?= $inputs['telefon'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label class="label">Tarikh Permohonan</label>
                <input type="date" name="tarikh" class="input"
                    value="<?= $inputs['tarikh'] ?? ''; ?>">
            </div>

            <div class="form-group">
                <label class="label">Program Pengajian</label>
                <select name="program" class="input">
                    <option value="">-- Pilih Program --</option>
                    <option value="Diploma IT" <?= ($inputs['program'] ?? '') == 'Diploma IT' ? 'selected' : ''; ?>>
                        Diploma IT
                    </option>
                    <option value="Diploma Kejuruteraan" <?= ($inputs['program'] ?? '') == 'Diploma Kejuruteraan' ? 'selected' : ''; ?>>
                        Diploma Kejuruteraan
                    </option>
                    <option value="Diploma Perniagaan" <?= ($inputs['program'] ?? '') == 'Diploma Perniagaan' ? 'selected' : ''; ?>>
                        Diploma Perniagaan
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label class="label">Spesifikasi Laptop</label>

                <label>
                    <input type="checkbox" name="spec[]" value="RAM 8GB"
                        <?= in_array('RAM 8GB', $inputs['spec'] ?? []) ? 'checked' : ''; ?>>
                    RAM 8GB
                </label>

                <label>
                    <input type="checkbox" name="spec[]" value="RAM 16GB"
                        <?= in_array('RAM 16GB', $inputs['spec'] ?? []) ? 'checked' : ''; ?>>
                    RAM 16GB
                </label>

                <label>
                    <input type="checkbox" name="spec[]" value="SSD 512GB"
                        <?= in_array('SSD 512GB', $inputs['spec'] ?? []) ? 'checked' : ''; ?>>
                    SSD 512GB
                </label>
            </div>

            <div class="form-group">
                <label class="label">Tujuan Penggunaan</label>

                <label>
                    <input type="radio" name="guna" value="Belajar"
                        <?= ($inputs['guna'] ?? '') == 'Belajar' ? 'checked' : ''; ?>>
                    Belajar
                </label>

                <label>
                    <input type="radio" name="guna" value="Programming"
                        <?= ($inputs['guna'] ?? '') == 'Programming' ? 'checked' : ''; ?>>
                    Programming
                </label>

                <label>
                    <input type="radio" name="guna" value="Design"
                        <?= ($inputs['guna'] ?? '') == 'Design' ? 'checked' : ''; ?>>
                    Design
                </label>
            </div>

            <div class="form-group">
                <label class="label">Alasan Permohonan</label>
                <textarea name="alasan" class="textarea"><?= $inputs['alasan'] ?? ''; ?></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn">Hantar</button>
                <button type="reset" class="btn">Reset</button>
            </div>

        </form>
    </div>

</body>
</html>