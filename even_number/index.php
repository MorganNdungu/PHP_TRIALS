<!DOCTYPE html>
<html>
<head>
    <title>number checker</title>
</head>
<body>
    <h1>Number even , odd, prime</h1>
    <form action = "<?php echo $_SERVER ['PHP_SELF'] ; ?> " method = "POST">
        Enter a number: <input type="number" name="num">
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['num'])) {
        $num = $_POST["num"];

        if ($num % 2 == 0) {
            echo "<p>$num is an even number.</p>";
        } else {
            echo "<p>$num is an odd number.</p>";
        }

        $isPrime = true;
        if ($num <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "<p>$num is a prime number.</p>";
        } else {
            echo "<p>$num is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>
