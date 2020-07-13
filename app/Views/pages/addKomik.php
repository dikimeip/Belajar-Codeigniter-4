<?php echo $this->extend('template/temp') ?>
<?php echo $this->section('content') ?>
<div class="container">
	<h3>TAMBAH KOMIK</h3>
	<br>
	<div class="row">
		<?php echo $validation->listErrors(); ?>
		<div class="col-md-8">
			<form action="/PagesController/save" method="post">
				<?php echo csrf_field() ?>
				<div class="form-group">
					<label>Masukan Nama Komik</label>
					<input type="text" name="judul" class="form-control" placeholder="Masukan Nama Komik" autofocus="" value="<?php echo old('judul') ?>">
					<?php if($validation->hasError('judul')) :?>
						<p style="color: red"><?php echo $validation->getError('judul'); ?></p>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label>Masukan Nama Penulis</label>
					<input type="text" name="penulis" class="form-control" placeholder="Masukan Nama penulis" value="<?php echo old('penulis') ?>">
					<?php if($validation->hasError('penulis')) :?>
						<p style="color: red"><?php echo $validation->getError('penulis'); ?></p>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label>Masukan Nama Penerbit</label>
					<input type="text" name="penerbit" class="form-control" placeholder="Masukan Nama penerbit" value="<?php echo old('penerbit') ?>">
					<?php if($validation->hasError('penerbit')) :?>
						<p style="color: red"><?php echo $validation->getError('penerbit'); ?></p>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label>Masukan Nama Sampul</label>
					<input type="text" name="sampul" class="form-control" placeholder="Masukan Nama sampul" value="<?php echo old('sampul') ?>">
					<?php if($validation->hasError('sampul')) :?>
						<p style="color: red"><?php echo $validation->getError('sampul'); ?></p>
					<?php endif ?>
				</div>
				<input type="submit" value="simpan" class="btn btn-success">
			</form>
		</div>
	</div>
	
	
</div>
<?php echo $this->endSection() ?>