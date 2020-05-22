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
                                <h7>GALPÓN SEPERAK</h7>
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
                            <h3>GALPÓN SEPERAK</h3>
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
                                    <!--
                                    <div class="indicator indicator--trigger--click"><a href="#" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">Catálogo</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Catálogo de Productos </h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options">
                                    <div class="view-options view-options--offcanvas--always">
                                        <div class="view-options__filters-button">
                                            <!-- <button type="button" class="filters-button"><svg class="filters-button__icon" width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#filters-16"></use>
                                                </svg> <span class="filters-button__title">Filters</span> <span class="filters-button__counter">3</span>
    </button>-->
                                        </div>
                                        <div class="view-options__layout">
                                            <div class="layout-switcher">
                                                <div class="layout-switcher__list"><button data-layout="grid-4-full" data-with-features="false" title="Grid" type="button" class="layout-switcher__button layout-switcher__button--active"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                        </svg></button> <button data-layout="grid-4-full" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                        </svg></button> <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button"><svg width="16px" height="16px">
                                                            <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                        <!-- <div class="view-options__legend">Showing 6 of 98 products
                                    </div>-->
                                        <div class="view-options__divider"></div>
                                        <div class="view-options__control"><label for="">Ordenado por</label>
                                            <div><select class="form-control form-control-sm" name="" id="">
                                                    <option value="">Navajas</option>
                                                    <option value="">Zapatillas</option>
                                                    <option value="">Hilos</option>
                                                </select></div>
                                        </div>
                                        <div class="view-options__control"><label for="">Mostrar</label>
                                            <div><select class="form-control form-control-sm" name="" id="">
                                                    <option value="">12</option>
                                                    <option value="">24</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-view__list products-list" data-layout="grid-4-full" data-with-features="false" data-mobile-grid-columns="2">
                                    <div class="products-list__body">
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">Nuevo</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/olivo.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Olivo</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--hot">último stock</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images\navajas\tipoSeperak9Milimetros.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Seperak 9 milímetros</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">Nuevo</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/tipoSeperak11Milimetros.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Seperak 11 milímetros</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--hot">último stock</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/tipoSeperak13Milimetros.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Seperak de 13 milímetros</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">Nuevo</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/sinTacon.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Sin Tacón</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--sale">Oferta</div>
                                                </div>
                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/olivoCurva.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Olivo Curva</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/olivo.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Olivo</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/mediaO.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Media O</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/mediaLuna.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Media Luna</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/filipina.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Filipina</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/colgada.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Colgada</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions"><button class="product-card__quickview" type="button"><svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg> <span class="fake-svg-icon"></span></button>

                                                <div class="product-card__image product-image"><a href="product.php" class="product-image__body"><img class="product-image__img" src="images/navajas/colaDeRata.png" alt=""></a></div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name"><a href="product.php">Navaja Modelo Cola de Rata</a></div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body"><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>producto con garantía</li>
                                                        <li>Certificado por muchos galleros</li>
                                                        <li>Hecho con productos de alta calidad</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Estado: <span class="text-success">En Stock</span></div>
                                                    <div class="product-card__prices">S/ 100.00</div>
                                                    <div class="product-card__buttons"><button class="btn btn-primary product-card__addtocart" type="button">Agregar</button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Agregar</button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button> <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-view__pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled"><a class="page-link page-link--with-arrow" href="" aria-label="Previous"><svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg></a></li>
                                        <li class="page-item"><a class="page-link" href="">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="">3</a></li>
                                        <li class="page-item"><a class="page-link page-link--with-arrow" href="" aria-label="Next"><svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-sidebar block-sidebar--offcanvas--always">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Filters</div><button class="block-sidebar__close" type="button"><svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg></button>
                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--always" data-collapse="" data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Filters</h4>
                                <div class="widget-filters__list">
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Categories <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            <li class="filter-categories__item filter-categories__item--parent"><svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg> <a href="">Construction &amp; Repair</a>
                                                                <div class="filter-categories__counter">254</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--parent"><svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg> <a href="">Instruments</a>
                                                                <div class="filter-categories__counter">75</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--current"><a href="">Power Tools</a>
                                                                <div class="filter-categories__counter">21</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Drills &amp; Mixers</a>
                                                                <div class="filter-categories__counter">15</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Cordless Screwdrivers</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Screwdrivers</a>
                                                                <div class="filter-categories__counter">30</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Wrenches</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Grinding Machines</a>
                                                                <div class="filter-categories__counter">5</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Milling Cutters</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Electric Spray Guns</a>
                                                                <div class="filter-categories__counter">9</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Jigsaws</a>
                                                                <div class="filter-categories__counter">4</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Jackhammers</a>
                                                                <div class="filter-categories__counter">0</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Planers</a>
                                                                <div class="filter-categories__counter">12</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child"><a href="">Glue Guns</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Categories Alt <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Clothes &amp; PPE</a></li>
                                                            <li class="filter-categories-alt__item" data-collapse-item=""><button class="filter-categories-alt__expander" data-collapse-trigger=""></button> <a href="">Power Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content="">
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Engravers</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Drills</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Wrenches</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Plumbing</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Wall Chaser</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Pneumatic Tools</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Milling Cutters</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item filter-categories-alt__item--open filter-categories-alt__item--current" data-collapse-item=""><button class="filter-categories-alt__expander" data-collapse-trigger=""></button> <a href="">Hand Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content="">
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Screwdrivers</a></li>
                                                                        <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item=""><button class="filter-categories-alt__expander" data-collapse-trigger=""></button> <a href="">Handsaws</a>
                                                                            <div class="filter-categories-alt__children" data-collapse-content="">
                                                                                <ul class="filter-categories-alt__list filter-categories-alt__list--level--3">
                                                                                    <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Power Saws</a></li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Hacksaws</a></li>
                                                                                    <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item=""><button class="filter-categories-alt__expander" data-collapse-trigger=""></button> <a href="">Deep Dive</a>
                                                                                        <div class="filter-categories-alt__children" data-collapse-content="">
                                                                                            <ul class="filter-categories-alt__list filter-categories-alt__list--level--4">
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Submarines</a></li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Silt In Bags</a></li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Black Pearl</a></li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Krakens</a></li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Nautilus</a></li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Mariana Trench</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Chain Saws</a></li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Two-handed Saws</a></li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Other</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Knives</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Axes</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Multitools</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Paint Tools</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Measurement</a></li>
                                                            <li class="filter-categories-alt__item" data-collapse-item=""><button class="filter-categories-alt__expander" data-collapse-trigger=""></button> <a href="">Garden Equipment</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content="">
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Motor Pumps</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Chainsaws</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Electric Saws</a></li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item=""><a href="">Brush Cutters</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Price <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1130">
                                                        <div class="filter-price__slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                            <div class="noUi-base">
                                                                <div class="noUi-connects">
                                                                    <div class="noUi-connect" style="transform: translate(9%, 0px) scale(0.54, 1);"></div>
                                                                </div>
                                                                <div class="noUi-origin" style="transform: translate(-910%, 0px); z-index: 5;">
                                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="500.0" aria-valuemax="1130.0" aria-valuenow="590.0" aria-valuetext="590.00">
                                                                        <div class="noUi-touch-area"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="noUi-origin" style="transform: translate(-370%, 0px); z-index: 4;">
                                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="590.0" aria-valuemax="1500.0" aria-valuenow="1130.0" aria-valuetext="1130.00">
                                                                        <div class="noUi-touch-area"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-price__title">Price: $<span class="filter-price__min-value">590.00</span> – $<span class="filter-price__max-value">1130.00</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Brand <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list"><label class="filter-list__item"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span></label> <label class="filter-list__item"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" checked="checked"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" checked="checked" disabled="disabled"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">WeVALT</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" disabled="disabled"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">Hammer</span></label> <label class="filter-list__item"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span></label> <label class="filter-list__item"><span class="filter-list__input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg> </span></span><span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span></label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Brand <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list"><label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" checked="checked" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">WeVALT</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Hammer</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span></label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item=""><button type="button" class="filter__title" data-collapse-trigger="">Color <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg></button>
                                            <div class="filter__body" data-collapse-content="">
                                                <div class="filter__container">
                                                    <div class="filter-color">
                                                        <div class="filter-color__list"><label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--white" style="color: #fff;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #d9d9d9;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #b3b3b3;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #808080;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #666;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #4d4d4d;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #262626;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #ff4040;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #ff8126;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #ffd440;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color input-check-color--light" style="color: #becc1f;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #8fcc14;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cc5e;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cca0;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #47cccc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #40bfff;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" disabled="disabled"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #3d6dcc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #7766cc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #b852cc;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label> <label class="filter-color__item"><span class="filter-color__check input-check-color" style="color: #e53981;"><label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg> <span class="input-check-color__stick"></span></label></span></label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button> <button class="btn btn-secondary btn-sm">Reset</button></div>
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
                                <div class="footer-contacts__text">Si desea omunicarte con mi persona, te dejo mis datos para poder comunicarnos.</div>
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
                                <div class="footer-newsletter__text">Si deseas comunicarte conmigo lo puedes hacer por medio de las redes</div>
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
                                                                <img class="product-image__img" src="images\navajas\colaDeRata.png" alt="">
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
                                                    <div class="owl-item active" style="width: 99px; margin-right: 10px;"><a href="images\navajas\colaDeRata.png" class="product-image product-gallery__carousel-item product-gallery__carousel-item--active">
                                                            <div class="product-image__body">
                                                                <img class="product-image__img product-gallery__carousel-image" src="images\navajas\colaDeRata.png" alt=""></div>
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
                                    Navaja Cola de Rata
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
                                        Estado: <span class="text-success">En Stock</span>
                                    </li>
                                    <li>Marca: <a href="">Seperak</a></li>
                                    <li>SKU: 0001</li>
                                </ul>
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar disabled="disabled"-->
                            <div class="product__sidebar">
                                <div class="product__availability">
                                    Estado: <span class="text-success">En Stock</span>
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
                                            <!--
                                            <div class="product__actions-item product__actions-item--wishlist">
                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Wishlist">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="product__actions-item product__actions-item--compare">
                                                <button type="button" class="btn btn-secondary btn-svg-icon btn-lg" data-toggle="tooltip" title="Compare">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#compare-16"></use>
                                                    </svg>
                                                </button>
                                            </div>-->
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
                    <li class="mobile-links__item" data-collapse-item="catalogue.php">
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
    <script src="vendor\ps/ 425.00oswipe\photoswipe.min.js"></script>
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