<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 作業 2</title>
</head>

<body>
    <?php

    // 可能是物件導向的練習
    class Orange
    {
        public function getTotal($level, $kg)
        {
            switch ($level) {

                case "1":

                    if ($kg >= 0 && $kg <= 40) {

                        echo $kg * 30;
                    } elseif ($kg <= 100) {

                        echo $kg * 25;
                    } else {

                        echo $kg * 20;
                    }
                    break;

                case "2":

                    if ($kg >= 0 && $kg <= 40) {

                        echo $kg * 25;
                    } elseif ($kg <= 100) {

                        echo $kg * 20;
                    } else {

                        echo $kg * 15;
                    }
                    break;

                case "3":

                    if ($kg >= 0 && $kg <= 40) {

                        echo $kg * 20;
                    } elseif ($kg <= 100) {

                        echo $kg * 15;
                    } else {

                        echo $kg * 10;
                    }
                    break;
            }
        }
    }
    ?>

    <div>
        <p>小計：
            <?php
            $total = new Orange();
            $total->getTotal($_POST["level"], $_POST["kg"]);
            ?>
        </p>
    </div>
</body>

</html>