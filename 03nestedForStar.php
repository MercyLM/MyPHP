<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 作業 2</title>
</head>

<body>
    <?php

    //起始值
    $max = 10;
    //總計
    $total = 0;
    //字串
    $text = 1;

    for ($i = 1; $i <= $max; $i++) {

        $total += $i;

        if ($i > 1) {

            $text = $text . " + " . $i;
        }

        echo $text, " = ", $total, "<br>";
    }

    ?>
</body>

</html>