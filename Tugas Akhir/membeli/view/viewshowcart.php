<?php
include_once 'membeli/controller/showcartcontroller.php'
?>
<table class="table table-sm table-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pembeli</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Harga</th>
      <th scope="col">Pembayaran</th>
      <th scope="col">Kuantitas</th>
      <?php
          if ($_SESSION['level'] == "pelanggan") { ?>
      <th scope="col">Tambah/Kurang Kuantitas</th>
      <th scope="col">Hapus Barang</th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
      <?php
      $i = 1;
      $total = 0;
      foreach($state as $key){
      ?>
    <tr>
      <th scope="row"><?php
      echo $i ?></th>
      <td><?php echo $key['username']?></td>
      <td><?php echo $key['nama_buku']?></td>
      <td><?php echo "Rp. ".$key['harga'] * $key['kuantitas']?></td>
      <td><?php echo $key['pembayaran']?></td>
      <td><?php echo $key['kuantitas']?></td>
      <?php
          if ($_SESSION['level'] == "pelanggan") { ?>
      <td><div class="card-body">
        <div class="d-flex align-items-center pb-2 mb-1">
        <form action="membeli/controller/ubahkuantitascontroller.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $key['nobeli'] ?>">
              <input type="hidden" name="kuantitas" value="<?php echo $key['kuantitas'] ?>">
              <input type="submit" value="-" class="btn btn-primary" name="operator"/>
            </form>
            <form action="membeli/controller/ubahkuantitascontroller.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $key['nobeli'] ?>">
              <input type="hidden" name="kuantitas" value="<?php echo $key['kuantitas'] ?>">
              <input type="submit" value="+" class="btn btn-success" name="operator"/>
            </form>
        </div>
        </div>
        </td>
        <td>
        <div class="card-body">
        <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
        <form action="membeli/controller/hapuscartcontroller.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $key['nobeli'] ?>">
              <input type="submit" value="hapus" class="btn btn-primary" />
            </form>
      </div>
      </div>
        </td>
        <?php } ?>
      </tr>
        <?php 
        $i++;
        $total = $total + ($key['harga'] * $key['kuantitas']);
    }

    ?>
    </tr>
      <th scope="row" colspan=<?php
          if ($_SESSION['level'] == "pelanggan") { echo "7";}
          else{echo "5";}?>>Total : </th>
      <td><?php echo $total ?></td>
      <tr>
  </tbody>
</table>