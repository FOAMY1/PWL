<?php
include_once 'book/controller/bookscontroller.php';
?>
<br>
<br>
<br>
<div class="container">
    <form action="book/controller/updatebookscontroller.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="isbn" value="<?php echo $isbn; ?>">
            <div class="d-flex justify-content-center">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <img src="assets/books/<?php echo $foto; ?>" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-responsive" alt="Buku" />
                </div>
            </div>
            <label for="namabuku">Nama Buku</label>
            <input type="text" class="form-control" id="namabuku" value="<?php echo $nama ?>" name="bookname" required>
        </div>
        <div class="form-group">
            <label for="namapengarang">Nama Pengarang</label>
            <input type="text" class="form-control" id="namapengarang" value="<?php echo $pengarang ?>" name="writer" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" value="<?php echo $uang ?>" name="price" required>
        </div>
        <div class="form-group">
            <label for="tebalbuku">Tebal Buku</label>
            <input type="text" class="form-control" id="tebalbuku" value="<?php echo $tebal ?>" name="thickness" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Buku</label>
            <textarea class="form-control" id="deskripsi" rows="5" name="description" required><?php echo $deskripsi ?></textarea>
        </div>
        <input class="form_login" type="file" name="logo" accept="image/*">
        <a href="index.php?pilih=home" class="text-dark fw-bold">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br>