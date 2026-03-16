<!DOCTYPE html>
<html>
<head>
<title>Permohonan Komputer Riba</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2 class="title">Borang Permohonan Skim Pinjaman Komputer Riba</h2>

<form class="form" action="proses.php" method="POST">

<label class="label">Nama Penuh</label>
<input type="text" name="nama" class="input">

<label class="label">No Telefon</label>
<input type="number" name="telefon" class="input">

<label class="label">Tarikh Permohonan</label>
<input type="date" name="tarikh" class="input">

<label class="label">Program Pengajian</label>
<select name="program" class="input">
<option value="">-- Pilih Program --</option>
<option value="Diploma IT">Diploma IT</option>
<option value="Diploma Kejuruteraan">Diploma Kejuruteraan</option>
<option value="Diploma Perniagaan">Diploma Perniagaan</option>
</select>

<label class="label">Spesifikasi Laptop</label>

<input type="checkbox" name="spec[]" value="RAM 8GB" class="checkbox"> RAM 8GB
<input type="checkbox" name="spec[]" value="RAM 16GB" class="checkbox"> RAM 16GB
<input type="checkbox" name="spec[]" value="SSD 512GB" class="checkbox"> SSD 512GB

<br><br>

<label class="label">Tujuan Penggunaan</label>

<input type="radio" name="guna" value="Belajar" class="radio"> Belajar
<input type="radio" name="guna" value="Programming" class="radio"> Programming
<input type="radio" name="guna" value="Design" class="radio"> Design

<br><br>

<label class="label">Alasan Permohonan</label>
<textarea name="alasan" class="textarea"></textarea>

<br><br>

<button type="submit" name="submitBtn" class="btn">Hantar</button>
<button type="reset" name="resetBtn" class="btn">Reset</button>

</form>

</div>

</body>
</html>