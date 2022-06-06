<?php
include_once 'user/controller/usercontroller.php';
?>
<div class="container-fluid">
    <div class="form-group">
        <div class="d-flex justify-content-center">
            <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                <img src="assets/users/<?php echo $foto; ?>" width="300" height="300" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-responsive" alt="Buku" />
            </div>
        </div>
        <label for="namabuku">Username</label>
        <input type="text" class="form-control" id="namabuku" value="<?php echo $username ?>" name="username" readonly>
    </div>
    <div class="form-group">
        <label for="namapengarang">Password</label>
        <input type="password" class="form-control" id="namapengarang" value="<?php echo $password ?>" name="password" readonly>
    </div>
    <div class="form-group">
        <label for="harga">Nama Panjang</label>
        <input type="text" class="form-control" id="harga" value="<?php echo $nama ?>" name="name" readonly>
    </div>
    <div class="form-group">
        <label for="tebalbuku">Alamat</label>
        <input type="text" class="form-control" id="tebalbuku" value="<?php echo $alamat ?>" name="address" readonly>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
        <a href="index.php?pilih=home" class="text-dark fw-bold">Kembali</a>
            <form action="index.php?pilih=user&m=edituser" method="POST">
                <input autocomplete="off" type="hidden" name="pilih" value="user">
                <input type="hidden" name="id" value="<?php echo $username ?>">
                <input type="submit" value="Edit" class="btn btn-primary" />
            </form>
            <form action="user/controller/hapususercontroller.php" method="POST">
                <input autocomplete="off" type="hidden" name="pilih" value="home">
                <input type="hidden" name="id" value="<?php echo $username ?>">
                <input type="submit" value="Hapus" class="btn btn-danger" />
            </form>
        </div>
    </div>
</div>
<br>