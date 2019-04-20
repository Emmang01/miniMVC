<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>About <?= $data [0]?></title>
</head>
<body>
	<h1>Selamat Datang <?= $data [0]?></h1>
	<h3>Berikut data Anda: </h>
	<ul>
		<li>Nama : <?= $data [0]?></li>
		<li>Kelas : <?= $data [1]?></li>
		<li>NIS : <?= $data [2]?></li>
		<li>Absen : <?= $data [3]?></li>
	</ul>
</body>
</html>