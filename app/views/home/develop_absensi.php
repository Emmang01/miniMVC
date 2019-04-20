<div class="container">
	<?php
date_default_timezone_set('Asia/Jakara');
echo date("Y-m-d H:i:s");
?>
	<table class="table table-sm table-dark">
		<tr>
			<th class="align-middle" >ID</th>
			<th class="align-middle" >Keterangan</th>
		</tr>
		<?php foreach($data as $key => $value): ?>
		<tr>
			<td class="align-middle"><?= $key ?></td>
			<?php 
				switch ($value){
					case "H":
						$fiil = "Hadir";
						break;
					case "S":
						$fiil = "Sakit";
						break;
					case "I":
						$fiil = "Izin";
						break;
					case "A":
						$fiil = "Alpa";
						break;
				}
			?>
			<td class="align-middle"><?= $fiil ?></td>
		</tr>
		<?php endforeach?>
	</table>
</div>