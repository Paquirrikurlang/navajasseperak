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
                                    <font style="vertical-align: inherit;">Revisa tu Solicitud</font>
                                </font>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Revisa tu Solicitud</font>
                        </font>
                    </h1>
                </div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="alert alert-lg alert-primary">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">¿Soy Cliente? </font>
                            </font><a href="#">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ingesa tus datos para que seas cliente
                                        nuestro</font>
                                </font>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Datos del solicitante (Opcional)
                                        </font>
                                    </font>
                                </h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-first-name">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Nombre</font>
                                            </font>
                                        </label> <input type="text" class="form-control" id="checkout-first-name" placeholder="Nombre"></div>
                                    <div class="form-group col-md-6"><label for="checkout-last-name">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Apellido</font>
                                            </font>
                                        </label> <input type="text" class="form-control" id="checkout-last-name" placeholder="Apellido"></div>
                                </div>
                                <div class="form-group"><label for="checkout-street-address">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Dirección</font>
                                        </font>
                                    </label> <input type="text" class="form-control" id="checkout-street-address" placeholder="Dirección"></div>
                                <div class="form-group"><label for="checkout-city">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Ciudad</font>
                                        </font>
                                    </label> <input type="text" class="form-control" id="checkout-city"></div>
                                <div class="form-group"><label for="checkout-state">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Distrito</font>
                                        </font>
                                    </label> <input type="text" class="form-control" id="checkout-state"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-email">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Dirección de correo
                                                    electrónico</font>
                                            </font>
                                        </label> <input type="email" class="form-control" id="checkout-email" placeholder="Dirección de correo electrónico"></div>
                                    <div class="form-group col-md-6"><label for="checkout-phone">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Teléfono</font>
                                            </font>
                                        </label> <input type="text" class="form-control" id="checkout-phone" placeholder="Teléfono"></div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Detalle de la solicitud</font>
                                    </font>
                                </h3>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                        <tr>
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Producto</font>
                                                </font>
                                            </th>
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Total</font>
                                                </font>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody class="checkout__totals-products">
                                        <tr>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font id="nombreProducto" style="vertical-align: inherit;">
                                                    </font>
                                                </font>
                                            </td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">S/ 100.00</font>
                                                </font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Unidades Solicitadas
                                                    </font>
                                                </font>
                                            </td>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font id="cantidadProducto" style="vertical-align: inherit;">
                                                    </font>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                        <tr>
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Total parcial</font>
                                                </font>
                                            </th>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font id="totalParcial" style="vertical-align: inherit;"></font>
                                                </font>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Envío</font>
                                                </font>
                                            </th>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">S/ 00.00</font>
                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                        <tr>
                                            <th>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Total</font>
                                                </font>
                                            </th>
                                            <td>
                                                <font style="vertical-align: inherit;">
                                                    <font id="totalFinal" style="vertical-align: inherit;"></font>
                                                </font>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked"> <span class="input-radio__circle"></span>
                                                    </span></span><span class="payment-methods__item-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Transferencia
                                                            bancaria directa</font>
                                                    </font>
                                                </span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Realice su pago
                                                            directamente en nuestra cuenta bancaria. </font>
                                                        <font style="vertical-align: inherit;">Su pedido no se
                                                            enviará hasta que los fondos se hayan liquidado en
                                                            nuestra cuenta.</font>
                                                    </font>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Comunicación directa
                                                        </font>
                                                    </font>
                                                </span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Comunícate al número
                                                            999 919 898 para acordarlo personalmente</font>
                                                    </font>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkout__agree form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-terms"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg> </span></span><label class="form-check-label" for="checkout-terms">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">He leído y acepto los </font>
                                            </font><a target="_blank" href="terms-and-conditions.html">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">términos y condiciones
                                                    </font>
                                                </font>
                                            </a>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"> del sitio web </font>
                                                <font style="vertical-align: inherit;">*</font>
                                            </font>
                                        </label></div>
                                </div><button type="submit" class="btn btn-primary btn-xl btn-block">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Guardar solicitud</font>
                                    </font>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('mvc/view/layouts/footer.php') ?>
<script src="js\solicitudProducto.js"></script>

</html>