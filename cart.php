<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<div class="site">
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
                                        <font style="vertical-align: inherit;">Navaja para Gallos Modelo Cola de Rata
                                        </font>
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
                                <div class="product-image"><a href="" class="product-image__body"><img class="product-image__img" src="images/navajas/filipina.png" alt=""></a>
                                </div>
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
                                                            <font style="vertical-align: inherit;">Calcular costo de
                                                                envío</font>
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
</div>
<?php include_once('mvc/view/layouts/footer.php') ?>

</html>