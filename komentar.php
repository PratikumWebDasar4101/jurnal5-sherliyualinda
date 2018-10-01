
<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center>
		<h3>APLIKASI PENGHITUNG KOMENTAR</h3>
		<table bgcolor="pink">
		<form action=" " method="POST">
			<tr>
				<td>
					<label>Nama</label>
				</td>
				<td>
					<input type="text" name="nama" required>
				</td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td>
					<textarea name="komentar"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];
		$data = explode(" ", $komentar);
		echo "<br>";
		if (count($data) < 5) {
			echo "Komentar harus lebih dari 5 kata";
		}else{

			echo "komentar Anda :<br>".$komentar;
			echo "<br>";
			echo "Jumlah Kata Anda Adalah :";
			echo count($data);
		}
	}
 ?>
