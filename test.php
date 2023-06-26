<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="app" id="app" >
    <?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'products_db';
    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $sql1 = 'SELECT id, name, price,img FROM phone';
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = 'SELECT id, name, price,img FROM cpu';
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = 'SELECT id, name, price,img FROM powerbank';
    $result3 = mysqli_query($conn, $sql3);

    $sql4 = 'SELECT id, name, price,img FROM gpu';
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = 'SELECT id, name, price,img FROM phonecase';
    $result5 = mysqli_query($conn, $sql5);

    $sql6 = 'SELECT id, name, price,img FROM bike';
    $result6 = mysqli_query($conn, $sql6);

    $popular = 'SELECT id, name, price,img FROM popular';
    $populars = mysqli_query($conn, $popular);





    // Закрытие соединения с базой данных
    mysqli_close($conn);

    ?>
    <div class="header container">
        <div class="header__container">
            <div class="header__logo" >
                <a href="index.php">
                <span class="header__log_title">CHEAPFINDER</span>
                <div class="header__logo-container">
                    <img src="assets/logo.png" alt="">
                </div>
            </div>
            <div class="header__items">
                <div class="search__items">
                    <form action="search.php" method="GET">
                        <input type="text" name="query" placeholder="Введите название товара">
                    </form>

                </div>

            </div>
        </div>
        <div class="under__header">
            <div class="assortment">
                <ul class="assortment__list">
                    <li v-on:mouseover="() => { hideElements(); hideElementss(); }"><a @mouseover="showElement"
                                                                                       class="hover__title"
                                                                                       href="#">Гаджеты</a></li>
                    <li v-on:mouseover="() => { hideElement(); hideElementss(); }"><a @mouseover="showElements"
                                                                                      class="hover__title" href="#">Компьютеры</a>
                    </li>
                    <li v-on:mouseover="() => { hideElement(); hideElements(); }"><a @mouseover="showElementss"
                                                                                     class="hover__title" href="#">Спорт</a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="line">
            <hr>
        </div>
        <div class="hover__items" @mouseleave="hideElement">
            <transition></transition>
            <div class="links" v-if="isVisible===true">
                <div v-for="link in links.slice(0,3)" :key="link.id" @click="handlers[link.id]">
                    <a href="#"><img :src="'assets/' + link.img" alt="" class=""></a>
                    <a href="#"><h3>{{ link.name }}</h3></a>
                </div>
            </div>
            <div class="links" v-if="isVisiblee===true" @mouseleave="hideElements">
                <div v-for="link in links.slice(3,5)" :key="link.id" @click="handlers[link.id]">
                    <a href="#"><img :src="'assets/' + link.img" alt=""></a>
                    <a href="#"><h3>{{ link.name }}</h3></a>
                </div>
            </div>
            <div class="links" v-if="isVisibleee===true" @mouseleave="hideElementss">
                <div v-for="link in links.slice(5,6)" :key="link.id" @click="handlers[link.id]">
                    <a href="#"><img :src="'assets/' + link.img" alt=""></a>
                    <a href="#"><h3>{{ link.name }}</h3></a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="sort" style="font-family: 'second';" v-if="currentPage==='phone'">
            <div class="sort__select">
                <label>Мобильные телефоны</label>
            </div>

            <div class="sort__items">
                <div class="sort__items-container">
                    <div class="sort__img">
                        <?php
                        if (mysqli_num_rows($result1) > 0) {
                            // Вывод списка товаров
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                echo '<div class="sort__item"><a href="product.php?id=' . $row1['id'] . '"><img src="' . $row1['img'] . '"><p>' . $row1['name'] .'<br>'. ' Price: ' . $row1["price"] . '</p></a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }

                        ?>

                    </div>

                </div>


            </div>

        </div>


        <div class="sort" style="font-family: 'second';" v-if="currentPage==='cpu'">
            <div class="sort__select">
                <label>Процессоры</label>

            </div>

            <div class="sort__items">
                <div class="sort__items-container" >
                    <div class="sort__img" >
                        <?php
                        if (mysqli_num_rows($result2) > 0) {
                            // Вывод списка товаров
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row2['id'] . '">'  . "<img  src=\"{$row2['img']}\">". "<p>{$row2['name']}</p>".'</a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </div>



            </div>
        </div>
        <!---->
        <div class="sort" style="font-family: 'second';" v-if="currentPage==='powerbanks'">

            <div class="sort__select">
                <label>Портативный аккумуляторы</label>

            </div>

            <div class="sort__items">
                <div class="sort__items-container" >
                    <div class="sort__img" >

                        <?php
                        if (mysqli_num_rows($result3) > 0) {
                            // Вывод списка товаров
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row3['id'] . '">'  . "<img  src=\"{$row3['img']}\">". "<p>". nl2br($row3['name']) . "</p>".'</a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>


        <div class="sort" style="font-family: 'second';" v-if="currentPage==='phonecase'">

            <div class="sort__select">
                <label>Чехлы для телефона</label>

            </div>

            <div class="sort__items">
                <div class="sort__items-container" >
                    <div class="sort__img" >

                        <?php
                        if (mysqli_num_rows($result5) > 0) {
                            // Вывод списка товаров
                            while ($row5 = mysqli_fetch_assoc($result5)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row5['id'] . '">'  . "<img  src=\"{$row5['img']}\">". "<p>". nl2br($row5['name']) . "</p>".'</a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>



        <div class="sort" style="font-family: 'second';" v-if="currentPage==='gpu'">

            <div class="sort__select">
                <label>Видеокарты</label>

            </div>

            <div class="sort__items">
                <div class="sort__items-container" >
                    <div class="sort__img" >

                        <?php
                        if (mysqli_num_rows($result4) > 0) {
                            // Вывод списка товаров
                            while ($row4 = mysqli_fetch_assoc($result4)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row4['id'] . '">'  . "<img  src=\"{$row4['img']}\">". "<p>". nl2br($row4['name']) . "</p>".'</a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="sort" style="font-family: 'second';" v-if="currentPage==='bikes'">

            <div class="sort__select">
                <label>Велосипеды</label>

            </div>

            <div class="sort__items">
                <div class="sort__items-container" >
                    <div class="sort__img" >

                        <?php
                        if (mysqli_num_rows($result6) > 0) {
                            // Вывод списка товаров
                            while ($row6 = mysqli_fetch_assoc($result6)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row6['id'] . '">'  . "<img  src=\"{$row6['img']}\">". "<p>". nl2br($row6['name']) . "</p>".'</a></div><br>';
//
                            }
                        } else {
                            echo 'No products found';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/app.js"></script>
<script src="js/q.js"></script>
</body>
</html>

