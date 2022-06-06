<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class = 'alert alert-danger alert-dismissible fade show' role = 'alert'>Username dan Password tidak sesuai !</div>";
		}
		else if ($_GET['pesan']=="reg"){
			echo "<div class = 'alert alert-info alert-dismissible fade show' role = 'alert'>Register Berhasil</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="user/controller/logincontrol.php" method="post">
			<label>Username</label>
			<input type="text" name="user" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="pass" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
			<label>Tidak punya akun? Register</label>
			<button type="submit" class="tombol_login" formaction="index.php?pilih=login&m=register">REGISTER</button>
		</form>
		
	</div>
