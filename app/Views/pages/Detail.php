<?php echo $this->extend('template/temp') ?>
<?php echo $this->section('content') ?>
<div class="container">
	<h1>DETAIL KOMIK</h1>
	<p><b>JUDUL : </b><?php echo $komik['judul'] ?></p>
	<p><b>SLUG : </b><?php echo $komik['slug'] ?></p>
	<p><b>PENULIS : </b><?php echo $komik['penulis'] ?></p>
	<p><b>PENERBIT : </b><?php echo $komik['penerbit'] ?></p>
	<p><img src="/img/<?php echo $komik['sampul'] ?>"></p>
	<form action="/komik/<?php echo $komik['id'] ?>" method="post" style="display:  inline;">
		<?php echo csrf_field() ?>
		<input type="hidden" name="_method" value="DELETE">
		<button onclick="return confirm('data akan dihapus.?')" class="btn btn-danger" type="submit">DELETE</button>
	</form>
	<a href="/komik/edit/<?php echo $komik['slug'] ?>" class="btn btn-primary">EDIT</a>
</div>
<?php echo $this->endSection() ?>