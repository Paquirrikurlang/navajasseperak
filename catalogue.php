<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<link rel="stylesheet" href="css/catalogue.css" />
<link rel="stylesheet" href="css/modal-detalle.css" />
<div class="site">
    <div class="site__body">
        <div id="tablaUsuarios"></div>
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
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__control"><label for="">Ordenado por</label>
                                        <div><select id="cboCategoria" name="cboCategoria" class="form-control form-control-sm" name="" id="">
                                                <option value="1">Navajas</option>
                                                <option value="2">Zapatillas</option>
                                                <option value="3">Hilos</option>
                                            </select></div>
                                    </div>
                                    <div class="view-options__control"><label for="">Mostrar</label>
                                        <div><select id="cboCantidadSolicitada" name="cboCantidadSolicitada" class="form-control form-control-sm" name="" id="">
                                                <option value="12">12</option>
                                                <option value="24">24</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                            <div class="products-view__list products-list" data-layout="grid-4-full" data-with-features="false" data-mobile-grid-columns="2">
                                <div class="products-list__body listCards">


                                </div>
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
            <div class="products-view__pagination">

            </div>
        </div>

    </div>
</div>
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
        </div>
    </div>
</div>
<!-- quickview-modal / end -->
<?php include_once('mvc/view/layouts/footer.php') ?>
<script src="js\paginador.js"></script>
<script src="js\json.js"></script>
<script>
    function solicitudProducto(valor) {
        debugger;
        var cantidad = $("#product-quantity").val();
        var idProducto = valor.id;
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf("/") + 1);
        window.location.href = pathName + "checkout.php?idProducto=" + idProducto + "&cantidad=" + cantidad;
    }
</script>
</html>