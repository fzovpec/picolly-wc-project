<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header/head.php' ?>
</head>
<body>
    <header>
        <div class="mobile-menu">
            <div class="mobile-menu__close">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAh1BMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9NFUgUAAAALHRSTlMAzMQBDgYFDQcExhEDswyRsrGvw8ISrgi2xa2kqQm8rKsLv6XJsM3Bu6a6tGsoXsAAAAC4SURBVDjL7ZPZEsIgDEVRC4Livi+17mv+//sMWCvOUMiTvvS+3cmZQDbGKv1NDfntlSrheuOu6/Vqq/wcgEvqA8DaR8oNAOx3bysytMemL2V6x9AoD4klmtrE/0nZwWDdkmJquHZZ2QUphkGOMd5HYJHwGMfYbG5yGryVhJvOB2AV45A8gX0+OsdXSkJC4tPUYvJGRtvzaXhkMI9i2MFRp1dnKfQNzdlLkteMvLhIXkinQD+uSr/QE67oGaawf4jbAAAAAElFTkSuQmCC">
            </div>
            <div class="mobile-menu__nav">
                <?php include 'header/navigation.php' ?>
            </div>
        </div>
        <div class="container smm_container">
            <div class="logo-mobile">
                <a href="/"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt=""></a>
            </div>
            <div class="row">
                <div class="logo-big col-md-3">
                    <a href="/"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt=""></a>
                </div>
                <div class="col-md-5">
                    <div class="search__block">
                        <div class="search__line">
                            <img src="<?php echo get_template_directory_uri() ?>/img/search_line.png" class="search__line">
                        </div>
                        <div class="search__arrow">
                            <img src="<?php echo get_template_directory_uri() ?>/img/search_arrow.png" alt="">
                        </div>
                        <form class="search">
                            <input type="text" name="name" placeholder="Поиск">
                            <select>
                                <option>Все категории</option>
                                <option>Тест</option>
                                <option>Тест</option>
                                <option>Тест</option>
                            </select>
                            <div class="search__box">
                                <img src="<?php echo get_template_directory_uri() ?>/img/search_icon.png">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 smm">
                    <div class="row">
                        <p><a href="tel:+7 905 167 93 93">+7 905 167 93 93</a></p>
                        <img src="<?php echo get_template_directory_uri() ?>/img/inst_black.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/yt_black.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/yt_black.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="menu container-fluid">
                <div class="row">
                    <div class="menu__points col-md-8">
                        <div class="row">
                            <ul>
                                <li class="point_1 col-md-2">
                                    <a href="about_us.html">О нас</a>
                                    <div class="menu__underline"></div>
                                </li>
                                <li class="point_2 col-md-2">
                                    <a href="category.html">Категории</a>
                                    <div class="menu__underline"></div>
                                </li>
                                <li class="point_3 col-md-2">
                                    <a href="collections.html">Коллекции</a>
                                    <div class="menu__underline"></div>
                                </li>
                                <li class="point_4 col-md-2">
                                    <a href="factories.html">Фабрики</a>
                                    <div class="menu__underline"></div>
                                </li>
                                <li class="point_5 col-md-2">
                                    <a href="delivery.html">Доставка</a>
                                    <div class="menu__underline"></div>
                                </li>
                                <li class="point_6 col-md-2">
                                    <a href="contacts.html">Контакты</a>
                                    <div class="menu__underline"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu__cart">
                        <a href="basket.html">
                            <div class="row">
                                <span class="menu__cart__price" style="font-family:'FuturaPT'">60 000 Р.</span>
                                <img src="<?php echo get_template_directory_uri() ?>/img/cart_white.png" width="auto" alt="">
                                <span>Корзина</span>
                            </div>
                        </a>
                    </div>
                    <div class="open__mobile__menu">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoAQMAAAC2MCouAAAABlBMVEVHcEz///+flKJDAAAAAXRSTlMAQObYZgAAABVJREFUCNdjYCAC/AcBLCSpYBCYAwAGdDvF2XDbTQAAAABJRU5ErkJggg==">
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="mobile-sub-info">

        <div class="mobile-menu__cart">
            <a href="basket.html">
                <div class="row">
                    <span class="mobile-menu__cart__price" style="font-family:'FuturaPT'">60 000 Р.</span>
                    <img src="<?php echo get_template_directory_uri() ?>/img/cart_white.png" width="auto" alt="">
                </div>
            </a>
        </div>
        <div class="mobile-contacts">
            <div class="number" style="width: 100%; text-transform: uppercase">
                <p><a href="contacts.html">Связаться с нами</a></p>
            </div>
        </div>
    </div>