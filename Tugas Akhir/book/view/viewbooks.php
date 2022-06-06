<?php
include_once 'book/controller/bookscontroller.php';
?>
<section style="background-color: #eee;">
<br>
<br>
<br>
  <div class="container-fluid">
    <div class="card" style="border-radius: 15px;">
    <br>
      <div class="d-flex justify-content-center">
        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
          <img src="assets/books/<?php echo $foto; ?>" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-responsive" alt="Buku" />
        </div>
      </div>
      <div class="card-body pb-0">
        <div class="d-flex justify-content-between">
          <div>
            <h2 class="text-dark"><?php echo $nama ?></h2>
            <p class="small text-muted"><?php echo $tebal . " Halaman" ?></p>
          </div>
          <div>
            <h2 class="small text-muted"><?php echo "Rp. " . $uang . "" ?></h2>
          </div>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-0">
        <div class="d-flex justify-content-between">
          <p class="text-dark"><?php echo "Pengarang : ".$pengarang ?></p>
          <p class="text-dark"><?php echo "ISBN : " .$isbn ?></p>
        </div>
        <textarea class="form-control" id="deskripsi" rows="9" name="description" readonly><?php echo $deskripsi ?></textarea>
      </div>
      <hr class="my-0" />
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
          <a href="index.php?pilih=home" class="text-dark fw-bold">Kembali</a>
          <?php
          if ($_SESSION['level'] == "publisher") { ?>
            <form action="index.php?pilih=home&m=edit" method="POST">
              <input autocomplete="off" type="hidden" name="pilih" value="home">
              <input type="hidden" name="id" value="<?php echo $isbn ?>">
              <input type="submit" value="Edit" class="btn btn-primary" />
            </form>
            <form action="book/controller/hapuscontroller.php" method="POST">
              <input autocomplete="off" type="hidden" name="pilih" value="home">
              <input type="hidden" name="id" value="<?php echo $isbn ?>">
              <input type="submit" value="Hapus" class="btn btn-danger" />
            </form>
          <?php
          } else if ($_SESSION['level'] == "pelanggan") { ?>
            <form action="index.php?pilih=cart" method="POST">
              <input type="hidden" name="id" value="<?php echo $isbn ?>">
              <input type="submit" value="Add to MyCart" class="btn btn-primary" />
            </form>
          <?php
          } else { ?>
            <form action="index.php?pilih=login">
              <input autocomplete="off" type="hidden" name="pilih" value="login">
              <input type="submit" value="Login To Buy" class="btn btn-primary" />
            </form>
          <?php
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>