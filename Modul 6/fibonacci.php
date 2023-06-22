<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fibonacci</title>
</head>
<body>
    <nav class="nav">
        <div class="nav-area">
            <a class="brand" href="">
                <span>Fibonacci</span>
            </a>

            <div class="nav-menu-dekstop">
                <a type="button" href="index.php">Kembali</a>
            </div>
        </div>
    </nav>



    <form method="post">
        <label for="number">Masukkan jumlah bilangan:</label>
        <input type="number" id="number" name="number" required min="0">
        <button type="submit" name="submit">Hitung</button>

        <?php
    function fibonacci($number) {
        $fibonacciSeries = [0, 1];

        for ($i = 2; $i < $number; $i++) {
            $fibonacciNumber = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
            $fibonacciSeries[] = $fibonacciNumber;
        }

        return $fibonacciSeries;
    }

    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        $fibonacciSeries = fibonacci($number);

        echo "<p>Deret Fibonacci hingga bilangan ke-$number adalah:</p>";
        echo implode(",", $fibonacciSeries);
    }
    ?>

    </form>
</body>
</html>
