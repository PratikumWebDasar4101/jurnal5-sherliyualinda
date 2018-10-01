<?php
session_start();
	if (!isset($_SESSION['data'])) {
		$data= array();
	}else{
		$data =$_SESSION['data'];
	}
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];

		$data_baru = array(
						'nama' => $nama,
						'nim' => $nim,
						'email' => $email
						);
		array_push($data, $data_baru);
	$_SESSION['data']= $data;
	}
?>
<br>
<br>
<br>

<center><table>
	<tr>
		<th>NAMA</th>
	</tr>
	<?php 
	$data =$_SESSION['data'];
	$num =0;
	while ($num<count($data)) {
	 ?>
	<tr>
		<td><?php echo $data[$num]['nama'];  ?></td>
	</tr>
	<?php  
	$num++;
}
	?>

	<tr>
		<th>NIM</th>
	</tr>
	<?php 
	$data =$_SESSION['data'];
	$num =0;
	while ($num<count($data)) {
	 ?>
	<tr>
		<td><?php echo $data[$num]['nim'];  ?></td>
	</tr>
	<?php  
	$num++;
}
	?>

	<tr>
		<th>EMAIL</th>
	</tr>
	<?php 
	$data =$_SESSION['data'];
	$num =0;
	while ($num<count($data)) {
	 ?>
	<tr>
		<td><?php echo $data[$num]['email'];  ?></td>
	</tr>
	
	<?php  
	$num++;
}
	?>
</table>
<br>
<a href="registrasi.php">Tambah Data</a>
