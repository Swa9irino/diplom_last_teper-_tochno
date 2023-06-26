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
<div class="app" id="app">
    <div class="burger">
        <button class="burger-btn" @click="showMenu = !showMenu">
            <span class="burger-icon" :class="{ 'open': showMenu }"></span>
        </button>
        <nav class="menu" :class="{ 'open': showMenu }">
            <ul>
                <li v-on:mouseover="() => { hideElements(); hideElementss(); }"><a href="#" @mouseover="showElement">Гаджеты</a>
                </li>
                <li v-on:mouseover="() => { hideElement(); hideElementss(); }"><a href="#" @mouseover="showElements">Компьютеры</a>
                </li>
                <li v-on:mouseover="() => { hideElement(); hideElements(); }"><a href="#" @mouseover="showElementss">Спорт</a>
                </li>
            </ul>
        </nav>
    </div>
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
            <div class="header__logo">
                <a href="index.php">
                    <span class="header__log_title">CHEAPFINDER</span>
                    <div class="header__logo-container">
                        <img src="assets/logo.png" alt="">
                    </div>
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
        <div class="under__header">
            <div class="assortmentt">
                <ul class="assortment__listt">
                    <li v-on:mouseover="() => { hideElements(); hideElementss(); }"><a @mouseover="showElement"
                                                                                       class="hover__title"
                                                                                       href="#">Гаджеты</a></li>
                    <li v-on:mouseover="() => { hideElement(); hideElementss(); }"><a @mouseover="showElements"
                                                                                      class="hover__title" href="#">Компьютеры</a>
                    </li>
                    <li v-on:mouseover="() => { hideElement(); hideElements(); }"><a @mouseover="showElementss"
                                                                                     class="hover__title"
                                                                                     href="#">Спорт</a>
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
                                echo '<div class="sort__item"><a href="product.php?id=' . $row1['id'] . '"><img src="' . $row1['img'] . '"><p>' . $row1['name'] . '<br>' . ' Price: ' . $row1["price"] . '</p></a></div><br>';
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
                <div class="sort__items-container">
                    <div class="sort__img">
                        <?php
                        if (mysqli_num_rows($result2) > 0) {
                            // Вывод списка товаров
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row2['id'] . '">' . "<img  src=\"{$row2['img']}\">" . "<p>{$row2['name']}</p>" . '</a></div><br>';
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
                <div class="sort__items-container">
                    <div class="sort__img">

                        <?php
                        if (mysqli_num_rows($result3) > 0) {
                            // Вывод списка товаров
                            while ($row3 = mysqli_fetch_assoc($result3)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row3['id'] . '">' . "<img  src=\"{$row3['img']}\">" . "<p>" . nl2br($row3['name']) . "</p>" . '</a></div><br>';
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
                <div class="sort__items-container">
                    <div class="sort__img">

                        <?php
                        if (mysqli_num_rows($result5) > 0) {
                            // Вывод списка товаров
                            while ($row5 = mysqli_fetch_assoc($result5)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row5['id'] . '">' . "<img  src=\"{$row5['img']}\">" . "<p>" . nl2br($row5['name']) . "</p>" . '</a></div><br>';
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
                <div class="sort__items-container">
                    <div class="sort__img">

                        <?php
                        if (mysqli_num_rows($result4) > 0) {
                            // Вывод списка товаров
                            while ($row4 = mysqli_fetch_assoc($result4)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row4['id'] . '">' . "<img  src=\"{$row4['img']}\">" . "<p>" . nl2br($row4['name']) . "</p>" . '</a></div><br>';
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
                <div class="sort__items-container">
                    <div class="sort__img">

                        <?php
                        if (mysqli_num_rows($result6) > 0) {
                            // Вывод списка товаров
                            while ($row6 = mysqli_fetch_assoc($result6)) {
                                echo ' <div class="sort__item"><a href="product.php?id=' . $row6['id'] . '">' . "<img  src=\"{$row6['img']}\">" . "<p>" . nl2br($row6['name']) . "</p>" . '</a></div><br>';
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


        <?php

        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'products_db';
        $conn = mysqli_connect($host, $username, $password, $dbname);

        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        $id = $_GET['id'];
        $sql = 'SELECT name, price,img,description,href,hrefS FROM phone WHERE id = ' . $id;
        $sql2 = 'SELECT name, price,img,description,href,hrefS FROM cpu WHERE id = ' . $id;
        $sql3 = 'SELECT name, price,img,description,href,hrefS FROM powerbank WHERE id = ' . $id;
        $sql4 = 'SELECT name, price,img,description,href,hrefS FROM gpu WHERE id = ' . $id;
        $sql5 = 'SELECT name, price,img,description,href,hrefS FROM phonecase WHERE id = ' . $id;
        $sql6 = 'SELECT name, price,img,description,href FROM bike WHERE id = ' . $id;
        $popular = 'SELECT id, name, price,img,description,href,hrefS,mvideo  FROM popular WHERE id = ' . $id;
        $search = 'SELECT id, name, price,img,description,href,hrefS,citylink  FROM AllProducts WHERE id = ' . $id;

        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);
        $result5 = mysqli_query($conn, $sql5);
        $result6 = mysqli_query($conn, $sql6);
        $search = mysqli_query($conn, $search);
        $populars = mysqli_query($conn, $popular);



        if (mysqli_num_rows($result) > 0) {
            $row1 = mysqli_fetch_assoc($result);
            // Вывод информации о товаре
            if (!empty($row1['hrefS'])) {
                echo '<div class="detail__page"><img src="' . $row1["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row1["name"] . '</span><br> <span style="width: 100%">Price: ' . $row1["price"] . ' руб. </span><br> <span>Описание: ' . $row1["description"] . '</span><a target="_blank" style="color: orange" href="' . $row1['href'] . '">DNS</a><a target="_blank" style="color: red;font-size: 16px" href="' . $row1['hrefS'] . '">М.Видео</a></div></div><br>';

            } else {
                echo '<div class="detail__page"><img src="' . $row1["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row1["name"] . '</span><br> <span style="width: 100%">Price: ' . $row1["price"] . ' руб. </span><br> <span>Описание: ' . $row1["description"] . '</span><a target="_blank" style="color: orange" href="' . $row1['href'] . '">DNS</a></div></div><br>';
            }
        }

        if (mysqli_num_rows($result2) > 0) {
            $row2 = mysqli_fetch_assoc($result2);
            // Вывод информации о товаре
            echo '<div  class="detail__page"><img src="' . $row2["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row2["name"] . '</span><br> <span style="width: 100%">Price: ' . $row2["price"] . ' руб. </span><br> <span>Описание: ' . $row2["description"] . '</span><a target="_blank" style="color: orange" href="' . $row2['href'] . '">DNS</a><a target="_blank" style="color: red;font-size: 16px" href="' . $row2['hrefS'] . '">М.Видео</a></div></div><br>';
        }

        if (mysqli_num_rows($result3) > 0) {
            $row3 = mysqli_fetch_assoc($result3);
            // Вывод информации о товаре
            echo '<div class="detail__page"><img src="' . $row3["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row3["name"] . '</span><br> <span style="width: 100%">Price: ' . $row3["price"] . ' руб. </span><br> <span>Описание: ' . $row3["description"] . '</span><a target="_blank" style="color: orange" href="' . $row3['href'] . '">DNS</a><a target="_blank" style="color: #e89723;font-size: 16px" href="' . $row3['hrefS'] . '">Ситилинк</a></div></div><br>';
        }

        if (mysqli_num_rows($result4) > 0) {
            $row4 = mysqli_fetch_assoc($result4);
            // Вывод информации о товаре
            echo '<div class="detail__page"><img src="' . $row4["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row4["name"] . '</span><br> <span style="width: 100%">Price: ' . $row4["price"] . ' руб. </span><br> <span>Описание: ' . $row4["description"] . '</span><a target="_blank" style="color: orange" href="' . $row4['href'] . '">DNS</a><a target="_blank" style="color:#e89723 ;font-size: 16px" href="' . $row4['hrefS'] . '">Ситилинк</a></div></div><br>';
        }
        if (mysqli_num_rows($result5) > 0) {
            $row5 = mysqli_fetch_assoc($result5);
            // Вывод информации о товаре
            echo '<div class="detail__page"><img src="' . $row5["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row5["name"] . '</span><br> <span style="width: 100%">Price: ' . $row5["price"] . ' руб. </span><br> <span>Описание: ' . $row5["description"] . '</span><a target="_blank" style="color: orange" href="' . $row5['href'] . '">DNS</a></div></div><br>';
        }
        if (mysqli_num_rows($result6) > 0) {
            $row6 = mysqli_fetch_assoc($result6);
            // Вывод информации о товаре
            echo '<div class="detail__page"><img src="' . $row6["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $row6["name"] . '</span><br> <span style="width: 100%">Price: ' . $row6["price"] . ' руб. </span><br> <span>Описание: ' . $row6["description"] . '</span><a target="_blank" style="color: orange" href="' . $row6['href'] . '"><span style="color: darkgray">Вело</span><span style="color: blue">Cтрана</span></a></div></div><br>';
        }

        if (mysqli_num_rows($populars) > 0) {
            $famous = mysqli_fetch_assoc($populars);
            // Вывод информации о товаре

            if (!empty($famous['mvideo'])) {
                echo '<div class="detail__page"><img src="' . $famous["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $famous["name"] . '</span><br> <span style="width: 100%">Price: ' . $famous["price"] . ' руб. </span><br> <span>Описание: ' . $famous["description"] . '</span><a target="_blank" style="color: orange" href="' . $famous['href'] . '">DNS</a><a target="_blank" style="color: red;font-size: 16px" href="' . $famous['hrefS'] . '">М.Видео</a></div></div><br>';
            } else {
                echo '<div class="detail__page"><img src="' . $famous["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $famous["name"] . '</span><br> <span style="width: 100%">Price: ' . $famous["price"] . ' руб. </span><br> <span>Описание: ' . $famous["description"] . '</span><a target="_blank" style="color: orange" href="' . $famous['href'] . '">DNS</a><a target="_blank" style="color:  #e89723;font-size: 16px" href="' . $famous['hrefS'] . '">Ситилинк</a></div></div><br>';


            }
        }


        if (mysqli_num_rows($search) > 0) {
            $searchItem = mysqli_fetch_assoc($search);
            // Вывод информации о товаре
            echo '<div class="detail__page"><img src="' . $searchItem["img"] . '"><div class="detail__text"> <span style="text-align: center;width: 100%"> Name: ' . $searchItem["name"] . '</span><br> <span style="width: 100%">Price: ' . $searchItem["price"] . ' руб. </span><br> <span>Описание: ' . $searchItem["description"] . '</span>';

            if (!empty($searchItem['hrefS'])) {
            } else {
                echo '<a target="_blank" style="color: orange" href="' . $searchItem['href'] . '"><span style="color: darkgray">Вело</span><span style="color: blue">Cтрана</span></a>';
            }
            if (!empty($searchItem['citylink'])) {
                echo '<a target="_blank" style="color: orange" href="' . $searchItem['href'] . '">DNS</a><a target="_blank" style="color: #e89723;font-size: 16px" href="' . $searchItem['hrefS'] . '">Ситилинк</a>';
            }

            echo '</div></div><br>';
        }
        // Закрытие соединения с базой данных
        mysqli_close($conn);
        ?>

        <section>
            <footer class="footer container" style="margin: 0 auto">
                <hr style="width: 100%;height: 2px;margin-bottom: 50px;opacity: .5;">
                <div class="about__container">
                    <div class="about">
                        <h2>О проекте</h2>
                        <a href="https://www.donationalerts.com/r/cheapfinder" target="_blank"><h3>Помощь проекту</h3>
                        </a>
                        <a href="#" @click.prevent="currentPage='conf'"><h3>Конфиденциальность</h3></a>
                    </div>

                    <div class="market">
                        <h2>Локальные магазины</h2>
                        <a href="#" @click="currentPage='map'"><h3>Карта</h3></a>
                    </div>
                    <div class="where">
                        <h2>Где нас найти</h2>
                        <div class="where__img">

                            <a href="https://vk.com/public220675923" target="_blank"><img src="assets/VK.png"
                                                                                          alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="cheapfiner">
                    <div class="cheapfiner__title"><p>© CHEAPFINDER 2023-2023</p></div>
                </div>
            </footer>
        </section>

</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="js/app.js"></script>


</body>
</html>



