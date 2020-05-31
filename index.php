<br/>
	<center><h2>Selamat Datang di Empfor! Masuk untuk melihat informasi pegawai</h2></center>
<br/>
	<center><h4>Silahkan isi form di bawah ini untuk masuk</h4></center>
<center>
	<form action="login_proses.php" method="post">
	    <input type="text" name="username" placeholder="dot" required/>
	    <input type="password" name="password" placeholder="dotcompany" required/>
	    <button type="submit" name="login">Login</button>
	</form>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Maaf, username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
</center>
