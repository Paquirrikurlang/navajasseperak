<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<div class="site">
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg></li>
                            <li class="breadcrumb-item active" aria-current="page">Contactos</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Contactos</h1>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="card mb-0">
                    <div class="card-body contact-us">
                        <div class="contact-us__container">
                            <div class="row">
                                <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                    <h4 class="contact-us__header card-title">Nuestra Dirección</h4>
                                    <div class="contact-us__address">
                                        <p>Av. XXXXXX<br>Email: fseperak@ejemplo.com<br>Número Celular: 999919898</p>
                                        <p><strong>Comentario</strong><br>
                                            Si tines alguna sugerencia o comentario házmelo saber enviando un correo
                                            para poder ayudarte, si deseas información de algún producto puedes
                                            comunicarte conmigo
                                            por medio de mi número celular o por coreo.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h4 class="contact-us__header card-title">Déjame un mensaje</h4>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6"><label for="form-name">Tu nombre</label>
                                                <input type="text" id="form-name" class="form-control" placeholder="Tu nombre"></div>
                                            <div class="form-group col-md-6"><label for="form-email">Email</label>
                                                <input type="email" id="form-email" class="form-control" placeholder="Email Address"></div>
                                        </div>
                                        <div class="form-group"><label for="form-subject">Tema</label> <input type="text" id="form-subject" class="form-control" placeholder="Tema">
                                        </div>
                                        <div class="form-group"><label for="form-message">Mensaje</label> <textarea id="form-message" class="form-control" rows="4"></textarea></div><button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                    </form>
                                </div>
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