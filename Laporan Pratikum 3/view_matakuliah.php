<!DOCTYPE html>
<html>
<head>
	<title>Form Input Mata Kuliah</title>
</head>
<body>
	<center>
		<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspon="3">
						form input data mata kuliah
						
					</th>
					<tr>
					<th colspan="3">			
					</th>
				</tr>
				<tr>
					<th>KODE MATKUL</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>
				<tr>
					<th>NAMA MATKUL</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>

				<tr>
					<th>SKS</th>
					<th>:</th>
					<td>
						<select name="SKS" id="sks">
							<option value="">PILIH SKS</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							
						</select>
					</td>
				</tr>

				<tr>
					<th colspan="3" align="center">
						<input type="submit" value="submit">
					</th>
				</tr>
				</tr>
			</table>
		</form>
			
	</center>

</body>
</html>