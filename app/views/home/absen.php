
<header> 
		<div class="jumbotron jumbotron-fluid"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col"> 
						<h1>Abensi Siswa</h1> 
						<div class="lead">
							Silahkan Isi Absen Dibawah ini
						</div> 
					</div> 
				</div>
			</div> 
		</div> 
	</header> 
<div class="container">
	<?php if($_SESSION['msg'] > 0):?>
		<div class="alert alert-danger" role="alert"> 
			Ada <?php echo $_SESSION['msg']; ?> Orang yang belum diabsen
		</div>
	<?php 
	$_SESSION['msg'] = NULL;
	endif;
	?>
	<div style="overflow-x:auto;">
	<table class="table table-md-xs col-md-12"> 
		<thead> 
			<tr> 
				<th scope="col">No</th> 
				<th scope="col" class="">Nama</th> 
				<th scope="col" class="">NIS</th> 
				<th scope="col">Kelas</th> 
				<th scope="col">Tahun Masuk</th>
				<th scope="col" class="">Keterangan</th>
			</tr>
		</thead> 
		<tbody> 
		<form action="<?= LINKER; ?>home/absenExecute" method="post">
		<?php
			$i = 1;
			foreach($data as $person):
		?>
			<tr> 
				<th scope="row"><?= $i++ ?></th> 
				<td class=""><?= $person ['nama']?></td> 
				<td><?= $person ['nis']?></td> 
				<td><?= $person ['kelas']?></td>
				<td><?= $person ['tahun_masuk']?></td> 
				<td> 
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" type="radio" name="<?= $person ['id']?>" id="H<?= $person ['id']?>" value="hadir"> 
						<label class="form-check-label" for="H<?= $person ['id']?>">
							Hadir 
						</label> 
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" type="radio" name="<?= $person ['id']?>" id="S<?= $person ['id']?>" value="sakit"> 
						<label class="form-check-label" for="S<?= $person ['id']?>">
							Sakit
						</label> 
					</div>
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" type="radio" name="<?= $person ['id']?>" id="I<?= $person ['id']?>" value="izin"> 
						<label class="form-check-label" for="I<?= $person ['id']?>">
							Izin
						</label> 
					</div>
					<div class="form-check form-check-inline"> 
						<input class="form-check-input" type="radio" name="<?= $person ['id']?>" id="A<?= $person ['id']?>" value="alpa"> 
						<label class="form-check-label" for="A<?= $person ['id']?>">
							Alpa
						</label> 
					</div>
				</td>
			</tr> 
		</tbody>
		<?php endforeach; ?>
	</table>
	</div>
	<button type="submit" class="btn btn-primary"> 
		Simpan 
	</button>
	
	</form>
	
<br />
<!-- Button trigger modal --> 
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"> 
Tambah Data 
</button>

 <!-- Modal --> 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
	<div class="modal-dialog modal-dialog-centered" role="document"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<h5 class="modal-title" id="exampleModalLongTitle">
					Tambah data
				</h5> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button>
			</div>
			<div class="modal-body">
				 <form> 
					<div class="form-group"> 
						<label for="nama">Nama</label> 
						<input type="text" class="form-control" id="nama" aria-describedby="namaHelp" placeholder="Masukkan nama anda"> 
						<small id="namaHelp" class="form-text text-muted">Mohon masukkan nama anda selengkap mungkin.</small> 
					</div> 
					<div class="form-group"> 
						<label for="nis">NIS</label> 
						<input type="number" class="form-control" id="nis" placeholder="Nomor induk siswa"> 
					</div> 
					<div class="form-group"> 
						<label for="kelas">Kelas</label> 
						<input type="text" class="form-control" id="kelas" placeholder="Kelas"> 
					</div> 
					<div class="form-group"> 
						<label for="tahun_masuk">Tahun Masuk</label> 
						<input type="number" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk"> 
					</div> 
					<div class="form-group"> 
						<label for="foto">Foto</label> 
						<input type="file" class="form-control-file" aria-describedby="namaHelp" id="foto"> 
						<small id="namaHelp" class="form-text text-muted">Format foto harus jpeg/jpg/png.</small> 
					</div> 
				</div> 
			<div class="modal-footer"> 
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Close
				</button> 
				<button type="button" class="btn btn-primary">
					Save changes
				</button> 
			</form>
			</div> 
		</div> 
	</div> 
</div>
</div>






