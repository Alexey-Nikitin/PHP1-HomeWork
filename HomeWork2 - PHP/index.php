<!--------------------------------------->
<h1>Задание 1</h1>
<!--------------------------------------->

<?php
$a = -5;
$b = 0;

if ($a > 0 && $b > 0 || $a == 0 && $b == 0 || $a == 0 && $b > 0 || $a > 0 && $b == 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
?>

<!--------------------------------------->
<h1>Задание 2</h1>
<!--------------------------------------->

<?php
$c = 7;

switch ($c) {
    case(0):
        echo "0 ";
        continue;
    case(1):
        echo "1 ";
    case(2):
        echo "2 ";
    case(3):
        echo "3 ";
    case(4):
        echo "4 ";
    case(5):
        echo "5 ";
    case(6):
        echo "6 ";
    case(7):
        echo "7 ";
    case(8):
        echo "8 ";
    case(9):
        echo "9 ";
    case(10):
        echo "10 ";
    case(11):
        echo "11 ";
    case(12):
        echo "12 ";
    case(13):
        echo "13 ";
    case(14):
        echo "14 ";
    case(15):
        echo "15 ";
        break;
    default:
        echo "число находиься не в промежутке от 0 до 15!";
}
?>

<!--------------------------------------->
<h1>Задание 3, 4</h1>
<!--------------------------------------->

<?php
function arithmetic($arg1, $arg2, $operation)
{
    switch ($operation) {
        case ("+"):
            return $arg1 + $arg2;
        case ("-"):
            return $arg1 - $arg2;
        case ("*"):
            return $arg1 * $arg2;
        case ("/"):
            return $arg1 / $arg2;
    }
    return "Ошибка";
}

echo arithmetic(8, 2, "*");
?>

<!--------------------------------------->
<h1>Задание 5</h1>
<!--------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task5</title>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }

        body {
            margin-left: 30px;
        }

        h1 {
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .header {
            height: 50px;
            width: 1000px;
            background-color: wheat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ulHeader {
            display: inline;
        }

        .ulHeader > li {
            display: inline;
            list-style-type: none;
        }

        .content {
            width: 1000px;
            height: 500px;
            background-color: mediumaquamarine;
            color: red;
        }

        .footer {
            height: 50px;
            width: 1000px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: darkgrey;
        }

    </style>
</head>
<body>
<header class="header">
    <ul class="ulHeader">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Каталог</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
</header>
<div class="content">
    Здесь контент
</div>
<footer class="footer">

    <?= date('Y'); ?>

</footer>
</body>
</html>

<!-------------------------------------------------------------------------------------------------------------->



