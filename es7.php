<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 9;
        $y = 5;
        $ris = "";
        $par = "";
        $max = $x;
        if ($x == $y) {
            $ris = "uguale";
        } elseif ($x > $y) {
            $ris = "maggiore";
        } else {
            $ris = "minore";
            $max = $y;
        }
        if ($max < 10) {
            $par = "minore di 10";
        } elseif ($max >= 10 && $max <= 20) {
            $par = "compreso tra 10 e 20";
        } elseif ($max >= 21 && $max <= 30) {
            $par = "compreso tra 21 e 30";
        } else {
            $par = "maggiore di 30";
        }
        echo "<h1>$ris</h1><br>
              <p>$max è $par</p>"
    ?>
</body>
</html>