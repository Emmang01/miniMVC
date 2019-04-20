<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>

<html>
 	<head>
	 		<title>Daftar</title>
 	</head>
	<body> 
		<form action="<?= LINKER?>Fromdb/executeAddData" method="post" enctype = "multipart/form-data"> 
			<table cellpadding="10" cellspacing="0" position="center"> 	
				<tr>
 					<td> <label for="nama">Nama	:</label> </td> 				
					<td> <input type="text" name="nama" id="nama" maxlength="60"></td> 				
				</tr> 				 				
				<tr> 					
					<td> <label for="nis">NIS	 :</label> </td> 	
					<td> <input type="number" name="nis" id="nis" min="1" max="99999"> </td> 				
				</tr> 				 				
				<tr> 					
					<td> <label for="kelas">Kelas	:</label> </td> 					
					<td> <input type="text" name="kelas" id="kelas" maxlength="11"></td> 				
				</tr> 				 				
				<tr> 					
					<td> <label for="tahun">Tahun Masuk :</label> </td> 					
					<td> <input type="number" name="tahun_masuk" id="tahun" maxlength="4"></td> 				
				<tr> 					
					<td></td> 					
					<td> <button type="submit" name="submit"> SIMPAN</button> 
					</td> 				
				</tr> 			
			</table> 			 		
		</form> 	
	</body>
</html>