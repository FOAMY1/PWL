<?php
include_once 'book/controller/showbookscontroller.php';
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="edit"){
        echo "<div class = 'alert alert-info alert-dismissible fade show' role = 'alert'>Edit Berhasil</div>";
    }
    if($_GET['pesan']=="save"){
        echo "<div class = 'alert alert-info alert-dismissible fade show' role = 'alert'>Upload Berhasil</div>";
    }
    if($_GET['pesan']=="hapus"){
        echo "<div class = 'alert alert-info alert-dismissible fade show' role = 'alert'>Berhasil Dihapus</div>";
    }
}
?>
<br>
<br>
<br>
    </div>
    <div class="container">
        <form class="form-inline" action="index.php?pilih=home&m=search">
            <input autocomplete="off" type="hidden" name="pilih" value="home">
            <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search" value="<?php echo (get('cari')); ?>">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <br>
        <?php
        $data = $bookmod->show($search);
        $i = 1;
        foreach ($data as $key) {
            if ($i == 1) {
        ?>
                <div class="card-deck">

                    <div class="card">
                        <form action="index.php?pilih=home&m=lihat" method="post">
                        <input autocomplete="off" type="hidden" name="pilih" value="home">
                            <input type="hidden" name="id" value="<?php echo $key['isbn']; ?>">
                            <img class="card-img-top" src="assets/books/<?php echo $key['gambar']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $key['nama_buku']; ?></h5>
                                <p class="card-text"><?php echo $key['pengarang']; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo "Rp. " . $key['harga'] . ""; ?></small></p>
                                <button type="submit" class="btn btn-primary stretched-link">Lihat Buku</button>
                            </div>
                        </form>
                    </div>
                <?php
            } else if ($i % 4 == 0) { ?>
                </div>
                <br>
                <div class="card-deck">
                    <div class="card">
                        <form action="index.php?pilih=home&m=lihat" method="post">
                            <input autocomplete="off" type="hidden" name="pilih" value="home">
                            <input type="hidden" name="id" value="<?php echo $key['isbn']; ?>">
                            <img class="card-img-top" src="assets/books/<?php echo $key['gambar']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $key['nama_buku']; ?></h5>
                                <p class="card-text"><?php echo $key['pengarang']; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo "Rp. " . $key['harga'] . ""; ?></small></p>
                                <button type="submit" class="btn btn-primary stretched-link">Lihat Buku</button>
                            </div>
                        </form>
                    </div>
                <?php
            } else { ?>
                    <div class="card">
                        <form action="index.php?pilih=home&m=lihat" method="post">
                        <input autocomplete="off" type="hidden" name="pilih" value="home">
                            <input type="hidden" name="id" value="<?php echo $key['isbn']; ?>">
                            <img class="card-img-top" src="assets/books/<?php echo $key['gambar']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $key['nama_buku']; ?></h5>
                                <p class="card-text"><?php echo $key['pengarang']; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo "Rp. " . $key['harga'] . ""; ?></small></p>
                                <button type="submit" class="btn btn-primary stretched-link">Lihat Buku</button>
                            </div>
                        </form>
                    </div>
            <?php
            }
            $i++;
        } ?>
            </div>
            <br>
    </div>
</body>

</html>