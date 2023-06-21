<?php

if( isset($_POST["submit"]) ) {
	$barang = $_POST["barang"];
	$harga = $_POST["harga"];
	$jmlhBeli = $_POST["jumlah"];

	$totalHarga = $harga * $jmlhBeli;

	if ($totalHarga > 5000000) {
		$diskon = 10/100 * $totalHarga;
		$totalBayar = $totalHarga - $diskon;
	}
	


	if ($totalHarga > 4000000) {
		$bonus ="Sound Bar Polytron";
	}

	if ($totalHarga < 4000000) {
		$bonus ="Tidak mendapatkan Bonus";
		$diskon ="0";
		$totalBayar = $totalHarga;
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pusat Penjualan TV</title>
</head>
<body>
	<div class="Penjualan-box">
		<h2>Pusat Penjualan TV</h2>

		<form action="" method="post">
			<label for="barang">Nama Barang</label>
			<br>
			<select name="barang" id="barang">
				<option>Pilih TV</option>
				<option value="TV Hisens">TV Hisense 40 Inch</option>
				<option value="TV Samsung">TV Samsung 40 Inch</option>
				<option value="TV TCL">TV TCL 40 Inch</option>
				<option value="TV LG">TV LG 40 Inch</option>
			</select>
			<br>
			
			<label for="harga">Harga Barang</label><br>
			<input type="number" name="harga" id="harga" readonly>

			<br>
			<label for="jumlah">Jumlah Barang</label><br>
			<input type="number" name="jumlah" id="jumlah">

			<br>
			<br>
			<button type="submit" name="submit" id="submit">Beli</button>
			<button type="reset" id="reset">Kosongkan</button>
		</form>

		<!-- ----------------------------------------------------- -->

		<br>
		<label for="total">Total Harga</label><br>
		<input type="number" id="totalHarga" name="total" value="<?= (isset($_POST["submit"])) ? $totalHarga : ''; ?>" readonly>

		<br>
		<label for="diskon">Diskon</label><br>
		<input type="number" id="diskon" name="diskon" value="<?= (isset($_POST["submit"])) ? $diskon : ''; ?>" readonly>

		<br>
		<label for="total-bayar">Total Bayar</label><br>
		<input type="number" id="totalBayar" name="total-bayar" value="<?= (isset($_POST["submit"])) ? $totalBayar : '' ?>" readonly>

		<br>
		<label for="bonus">Bonus</label><br>
		<input type="text" id="bonus" name="bonus" value="<?= (isset($_POST["submit"])) ? $bonus : '' ?>" readonly>
		
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="scripts.js"></script>
</body>
</html>