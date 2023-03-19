<?= $this->extend('Dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Kelas</h2>
<p>Silahkan masukan data kelas baru pada form dibawah ini</p>

<form method="POST" action="/kelas/simpan">
<div class="form-group">
    <label class="font-weight-bold">Nama Kelas</label>
    <input type="text" name="txtNamaKelas" class="form-control" placeholder="Masukan nama kelas, misal : X RPL 1" autocomplete="off" autofocus required>
</div>

<div class="form-group">
    <label class="font-weight-bold"> 	Kompetensi Keahlian</label>
    <select class="form-control" name="txtInputKompetensi">
        <option>Rekayasa Perangkat Lunak</option>
        <option>Teknik Komputer Jaringan</option>
        <option>Bisnis Daring Dan Pemasaran</option>
        <option>Usaha Perjalanan Wisata</option>
        <option>Otomatitasi dan Tata Kelola Perkantoran</option>
        <option>Akuntansi Keuangan Lembaga</option>
    </select>
</div>

<div class="form-group">
    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan Kelas</button>
</div>

</form>
<?=$this->endSection();?>