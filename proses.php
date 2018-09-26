<form method="POST" enctype="multipart/form-data">
<table bgcolor="brown" cellpadding="2">
		<th>DATA YANG DIISI</th>
		<th>PILIHAN</th>
		<tr>
			<td>Masukkan Gambar</td>
			<td>: <input type="file" name="img"></td>
		</tr>
		<tr>
			<td>Masukkan Hobi</td>
			<td>: <input type="checkbox" name="hobi[]" value="Basket">Basket
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				  <input type="checkbox" name="hobi[]" value="Berenang">Berenang
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				  <input type="checkbox" name="hobi[]" value="Menari">Menari
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				  <input type="checkbox" name="hobi[]" value="Sepak Bola">Sepak Bola
		<tr>
			<td></td>
			<td>
				  <input type="checkbox" name="hobi[]" value="Desain">Desain
			</td>
		</tr>
		<tr>
			<td>Genre Film yang Disukai</td>
			<td>:<input type="checkbox" name="film[]" value="Horror">Horror</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="film[]" value="Action">Action</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="film[]" value="Anime">Anime</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="film[]" value="Thriller">Thriller</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="film[]" value="Animasi">Animasi</td>
		</tr>
		<tr>
			<td>Tempat Wisata Tujuan Travelling</td>
			<td>:<input type="checkbox" name="kota[]" value="Bali">Bali</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="kota[]" value="Raja Ampat">Raja Ampat</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="kota[]" value="Pulau Derawan">Pulau Derawan</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="kota[]" value="Bangka Belitung">Bangka Belitung</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="kota[]" value="Labuan Bajo">Labuan Bajo</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan">
			<input type="submit" name="hapus" value="Delete"></td>
		</tr>
	</table>
</form>
<?php

if (isset($_POST["simpan"])) {
	$img 		= $_FILES["img"]["name"];
	$hobi 		= $_POST['hobi'];
	$genre 		= $_POST['film'];
	$wisata 	= $_POST['kota'];

	echo "<br>";
	$hobi_str = null;
	$genre_str = null;
	$wisata_str = null;

	foreach ($hobi as $key => $hobby) {
		$hobi_str .= $hobby;
		if ($key != (count($hobi)-1)) {
			$hobi_str .= ", ";
		}
	}
	echo "<br>";

	foreach($genre as $key => $gener){
		$genre_str .= $gener;
		if ($key != (count($genre)-1)) {
			$genre_str .= ", ";
		}
	}
	echo "<br>";
	foreach ($wisata as $koy => $wisate) {
		$wisata_str .= $wisate;
		if ($koy != (count($wisata)-1)) {
			$wisata_str .= ", ";
		}
	}
}

?>
<table border="2" cellpadding="1" cellspacing="2">
	<th>GAMBAR</th>
	<th>HOBI</th>
	<th>GENRE FILM</th>
	<th>TUJUAN WISATA</th>
	<tr>
		<td><img src='gambar/'<?php $img; ?>></td>
		<td><?php echo $hobi_str; ?></td>
		<td><?php echo $genre_str; ?></td>
		<td><?php echo $wisata_str; ?></td>
	</tr>
</table>