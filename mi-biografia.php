<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Navajas Seperak</title>
    <!--  <link rel="icon" type="image/png" href="images\favicon.png"> fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="vendor\owl-carousel\assets\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\photoswipe\photoswipe.css">
    <link rel="stylesheet" href="vendor\photoswipe\default-skin\default-skin.css">
    <link rel="stylesheet" href="vendor\select2\css\select2.min.css">
    <link rel="stylesheet" href="css\style.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="css\styleAnterior.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="css\styleExtra.css"><!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor\fontawesome\css\all.min.css"><!-- font - stroyka -->
    <link rel="stylesheet" href="fonts\stroyka\stroyka.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
</head>

<style>
    .mb-45 {
        margin-bottom: 30px !important;
    }
</style>

<body>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="index.html">
                                <!-- mobile-logo -->
                                <h7>GALPÓN PAQUIRRI</h7>
                                <!-- mobile-logo / end -->
                            </a>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <form class="search__form" action=""><input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg></button> <button class="search__button search__button--type--close" type="button"><svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cross-20"></use>
                                            </svg></button>
                                        <div class="search__border"></div>
                                    </form>
                                    <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none"><button class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                            </svg></span></button></div>
                                <div class="indicator indicator--mobile d-sm-flex d-none"><a href="cart.php" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#heart-20"></use>
                                            </svg> <span class="indicator__value">0</span></span></a></div>
                                <div class="indicator indicator--mobile"><a href="cart.php" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                                <use xlink:href="images/sprite.svg#cart-20"></use>
                                            </svg> <span class="indicator__value">3</span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">

                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Sobre Nosotros</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Contactos</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Blog</a></div>
                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">Lenguaje: <span class="topbar__item-value">EN</span> <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg></button>
                                    <div class="topbar-dropdown__body">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--topbar menu--with-icons">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="">
                                                        <div class="menu__item-icon"><img srcset="images/languages/language-1.png, images/languages/language-1@2x.png 2x" src="images/languages/language-1.png" alt=""></div>English
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="">
                                                        <div class="menu__item-icon"><img srcset="images/languages/language-2.png, images/languages/language-2@2x.png 2x" src="images/languages/language-2.png" alt=""></div>French
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="">
                                                        <div class="menu__item-icon"><img srcset="images/languages/language-3.png, images/languages/language-3@2x.png 2x" src="images/languages/language-3.png" alt=""></div>German
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="">
                                                        <div class="menu__item-icon"><img srcset="images/languages/language-4.png, images/languages/language-4@2x.png 2x" src="images/languages/language-4.png" alt=""></div>Russian
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="">
                                                        <div class="menu__item-icon"><img srcset="images/languages/language-5.png, images/languages/language-5@2x.png 2x" src="images/languages/language-5.png" alt=""></div>Italian
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- .menu / end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-header__middle container">
                    <div class="site-header__logo"><a href="index.html">
                            <h3>GALPÓN PAQUIRRI</h3>
                        </a></div>
                    <div class="site-header__search">
                        <div class="search search--location--header">
                            <div class="search__body">
                                <form class="search__form" action=""><input class="search__input" name="search" placeholder="Buscar información" aria-label="Site search" type="text" autocomplete="off"> <button class="search__button search__button--type--submit" type="submit"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg></button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Servicio al Cliente</div>
                        <div class="site-header__phone-number">(01) 999919898</div>
                    </div>
                </div>

                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">

                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="./index.php">
                                                <div class="nav-links__item-body">Inicio <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg></div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="trayectoria.php">
                                                <div class="nav-links__item-body">Trayectoría <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg></div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="catalogue.php">
                                                <div class="nav-links__item-body">Catálogo <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg></div>
                                            </a>
                                        </li>
                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="gallery.php">
                                                <div class="nav-links__item-body">Galería <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg></div>
                                            </a>
                                        </li>

                                        <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="contacts.php">
                                                <div class="nav-links__item-body">Contáctanos <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg></div>
                                            </a>
                                        </li>


                                    </ul>
                                </div><!-- .nav-links / end -->
                                <div class="nav-panel__indicators">
                                    <div class="indicator indicator--trigger--click">
                                        <button type="button" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg class="indicator__icon" width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#search-20"></use>
                                                </svg>
                                                <svg class="indicator__icon indicator__icon--open" width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                                </svg>
                                            </span>
                                        </button>
                                        <div class="indicator__dropdown">
                                            <div class="search search--location--indicator">
                                                <div class="search__body">
                                                    <form class="search__form" action="">
                                                        <input class="search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                                        <button class="search__button search__button--type--submit" type="submit">
                                                            <svg width="20px" height="20px">
                                                                <use xlink:href="images/sprite.svg#search-20"></use>
                                                            </svg></button>
                                                        <div class="search__border"></div>
                                                    </form>
                                                    <div class="search__suggestions suggestions suggestions--location--indicator"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="indicator">
                                        <a href="#" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#heart-20"></use>
                                                </svg>
                                                <span class="indicator__value">0
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--trigger--click">
                                        <a href="#" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span class="indicator__value">
                                                    3</span>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart dropcart--style--dropdown">
                                                <div class="dropcart__body">
                                                    <div class="dropcart__products-list">
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image"><a href="/producto.php" class="product-image__body"><img class="product-image__img" src="images\navajas\colaDeRata.png" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="#">Cola de rata</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Plata</li>
                                                                    <li>Material: Acero</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg></button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\filipina.png" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="#">Filipina</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Plata</li>
                                                                    <li>Material: Acero</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg></button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\olivocurva.png" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="#">Media O</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Plata</li>
                                                                    <li>Material: Acero</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity"></span><span class="dropcart__product-price">S/100.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg width="10px" height="10px">
                                                                    <use xlink:href="images/sprite.svg#cross-10"></use>
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                    <div class="dropcart__totals">
                                                        <table>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>S/300.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Envío</th>
                                                                <td>S/25.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Impuesto</th>
                                                                <td>S/0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>S/325.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons"><a class="btn btn-secondary" href="./cart.php">Ver Carrito</a> <a class="btn btn-primary" href="checkout.php">Pagar</a></div>
                                                </div>
                                            </div><!-- .dropcart / end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">Mi Biografía</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Mi Biografía</h1>
                    </div>
                </div>
            </div>
            <!-- .block-slideshow -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-box mb-40">
                            <div class="info-panel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="justifyText">Nací en la provincia de Casma, Ancash - Perú, ciudad del eterno sol y cuna de la cultura Sechin y sus famosos guerreros, un 10 de abril de 1973. Fue principalmente por mi padre, Francisco Alejandro Seperak Morales (Pancho), quien desde muy chico me introdujo en el mundo de los gallos me hizo ver, conocer, aprender y visitar coliseos y estar cerca de esta tradición, los genes de mi abuelo materno José Lorenzo Mesarina Zegarra y mis tíos también maternos Dagoberto y Alfredo Mesarina, todos criadores y aficionados del gallo navajero peruano. Puedo decir que gracias a ellos nació esta hermosa afición que hasta el día de hoy me llena de satisfacción, grandes alegrías, buenos amigos, muchas experiencias y grandes triunfos. </p>
                                    </div>
                                </div>

                                <div class="row padding-top-mini">
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img1.jpeg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Conociendo a los gallos</h6>
                                        <p class="justifyText">
                                            Desde muy pequeño despertó en mi esa curiosidad cuando entraba al corral de mi padre a jugar con mi hermana, me detenía y podía apreciar el revolcadero de las gallinas y pollas, la ubicación los alimentos y medicamentos, las casillas etc. Pero fue entonces, que por circunstancias del trabajo de mi padre quien fue trasladado a trabajar a la comisaria de Culebras, en la provincia de Huarmey, me asigno las tareas y quehaceres del corral en general, ya que criábamos otros tipos de animales domésticos.
                                            Hoy en día puedo recordar que era una labor muy dura y pesada, por mi corta edad, pero sin duda podía pasar el día entero ayudándolo, simplemente por el grato placer que fue despertando en mí con el pasar del tiempo está linda afición.
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="row padding-top-mini">
                                    <div class="col-md-12">
                                        <h6>Primero Maestros</h6>
                                        <p class="justifyText">Como mencione líneas arriba, mi abuelo, mis tíos y principalmente mi padre fueron mis primeros maestros. Pero no puedo dejar de mencionar sin duda, aquel hombre a quien mi padre me dijo enfáticamente <<míralo a él, todo lo que hace ese señor, es bueno, sabe lo que hace, ha jugado gallos con tu abuelo y ha trabajado con mi compadre Teófilo Trujillo y lo ha hecho ganar muchas peleas, es buen preparador de gallos>> Don Glicerio Betteta, apodado Calanco, caballero de renombre en ese entonces, con mucha preparación, conocimiento en la preparación y poner a punto los gallos para el combate a quien lo contrataron para que en mi galpón el prepare los gallos para una tradicional jugada de Casma Vs Supe.
                                                Fueron cruciales para mí esas palabras porque andaba detrás de él escuchando todas sus anécdotas, dichos y bromas. Conté además con la suerte de ganarme su aprecio y me enseño poner un gallo en patas y a punto, a capear los gallos y lo que él denominaba, a domesticarlos.
                                                Recuerdo algo que hasta hoy en día practico, el gallo no debe ser bravo con su amo, su carácter lo tiene que demostrar en la cancha, para eso era importante que el gallo esté siempre con su trabilla para poder sacarlo y no se maltrate
                                        </p>
                                    </div>
                                </div>

                                <div class="row padding-top-mini">
                                    <div class="col-md-8">
                                        <h6>Entre amarres y careos</h6>
                                        <p class="justifyText">Recuerdo que mi papá participó en un campeonato en la provincia de Nepeña donde llegamos hasta la final, me encargo la preparación de los gallos, él no quiso amarrar y trajo un amarrador de Lima, cuando llego el día de la gran final, jugamos y nos ganan en la primera pelea, el gallo peleó muy bien jugo como topaba, pateo bastante y escuchaba entre la algarabía de los aficionados que nuestro gallo había perdido por navaja que mejor hubieras amarrado él mismo. Pasando toda la euforia de la final, durante todo el camino de regreso a casa en casma, mi papá hablaba con sus amigos de la pelea perdida por la falta de Navaja, lo que despertó en mí también las ganas por querer amarrar nuestros propios gallos, que vienes hacer 2 años de sacrificios para poder verlos en cancha.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img7.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-box mb-40">
                            <div class="info-panel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="justifyText">De visita a Lima con mi padre, recogimos un gallo para cría donde su gran amigo Don Alfonso Flores fue él también me quien me enseño y me dio unas pautas y consejos para amarrar. Aprovechamos esa oportunidad para ir también por primera al famoso Coliseo Sandia ubicado en el centro de Lima.
                                            En mi adolescencia, me reunía con mis amigos en Casma, Victor Diaz, Iván Yui, Kike pachas, el loco Millan Moyasevich, Joselito Paz, Papi Paz, Luis Murriel ( Gallina ) Lucho Yui ( Chinga ) Alan Mesarina, Paul Montes, Raúl Solis, Pedro Solis ( chinito ) Frankclin Barrera y muchos más que ahora no pasan por mi mente, y a todos nos gustaba y compartíamos la misma afición gallística que hasta hoy perdura. También, comencé a visitar más seguido los coliseos y como mi padre no podía ir por trabajo, entonces iba con mi tío Dagoberto Mesarina, quien me llevaba a Nepeña, Santa, Moro y Chimbote y a veces me hacía amarrar y soltar sus gallos. Era justo en esos tiempos el coliseo donde se jugaba mucho y donde se realizaba el campeonato más reconocido de la época, era el coliseo del Sr. Lucho Vega, de Chimbote, puedo resaltar que fue el coliseo en esos tiempos donde más veces amarré y solté gallos.
                                        </p>
                                    </div>
                                </div>

                                <div class="row padding-top-mini">
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img8.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Descubriendo Lima</h6>
                                        <p class="justifyText">
                                            Al culminar mis estudios de secundaria, vine a Lima para ampliar mis conocimientos y poder tener una profesión y forjarme para mi futuro. Sin embargo, los fines de semana me hacía un tiempo para visitar los coliseos del Círculo Gallístico del Perú, en esos tiempos se jugaba en Surco, en el coliseo de “La Chacra”, luego el círculo se mudó a jugar a “El Lúcumo” en Chorrillos, luego se trasladó a la Hacienda Villa donde el espectáculo era impresionante, entraban al coliseo fácil unas 4000 mil personas ya que aparte de gallos, rodeo, comida había una discoteca. Fue cuando mi padre se hizo socio del Círculo Gallístico del Perú y comenzamos a venir con más frecuencia a jugar a las grandes ligas de Lima. Conocí también el coliseo “La Puerta de Hierro” que estaba en Miraflores y “La Chacrita” en el cono norte.
                                        </p>
                                        <br />
                                    </div>

                                    <div class="col-md-12">
                                        <p class="justifyText">
                                            Tiempos en los que mi amigo Iván Yui tenía su galpón el cual se convirtió en sitio de encuentro para poder topar y ver gallos con los amigos de siempre en Lima.
                                            También, comencé a conocer a los galleros de Lima y a todos los mejores de la época, uno de ellos fue Luis García Hermosa y Luis García hijo, con quien nació una muy buena amistad que perdura hasta la actualidad. Frecuentaba seguido su galpón en Lurín donde conocí a su galponero en esa época Alfredo Yactayo (pistolita), quien es en la actualidad también muy buen amigo. Lucho me prestó varios ejemplares de sus líneas conocidas: los paisas, los magos, un malayo, los coyotes, el king y Luchito me regaló una gallinita vampiro que tenía línea de Piquerito Robles, puedo decir que esos ejemplares fueron la base de mi galpón en esa época.
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="row padding-top-mini">
                                    <div class="col-md-12">
                                        <h6>Tras la ruta gallística</h6>
                                        <p class="justifyText">
                                            Fue en la temporada del 2005 donde logramos estar con Lucho Garcia y lucho hijo como en 7 finales si la memoria no me falla, Lucho Garcia papa por temas de trabajo no podía asistir y fuimos por muchos coliseos convirtiéndome en su amarrador y careador por alrededor de uno o dos años aproximadamente, hicimos un buen trio entre luchito, Alfredo yactayo ( Pistolita ) y YO nos juntábamos en el galpón para topar y seleccionar los gallos a jugar, nos íbamos por muchas ciudades del país jugando gallos, entre ellas; Cerro Azul, Cañete, Ica, Nazca, Palpa, Ayacucho, Huancayo. Esa visita me dio también la oportunidad de seguir conociendo muchos más galleros de todo el Perú. No olvido una anécdota de Luchito él gritando eufórico sobre mi desempeño en la cancha ¡Vamos Paquirri! ¡Vamos Paquirri! Vamos Luis Eduardo tu eres gringo hijo frase que se hizo celebre por todos los coliseos del sur después de 2 botellas de pisco jijijiji ,Que hizo incluso pensar a los aficionados que “Paquirri” eran una de las líneas de sus gallos.
                                            Con el tiempo, también logré conocer a Álvaro Añaños, quien me dio la oportunidad de amarrar y soltar sus gallos en un campeonato del nuevo coliseo Sandia ubicado en Chorrillos, quedando dentro de los primeros puestos. Álvaro me regaló una gallinita de su línea llamada La Liga, la misma que también usé de pie de cría de mi galpón, dándome unos buenos animales. Fue en ese momento que decidí comenzar a criar mis gallos de manera independiente en Lima.
                                        </p>
                                    </div>
                                </div>

                                <div class="row padding-top-mini">
                                    <div class="col-md-8">
                                        <h6>Galpón Paquirri</h6>
                                        <p class="justifyText">En el año 2001 nace mi galpón en la azotea de mi casa en Chaclacayo con capacidad sólo para 40 gallos. Traje del galpón de mi padre algunos animales de las líneas que él había trabajado y comencé a hacer mis propios cruces de manera independiente. Conseguí prestarme algunos ejemplares de las líneas de Don Roberto Kuan Salazar, Pipo Robles, Caluco Elías, Vicente Ramírez, Hugo Conde, también compré con mi amigo y socio Iván Yui y Tito Diaz unos gallos a mi amigo Juan Cabrejas, y fuimos haciendo nuestras camadas más adelante también con otro amigo compramos un Gallo Malayo al Ingeniero Carlos Flores Montes un gallo que me gana en una semifinal de cañete y seguimos forjando con esfuerzo y mucha dedicación nuestras propias líneas.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img9.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-box mb-40">
                            <div class="info-panel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="justifyText">En el 2006 llega una época muy bonita porque jugábamos en sociedad con mi buen amigo y prácticamente hermano Víctor Diaz, y mi querido amigo Iván Yui. Tuvimos la suerte campeona en el Campeonato Nacional de Gallos a Navaja organizado por el Círculo Gallístico del Perú. Luego de ese gran logro, decidimos formar el Galpón Dos Generaciones. Incluimos en la sociedad para jugar en Lima a mi tío Dagoberto Mesarina, complementando así la unión de dos generaciones de galleros.
                                        </p>
                                    </div>
                                </div>

                                <div class="row padding-top-mini">
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img11.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="justifyText">
                                            Al año siguiente en el 2007, con mucha dedicación y esfuerzo logramos ganar el mismo campeonato nacional del circulo gallistico. También ese año estuvimos dentro de los 4 finalistas del campeonato de Yauris 2007 en Huancayo. De ahí en adelante hemos logrado estar en varias finales de sandia 2008, en Ica la tinguiña (2009), Cañete (2010, 2011, 2013). Por esos años también jugué en sociedad con mi amigo Juan Cabrejas, fui amarrador y soltador de varios de sus gallos. Recuerdo una anécdota en la final de Cañete, para definir el campeonato nos tocaba disputar con Carlos Acuña de Huaral, quien no quiso amarrarse, así que entramos al galpón a escoger el gallo, ambos coincidimos es escoger a un gallo machetón, precioso, que era de su línea estrella, sacamos al gallo a la cancha y fue quien nos dio la victoria del campeonato dándonos la inmensa alegría de darle la vuelta al ruedo.
                                        </p>
                                        <br />
                                    </div>

                                    <div class="col-md-12">
                                        <p class="justifyText">
                                            En el 2014, quise tener nuevas experiencias, por ello, me aventuré a viajar a México para conocer algunos galleros, y así aprender más sobre los gallos, traer navajas para mi uso personal etc.
                                            Como resultado de este viaje, logré traer unos animales para cruzar con mis ejemplares peruanos, así mismo decidí incursionar en el 2015 hasta el 2017 en la comercialización de la navaja mexicana “Pata Roja” de Daniel Zarazua.
                                            Convirtiéndome hasta la actualidad en el distribuidor de su marca, sin embargo, a partir del 2018 logro el lanzamiento de mi línea de navajas SEPERAK con especificaciones propias de mi experiencia como gallero.
                                        </p>
                                    </div>
                                </div>
                                <div class="row padding-top-mini">
                                    <div class="col-md-8">

                                        <p class="justifyText">
                                            Finalmente, resalto el año 2017 como el mejor hasta la fecha, tuve varios triunfos en este mundo fascinante de los gallos. Especialmente tengo un cariño especial al campeonato del 27 de julio donde salimos como “Campeón de Campeones” y el del 25 de noviembre, en el Campeonato Nacional del Círculo Gallístico donde logré el 2do y 3er puesto. Lo recuerdo porque estuvo presente por última vez mi padre a mi lado disfrutando juntos dicho triunfo, el cual se sentía orgulloso de mis logros como gallero, diciéndome puntualmente lo difícil que era lograr poner dos frentes dentro de los cuatro primeros puestos de un campeonato tan grande. Pero sigo adelante en esta bella afición gracias a mi familia que me apoya en todo momento, a mi padre y hermana que desde el cielo me guían, a mis amigos y socios que están siempre presente encada uno de mis logros, y por último a mis seguidores. Estoy seguro que seguiré en esta aficion cosechando éxitos y sobre todo enseñando y dando a conocer a más personas sobre la gallística y nuestro gallo peruano navajero hasta que Dios y la Virgen de Guadalupe así lo permitan. ¡Sólo me queda decirles a seguir criando, forjar sus propias líneas y gallos a la canchaaaa!!!!!!!!!
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="w-100" src="images/biografia/img10.jpg" alt="">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-wrapper mb-30">
                                    <div class="team-img">
                                        <img src="images/biografia/img3.jpeg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h4>Topando gallos en Casma</h4>
                                        <span>Lima </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-wrapper mb-30">
                                    <div class="team-img">
                                        <img src="images/biografia/img4.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h4>Campeonato de la Asociación Huancayo</h4>
                                        <span>Huancayo </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-wrapper mb-30">
                                    <div class="team-img">
                                        <img src="images/biografia/img6.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h4>Campeonato Nacional Círculo 2018</h4>
                                        <span>Lima </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-wrapper mb-30">
                                    <div class="team-img">
                                        <img src="images/biografia/img12.jpg" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h4>Llenándome de fuerzas paar la gran final</h4>
                                        <span>Lima </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-slideshow / end -->
        </div><!-- .block-posts / end -->
    </div><!-- site__body / end -->
    <!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contactos</h5>
                                <div class="footer-contacts__text">Te dejo mis datos para poder comunicarnos.</div>
                                <ul class="footer-contacts__contacts">
                                    <li><i class="footer-contacts__icon fas fa-globe-americas"></i> Direción de domicilio</li>
                                    <li><i class="footer-contacts__icon far fa-envelope"></i> prueba@correo.com</li>
                                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (01) 999919898</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Información</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="trayectoria.php" class="footer-links__link">Trayectoria</a></li>
                                    <li class="footer-links__item"><a href="catalogue.php" class="footer-links__link">Catálogo</a></li>
                                    <li class="footer-links__item"><a href="gallery.php" class="footer-links__link">Galeria</a></li>
                                    <li class="footer-links__item"><a href="contacts.php" class="footer-links__link">Contáctanos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Contenido</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Fotos</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Videos</a></li>
                                    <li class="footer-links__item"><a href="" class="footer-links__link">Artículos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Conexiones</h5>
                                <div class="footer-newsletter__text">También puedes contactarme a través de mis redes sociales</div>
                                <div class="footer-newsletter__text footer-newsletter__text--social">Síguenos en las redes sociales</div><!-- social-links -->
                                <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                    <ul class="social-links__list">
                                        <li class="social-links__item"><a class="social-links__link social-links__link--type--rss" href="" target="_blank"><i class="fas fa-rss"></i></a></li>
                                        <li class="social-links__item"><a class="social-links__link social-links__link--type--youtube" href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-links__item"><a class="social-links__link social-links__link--type--twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div><!-- social-links / end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="totop">
                <div class="totop__body">
                    <div class="totop__start"></div>
                    <div class="totop__container container"></div>
                    <div class="totop__end"><button type="button" class="totop__button"><svg width="13px" height="8px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                            </svg></button></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- site__footer / end -->
    </div><!-- site / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="quickview">
                    <button class="quickview__close" type="button"><svg width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#cross-20"></use>
                        </svg>
                    </button>
                    <div class="product product--layout--quickview" data-layout="quickview">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured">
                                        <button class="product-gallery__zoom">
                                            <svg width="24px" height="24px">
                                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                            </svg>
                                        </button>
                                        <div class="owl-carousel owl-loaded owl-drag" id="product-image">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2656px;">
                                                    <div class="owl-item active" style="width: 531.007px;">
                                                        <div class="product-image product-image--location--gallery">
                                                            <a href="images\navajas\colaDeRata.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                <img class="product-image__img" src="images\navajas\olivo.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 531.007px;">
                                                        <div class="product-image product-image--location--gallery">
                                                            <a href="images\navajas\filipina.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                <img class="product-image__img" src="images\navajas\filipina.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 531.007px;">
                                                        <div class="product-image product-image--location--gallery">
                                                            <a href="images\navajas\mediaO.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                <img class="product-image__img" src="images\navajas\mediaO.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 531.007px;">
                                                        <div class="product-image product-image--location--gallery">
                                                            <a href="images\navajas\olivoCurva.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                <img class="product-image__img" src="images\navajas\olivoCurva.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 531.007px;">
                                                        <div class="product-image product-image--location--gallery">
                                                            <a href="images\navajas\spk.png" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                <img class="product-image__img" src="images\navajas\spk.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__carousel">
                                        <div class="owl-carousel owl-loaded owl-drag" id="product-carousel">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 545px;">
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\olivo.png" class="product-image product-gallery__carousel-item product-gallery__carousel-item--active">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\olivo.png" alt=""></div>
                                                        </a></div>
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\filipina.png" class="product-image product-gallery__carousel-item">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\filipina.png" alt=""></div>
                                                        </a></div>
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\mediaO.png" class="product-image product-gallery__carousel-item">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\mediaO.png" alt=""></div>
                                                        </a></div>
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\olivoCurva.png" class="product-image product-gallery__carousel-item">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\olivoCurva.png" alt=""></div>
                                                        </a></div>
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\spk.png" class="product-image product-gallery__carousel-item">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\spk.png" alt=""></div>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .product__gallery / end -->
                            <!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare">
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare">
                                        <svg width="16px" height="16px">
                                            <use xlink:href="images/sprite.svg#compare-16"></use>
                                        </svg>
                                    </button>
                                </div>
                                <h1 class="product__name">
                                    Navaja Olivo
                                </h1>

                                <div class="product__description">
                                    Esta navaja tiene un diseño ideal para el tipo de pleito
                                    que va y pega sin demora, gallso de aire y buen registro, además
                                    cae perfectamente en gallos que tienen buena conformación.
                                    que va y pega sin demora, gallso de aire y buen registro, además
                                    cae perfectamente en gallos que tienen buena conformación.
                                    cae perfectamente en gallos que tienen buena.
                                </div>
                                <ul class="product__features">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                                <ul class="product__meta">
                                    <li class="product__meta-availability">
                                        Disponibilidad: <span class="text-success">En Stock</span>
                                    </li>
                                    <li>Marca: <a href="">Seperak</a></li>
                                    <li>SKU: 0001</li>
                                </ul>
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar disabled="disabled"-->
                            <div class="product__sidebar">
                                <div class="product__availability">
                                    Disponibilidad: <span class="text-success">En Stock</span>
                                </div>
                                <div class="product__prices">S/100.00</div>
                                <!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option">
                                        <label class="product__option-label">Material</label>
                                        <div class="input-radio-label">
                                            <div class="input-radio-label__list">
                                                <label><input type="radio" name="material">
                                                    <span>Metal</span></label>
                                                <label><input type="radio" name="material">
                                                    <span>Madera</span></label>
                                                <label><input type="radio" name="material">
                                                    <span>Plástico</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group product__option">
                                        <label class="product__option-label" for="product-quantity">Cantidad</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number product__quantity">
                                                    <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                <button class="btn btn-primary btn-lg">
                                                    Agregar al Carrito
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- .product__options / end -->
                            </div>
                            <!-- .product__end -->
                            <div class="product__footer">
                                <div class="product__tags tags">
                                    <div class="tags__list">
                                        <a href="catalogue.php">Ver Catálogo</a>
                                    </div>
                                </div>
                                <div class="product__share-links share-links">
                                    <ul class="share-links__list">
                                        <li class="share-links__item share-links__item--type--like">
                                            <a href="">Like</a>
                                        </li>
                                        <li class="share-links__item share-links__item--type--tweet">
                                            <a href="">Tweet</a>
                                        </li>
                                        <li class="share-links__item share-links__item--type--pin">
                                            <a href="">Pin It</a>
                                        </li>
                                        <li class="share-links__item share-links__item--type--counter">
                                            <a href="">4K</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div><button type="button" class="mobilemenu__close"><svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                    </svg></button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse="" data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="index.php" class="mobile-links__item-link">Inicio</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="trayectoria.php" class="mobile-links__item-link">Trayectoria</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="catalogue.php" class="mobile-links__item-link">Catálogo</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="gallery.php" class="mobile-links__item-link">Mi Biografía</a>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="contacts.php" class="mobile-links__item-link">Contáctanos</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>--> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div><!-- photoswipe / end -->
    <!-- js -->
    <script src="vendor\jquery\jquery.min.js"></script>
    <script src="vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="vendor\owl-carousel\owl.carousel.min.js"></script>
    <script src="vendor\nouislider\nouislider.min.js"></script>
    <script src="vendor\photoswipe\photoswipe.min.js"></script>
    <script src="vendor\photoswipe\photoswipe-ui-default.min.js"></script>
    <script src="vendor\select2\js\select2.min.js"></script>
    <script src="js\number.js"></script>
    <script src="js\main.js"></script>
    <script src="js\header.js"></script>
    <script src="vendor\svg4everybody\svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
</body>

</html>