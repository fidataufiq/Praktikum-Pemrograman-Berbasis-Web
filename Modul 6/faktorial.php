<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>faktorial</title>
</head>
<body>
    <nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<span>Faktorial</span>
			</a>

			<div class="nav-menu-dekstop">
				<a type="button" href="index.php">Kembali</a>
			</div>
		</div>
	</nav>

    <form method="post">
        <label for="number">Masukkan bilangan:</label>
        <input type="number" id="number" name="number" required min="0">
        <button type="submit" name="submit">Hitung</button>

        <?php
    function calculateFactorial($number) {
        if ($number < 0) {
            return "Bilangan tidak valid. Harap masukkan bilangan non-negatif.";
        } elseif ($number == 0) {
            return 1;
        } else {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }

    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $result = calculateFactorial($number);
        echo "<p>Hasil faktorial dari $number adalah: $result</p>";
    }
    ?>

    
    </form>

</body>
</html>