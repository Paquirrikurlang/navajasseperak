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
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="contacts.php">Contactos</a></div>
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
                                                            <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\filipina.png" alt=""></a></div>
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
                                                            <div class="product-image dropcart__product-image"><a href="#" class="product-image__body"><img class="product-image__img" src="images\navajas\filipina.png" alt=""></a></div>
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
                                                    <div class="dropcart__buttons"><a class="btn btn-secondary" href="./cart.php">Ver Carrito</a> <a class="btn btn-primary" href="#checkout.php>Pagar</a></div>
                                                </div>
                                            </div><!-- .dropcart / end -->
                                        </div>
                                    </div>
                                    <!--
                                    <div class=" indicator indicator--trigger--click"><a href="#" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                                                        <use xlink:href="images/sprite.svg#person-20"></use>
                                                                    </svg></span></a>
                                                            <div class="indicator__dropdown">
                                                                <div class="account-menu">
                                                                    <form class="account-menu__form">
                                                                        <div class="account-menu__form-title">Log In to Your Account</div>
                                                                        <div class="form-group"><label for="header-signin-email" class="sr-only">Email address</label> <input id="header-signin-email" type="email" class="form-control form-control-sm" placeholder="Email address"></div>
                                                                        <div class="form-group"><label for="header-signin-password" class="sr-only">Password</label>
                                                                            <div class="account-menu__form-forgot"><input id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="Password"> <a href="" class="account-menu__form-forgot-link">Forgot?</a></div>
                                                                        </div>
                                                                        <div class="form-group account-menu__form-button"><button type="submit" class="btn btn-primary btn-sm">Login</button></div>
                                                                        <div class="account-menu__form-link"><a href="#">Create An Account</a></div>
                                                                    </form>
                                                                    <div class="account-menu__divider"></div><a href="account-dashboard.html" class="account-menu__user">
                                                                        <div class="account-menu__user-avatar"><img src="images\avatars\avatar-3.jpg" alt=""></div>
                                                                        <div class="account-menu__user-info">
                                                                            <div class="account-menu__user-name">Helena Garcia</div>
                                                                            <div class="account-menu__user-email">stroyka@example.com</div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="account-menu__divider"></div>
                                                                    <ul class="account-menu__links">
                                                                        <li><a href="account-profile.html">Edit Profile</a></li>
                                                                        <li><a href="account-orders.html">Order History</a></li>
                                                                        <li><a href="account-addresses.html">Addresses</a></li>
                                                                        <li><a href="account-password.html">Password</a></li>
                                                                    </ul>
                                                                    <div class="account-menu__divider"></div>
                                                                    <ul class="account-menu__links">
                                                                        <li><a href="#">Logout</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    -->
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
                        <nav aria-label="migaja de pan">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Inicio</font>
                                        </font>
                                    </a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>

                                <li class="breadcrumb-item active" aria-current="page">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Carrito de compras</font>
                                    </font>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Carrito de compras</font>
                            </font>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="cart block">
                <div class="container">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column cart-table__column--image">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Imagen</font>
                                    </font>
                                </th>
                                <th class="cart-table__column cart-table__column--product">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Producto</font>
                                    </font>
                                </th>
                                <th class="cart-table__column cart-table__column--price">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Precio</font>
                                    </font>
                                </th>
                                <th class="cart-table__column cart-table__column--quantity">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Cantidad</font>
                                    </font>
                                </th>
                                <th class="cart-table__column cart-table__column--total">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Total</font>
                                    </font>
                                </th>
                                <th class="cart-table__column cart-table__column--remove"></th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="images\navajas\colaDeRata.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="" class="cart-table__product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Navaja para Gallos Modelo Cola de Rata</font>
                                        </font>
                                    </a>
                                    <ul class="cart-table__options">
                                        <li>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Material: Acero</font>
                                            </font>
                                        </li>
                                        <li>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Ao 2020</font>
                                            </font>
                                        </li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 100.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="2">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 200.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="" class="product-image__body"><img class="product-image__img" src="images/navajas/filipina.png" alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="" class="cart-table__product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Navaja para Gallos Modelo Filipina</font>
                                        </font>
                                    </a></td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 100.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="1">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 100.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image"><a href="" class="product-image__body"><img class="product-image__img" src="images/navajas/mediaO.png" alt=""></a></div>
                                </td>
                                <td class="cart-table__column cart-table__column--product"><a href="" class="cart-table__product-name">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Navaja para Gallos Modelo Media O</font>
                                        </font>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 100.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="3">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">S/ 100.00</font>
                                    </font>
                                </td>
                                <td class="cart-table__column cart-table__column--remove"><button type="button" class="btn btn-light btn-sm btn-svg-icon"><svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use>
                                        </svg></button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart__actions">
                        <form class="cart__coupon-form"><label for="input-coupon-code" class="sr-only">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Contraseña</font>
                                </font>
                            </label> <input type="text" class="form-control" id="input-coupon-code" placeholder="Código promocional">
                            <button type="submit" class="btn btn-primary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Aplicar cupón</font>
                                </font>
                            </button></form>
                        <div class="cart__buttons"><a href="index.html" class="btn btn-light">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Continuar comprando </font>
                                </font>
                            </a> <a href="" class="btn btn-primary cart__update-button">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Actualizar carro</font>
                                </font>
                            </a></div>
                    </div>
                    <div class="row justify-content-end pt-5">
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Totales de carrito</font>
                                        </font>
                                    </h3>
                                    <table class="cart__totals">
                                        <thead class="cart__totals-header">
                                            <tr>
                                                <th>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Total parcial</font>
                                                    </font>
                                                </th>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">S/ 400.00</font>
                                                    </font>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__totals-body">
                                            <tr>
                                                <th>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Envío</font>
                                                    </font>
                                                </th>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">S/ 25.00</font>
                                                    </font>
                                                    <div class="cart__calc-shipping"><a href="#">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Calcular costo de envío</font>
                                                            </font>
                                                        </a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Impuesto</font>
                                                    </font>
                                                </th>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">S/ 0.00</font>
                                                    </font>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="cart__totals-footer">
                                            <tr>
                                                <th>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Total</font>
                                                    </font>
                                                </th>
                                                <td>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">S/ 425.00</font>
                                                    </font>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table><a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="checkout.php">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Pagar Pedido</font>
                                        </font>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-posts / end -->


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
            <div class="modal-content"></div>
        </div>
    </div><!-- quickview-modal / end -->
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
                            <!-- <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>-->
                        </div>
                        <!-- <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a></div>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="trayectoria.php" class="mobile-links__item-link">Trayectoria</a>
                            <!-- <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>-->
                        </div>
                        <!-- <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a></div>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="catalogue.php" class="mobile-links__item-link">Catálogo</a>
                            <!-- <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>-->
                        </div>
                        <!-- <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a></div>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="gallery.php" class="mobile-links__item-link">Galería</a>
                            <!-- <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>-->
                        </div>
                        <!-- <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a></div>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title">
                            <a href="contacts.php" class="mobile-links__item-link">Contáctanos</a>
                            <!-- <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>-->
                        </div>
                        <!-- <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a></div>
                                </li>
                            </ul>
                        </div>-->
                    </li>
                </ul>
            </div>


        </div>
    </div><!-- mobilemenu / end -->
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