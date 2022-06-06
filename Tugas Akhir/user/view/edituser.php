<?php
include_once 'user/controller/usercontroller.php';
?>
<div class="container">
    <form action="user/controller/updateuserscontroller.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="d-flex justify-content-center">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="assets/users/<?php echo $foto; ?>" width="300" height="300" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-responsive" alt="Buku" />
                </div>
            </div>
            <label for="namabuku">Username</label>
            <input type="text" class="form-control" id="namabuku" value="<?php echo $username ?>" name="username" required>
        </div>
        <div class="form-group">
            <label for="namapengarang">Password</label>
            <input type="password" class="form-control" id="namapengarang" value="<?php echo $password ?>" name="password" required>
        </div>
        <div class="form-group">
            <label for="harga">Nama Panjang</label>
            <input type="text" class="form-control" id="harga" value="<?php echo $nama ?>" name="name" required>
        </div>
        <div class="form-group">
            <label for="tebalbuku">Alamat</label>
            <input type="text" class="form-control" id="tebalbuku" value="<?php echo $alamat ?>" name="address" required>
        </div>
        <input class="form_login" type="file" name="logo" accept="image/*">
        <a href="index.php?pilih=home" class="text-dark fw-bold">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>