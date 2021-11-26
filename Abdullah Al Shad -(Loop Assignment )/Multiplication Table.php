<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<html>
    <body>
        <form action="Multiplication Table.php" method="post">
            Enter a number:
            <input type="number_format" name="x" >
            <input type="submit" value="Times Table">
        </form>
        
        <?php
        $x = $_POST['x'] ?? 1;
        echo "<h1>Multiplication Table of = $x</h1>";
        for ($y = 1; $y <= $x*10; $y++){
            if($y % $x == 0){
                $z = $y/$x;
                echo "<h3>$x × $z = $y</h3> <hr>";
            
            }
        }
        ?>
    
    </body>
</html>
</html>
