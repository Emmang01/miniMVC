<!DOCTYPE HTML>
<html>
<head>	
	<link rel="stylesheet" href="<?= LINKER; ?> bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>yoi cp</title>
</head>
<body>
	<h2>Tes copy paste</h2>
	<input type="text" id="text">
	<button id="btn" data-clipboard-target="#text">Copy Sajalah</button>
</body>
<script>
	new ClipboardJS("#btn");
</script>
</html>