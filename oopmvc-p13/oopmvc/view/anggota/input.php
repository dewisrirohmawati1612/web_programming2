<?php
// file : view/anggota/input.php

// Periksa apakah PATH_INFO sudah diatur untuk menghindari kesalahan indeks yang tidak terdefinisi
$request = isset($_SERVER['PATH_INFO']) ? preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']) : '';
$uri = explode('/', $request);

// Set form action
if ($uri[1] == 'edit' && isset($_GET['id'])) {
    $judul = "Edit Anggota";
    $form_action = "http://localhost/oopmvc/index.php/anggota/edit?id=" . $_GET['id'];
} else {
    $judul = "Tambah Anggota";
    $form_action = "http://localhost/oopmvc/index.php/anggota/create";
}

// Set form value
$valNama = isset($anggota['nama']) ? $anggota['nama'] : '';
$valTanggal_lahir = isset($anggota['tanggal_lahir']) ? $anggota['tanggal_lahir'] : '';
$valKota_lahir = isset($anggota['kota_lahir']) ? $anggota['kota_lahir'] : '';
$valID = isset($anggota['id']) ? $anggota['id'] : '';
?>
<h1><?= $judul ?></h1>
<a class="btn btn-success" href="http://localhost/oopmvc/index.php/anggota">KEMBALI</a>
<form action="<?= $form_action ?>" method="post">
    <?php if ($valID): ?>
        <input type="hidden" name="id" value="<?= $valID ?>">
    <?php endif ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $valNama ?>" id="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?= $valTanggal_lahir ?>" id="tanggal_lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Kota_lahir">Kota Lahir</label>
        <input type="text" name="kota_lahir" value="<?= $valKota_lahir ?>" id="kota_lahir" class="form-control" required>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
</form>
</div>
<?php $isi = ob_get_clean() ?>
<?php include "view/template.php" ?>
