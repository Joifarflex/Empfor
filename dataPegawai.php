<?php
session_start();
include 'config.php';
?>

<h4>Selamat datang! Silahkan pilih data pegawai || Keluar? Silahkan <a href="logout.php">Logout</a></h4>
</br>

<form action="dataPegawai.php" method="post">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php

if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Posisi</th>
		<th>Gaji</th>
	</tr>
	<?php
	if(isset($_POST['cari'])){
		$cari = $_POST['cari'];
		$data = $connect->query("select * from employee where name like '%".$cari."%'");
	}else{
		$data =$connect->query("select * from employee");
	}
	$no = 1;
	while($d = mysqli_fetch_assoc($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['name']; ?></td>
		<td><?php echo $d['title']; ?></td>
		<td><?php echo number_format($d['salary'], 0, ',', '.') ?></td>
	</tr>
	<?php } ?>
</table>
