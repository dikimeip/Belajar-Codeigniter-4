<?php echo $this->extend('template/temp') ?>
<?php echo $this->section('content') ?>
<h1>HALAMAN KONTAK</h1>
<?php foreach ($alamat as $a): ?>
	<ul>
		<li><?php echo $a['nama'] ?></li>
		<li><?php echo $a['alamat'] ?></li>
	</ul>
<?php endforeach ?>
<?php echo $this->endSection() ?>