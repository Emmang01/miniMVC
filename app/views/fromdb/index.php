<!DOCTYPE HTML>
<html>
<head>
    <title>Data From DB</title>
</head>
<body>
	<h2>Data From Database</h2>
	<?php $i = 1;?>
	<?php foreach($data as $person):?>
	<h5> Data <?= $i++?></h5>
	<ul>
		<li>Nama : <?= $person["nama"]?></li>
		<li>Nis : <?= $person["nis"]?></li>
		<li>Kelas : <?= $person["kelas"]?></li>
		<li>Tahun Masuk : <?= $person["tahun_masuk"]?></li>
	<hr>
	</ul>
	<?php endforeach;?>
</body>
</html>