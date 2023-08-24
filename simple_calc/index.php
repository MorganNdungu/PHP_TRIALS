<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple php calculator</h2>
    <form action = "<?php echo $_SERVER ['PHP_SELF'] ; ?> " method = "GET">
    <label for="num1">Number 1 :</label>
    <input type="number" name = "num1" id ="num1" required>
    <br> <br>
    <label for="num2">Number 2 :</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <input type="submit" name="calculate" value="calculate">
    </form>
    <?php 
    if(isset($_GET['calculate'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        //addition
        $result=$num1 + $num2 ;

    }
    ?>
    <h2>Results</h2>
    <input type="number" value="<?php echo $result;?>" readonly>
</body>
</html>