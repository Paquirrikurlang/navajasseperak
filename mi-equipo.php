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
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg></li>
                            <li class="breadcrumb-item active" aria-current="page">Mi Equipo</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Mi Equipo</h1>
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
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                        sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                                        mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien
                                        ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae,
                                        ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros
                                        ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis
                                        pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                                        neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam
                                        dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title text-center mb-60">
                        <p class="text-left w-100">
                            Este es el equipo que me acompaña siempre para los trabajos con los gallos
                        </p>
                    </div>
                    <div class="row mt-24">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="images/equipo/canetecampeon3.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Alberto mi galponero</h4>
                                    <span>Campeonato Cañete </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="images/equipo/canetecampeon2.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Tito mi mano derecha</h4>
                                    <span>Campeonato Cañete </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="images/equipo/central.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Mi padre que siempre está a mi lado</h4>
                                    <span>Campeonato xxxxx </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="images/equipo/mama.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Mi apoyo, mi madre</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
    </div>
</div>
<?php include_once('mvc/view/layouts/footer.php') ?>

</html>