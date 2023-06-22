<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Konversi Suhu</title>
</head>
<body>
    <nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<span>Konversi Suhu</span>
			</a>

			<div class="nav-menu-dekstop">
				<a type="button" href="index.php">Kembali</a>
			</div>
		</div>
	</nav>

    <form method="post">
		<label for="suhu">Masukkan suhu:</label>
		<input type="number" id="suhu" name="suhu" required>
		<select name="jenis_suhu">
			<option value="none">Jenis Suhu</option>
			<option value="celcius">Celcius</option>
			<option value="fahrenheit">Fahrenheit</option>
			<option value="kelvin">Kelvin</option>
		</select>
		<button type="submit" name="submit">Konversi</button>
<?php
function konversiSuhu($suhu, $jenis_suhu)
{
    switch ($jenis_suhu) {
        case "celcius":
            $fahrenheit = ($suhu * 9/5) + 32;
            $kelvin = $suhu + 273.15;
            echo "<p>$suhu ° Celcius sama dengan $fahrenheit ° Fahrenheit</p>";
            echo "<p>$suhu ° Celcius sama dengan $kelvin ° Kelvin</p>";
            break;
        case "fahrenheit":
            $celcius = ($suhu - 32) * 5/9;
            $kelvin = ($suhu - 32) * 5/9 + 273.15;
            echo "<p>$suhu ° Fahrenheit sama dengan $celcius ° Celcius</p>";
            echo "<p>$suhu ° Fahrenheit sama dengan $kelvin ° Kelvin</p>";
            break;
        case "kelvin":
            $celcius = $suhu - 273.15;
            $fahrenheit = ($suhu - 273.15) * 9/5 + 32;
            echo "<p>$suhu ° Kelvin sama dengan $celcius ° Celcius</p>";
            echo "<p>$suhu ° Kelvin sama dengan $fahrenheit ° Fahrenheit</p>";
            break;
        case "none":
            echo "<p>Pilih Jenis Suhu yang ingin dikonversi!!!</p>";
            break;
    }
}

if (isset($_POST['submit'])) {
    $suhu = $_POST['suhu'];
    $jenis_suhu = $_POST['jenis_suhu'];

    konversiSuhu($suhu, $jenis_suhu);
}
?>
	</form>
</body>
</html>
