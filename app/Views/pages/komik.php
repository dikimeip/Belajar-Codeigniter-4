<?php echo $this->extend('template/temp') ?>

<?php echo $this->section('content') ?>
<div class="container">
	<br>
	<a href="/PagesController/addKomik" class="btn btn-primary">TAMBAH KOMIK</a>
	<h1>HALAMAN KOMIK</h1>
	<p><b><?php echo session()->getFlashdata('pesan') ?></b></p>
	<table class="table table-hover">
		<tr>
			<th>NO</th>
			<th>Sampul</th>
			<th>Judul</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($komik as $k): ?>
			<tr>
				<td><?php echo $nomer++ ?></td>
				<td><img src="/img/<?php echo $k['sampul'] ?>" style="width: 70px"></td>
				<td><?php echo $k['judul'] ?></td>
				<td>
					<a class="btn btn-info" href="/komik/<?php echo $k['slug'] ?>">DETAIL</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
<?php echo $this->endSection() ?>