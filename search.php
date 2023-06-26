
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<section>
    <div class="header container">
        <div class="header__container">
            <div class="header__logo" >
                <a href="index.php">
                    <span class="header__log_title">CHEAPFINDER</span>
                    <div class="header__logo-container">
                        <img src="assets/logo.png" alt="">
                    </div>
                </a>
            </div>
            <div class="header__items">
                <div class="search__items">
                    <form style="align-items: center;
    display: flex;" action="search.php" method="GET">
                        <input type="text" name="query" placeholder="Введите название товара">
                        <button  type="submit">Найти</button>
                    </form>

                </div>

            </div>
        </div>

        <div class="line">
            <hr>
        </div>

    </div>
</section>
<?php
// получаем запрос из формы поиска
$query = $_GET['query'];

// подключаемся к базе данных
$mysqli = new mysqli('localhost', 'root', '', 'products_db');

// формируем запрос на поиск товаров
$sql = "SELECT * FROM AllProducts WHERE name LIKE '%$query%'";

// выполняем запрос и получаем результат
$result = $mysqli->query($sql);

// выводим список товаров
while ($row = $result->fetch_assoc()) {
    echo '<div class="detail__page"> <a style="display: flex;align-items: center;flex-direction: column;gap: 15px" href="product.php?id=' . $row['id'] . '">' . $row['name'].'<img class="search__img" src="' . $row["img"] . '"></a> '.'<span>' . $row['description'] .'</span></div><br>';
}

// закрываем соединение с БД
$mysqli->close();
?>

<section>
    <footer class="footer container" style="margin: 0 auto">
        <hr style="width: 100%;height: 2px;margin-bottom: 50px;opacity: .5;">
        <div class="about__container">
            <div class="about">
                <h2>О проекте</h2>
                <a href="https://www.donationalerts.com/r/cheapfinder" target="_blank"><h3>Помощь проекту</h3></a>
                <a href="#" @click.prevent="currentPage='conf'"><h3>Конфиденциальность</h3></a>
            </div>

            <div class="market">
                <h2>Локальные магазины</h2>
                <a href="#" @click="currentPage='map'"><h3>Карта</h3></a>
            </div>
            <div class="where">
                <h2>Где нас найти</h2>
                <div class="where__img">

                    <a href="https://vk.com/public220675923" target="_blank"><img src="assets/VK.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="cheapfiner">
            <div class="cheapfiner__title"><p>© CHEAPFINDER 2023-2023</p></div>
        </div>
    </footer>
</section>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/app.js"></script>

</body>
</html>
