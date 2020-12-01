<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <title>Форма тест</title>
    <link href="main.96036e301f257ec86ea7.css" rel="stylesheet">
</head>

<body>
    <?php
        $sub1 = 123;
        $utm_source = 321;
        $ip = "192.168.1.1";
    ?>
    <div class="container">       

        <div class="discount">
            <div class="price">
                <div class="price__old"><span>Обычная цена:1449 р.</span></div>
                <div class="price__new">Цена по акции: 149 р.</div>
                <div class="price__text">Остаток товара на 11.11.2050:</div>
                <div class="price__remainder">58</div>
            </div>
            <div class="discount__logo"><img src="images/logo.png" alt=""></div>
            <form action="/index.php" method="POST" name="getProduct" class="form">
                <div class="form__header">Введите ваши данные в форму ниже:</div>
                <input class="form__control" type="text" name="name" placeholder="Ваше имя" value="">
                <input class="form__control" type="tel" name="phone" placeholder="Ваш телефон" value="">
                <input class="form__control form__control--submit" type="submit" name="submit" value="Получить за 149 руб.">
                <input type="hidden" value="<?php echo $sub1 ?>" name="sub1">
                <input type="hidden" value="<?php echo $utm_source ?>" name="utm_source">
                <input type="hidden" value="<?php echo $ip ?>" name="ip">
            </form>
        </div>


    </div>
    <script src="vendors~main.96036e301f257ec86ea7.js"></script>
    <script src="main.96036e301f257ec86ea7.js"></script>
</body>

</html>