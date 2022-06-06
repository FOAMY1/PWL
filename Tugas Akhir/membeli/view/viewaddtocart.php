<?php
include_once 'book/controller/bookscontroller.php';
?>
<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="membeli/controller/addtocartcontroller.php" method="post">
			<label>ISBN</label>
			<input type="text" name="isbn" class="form_login" value="<?php echo $isbn ?>" readonly>

            <label>Nama Buku</label>
			<input type="text" name="name" class="form_login" value="<?php echo $nama ?>" readonly>
 
			<label>Pembeli</label>
			<input type="text" name="username" class="form_login" value="<?php echo $_SESSION['login'] ?>" readonly>

            <label>Pilih Pembayaran</label>
            <select class="form_login" name="payment">
                <option value="COD">Cash On Delivery</option>
                <option value="OVO">OVO</option>
                <option value="DANA">Dana</option>
                <option value="Gopay">Gopay</option>
            </select>
            <label>Pilih Kuantitas</label>
            <select class="form_login" name="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                
            </select>
 
			<input type="submit" class="tombol_login" value="Add to Cart">
		</form>
		
	</div>