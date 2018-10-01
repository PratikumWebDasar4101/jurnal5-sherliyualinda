<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center >
		<h3>APLIKASI PENDAFTARAN MAHASISWA</h3>
		<table bgcolor="pink">
			<form action="prosesregis.php" method="POST">
				<tr>
					<td>
						<label>Nama</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="Nama harus max 25 karakter" required=>
					</td>
				</tr>
				<tr>
					<td>
						<label>NIM</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nim" pattern="[0-9]{10}" title="Nim harus angka serta 10 karakter" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Email</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="Email" name="email" placeholder="@gmail.com" required>
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</form>
	</table>


</body>
</html>
