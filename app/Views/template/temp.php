<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>
<?php echo $this->include('template/link') ?>
<?php echo $this->renderSection('content') ?>

</body>
</html>