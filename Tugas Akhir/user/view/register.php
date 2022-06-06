<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class = 'alert alert-danger alert-dismissible fade show' role = 'alert'>Username telah dipakai</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>
 
		<form action="user/controller/registercontrol.php" method="post" enctype="multipart/form-data">
			<label>Username</label>
			<input type="text" name="user" class="form_login" placeholder="Username .." required>
 
			<label>Password</label>
			<input type="password" name="pass" class="form_login" placeholder="Password .." required>

            <label>Nama Panjang</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama Panjang .." required>

            <label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat .." required>

            <label>Pilih Level</label>
            <select class="form_login" name="level">
                <option value="1">Pelanggan</option>
                <option value="2">Publisher</option>
            </select>
            <label for="img">Tambah Gambar</label>
            <input class = "form_login" type="file" name="logo" accept="image/*" required>

			<input type="submit" class="tombol_login" value="REGISTER">
		</form>
		
	</div>