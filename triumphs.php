<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once('mvc/view/layouts/header.php') ?>
<link rel="stylesheet" href="css/triumphs.css" type="text/css" />
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

                            <li class="breadcrumb-item active" aria-current="page">Videos Campeonatos</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Encuentros Gallísticos</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-">
                    <div class="block">
                        <div class="posts-view">
                            <div class="posts-view__list posts-list posts-list--layout--list">
                                <div class="posts-list__body">
                                    <div class="posts-list__item posts-list__item--triumph">
                                        <div class="post-card post-card--layout--list post-card--size--nl">
                                            <div class="d-md-none post-card__info">
                                                <div class="post-card__category"><a>Coliseo Abrham Wong Cañete</a></div>
                                                <div class="post-card__name"><a>Campeonato Abrham Wong Cañete</a></div>
                                                <div class="post-card__date">2019</div>
                                            </div>
                                            <div class="post-card__image"><a><img src="images/triunfos/t2.jpg" alt=""></a></div>
                                            <div class="post-card__info">
                                                <div class="d-none d-md-flex post-card__category"><a>Coliseo Abrham Wong Cañete</a></div>
                                                <div class="d-none d-md-flex post-card__name"><a>Campeonato Abrham Wong Cañete</a></div>
                                                <div class="d-none d-md-flex post-card__date">2019</div>
                                                <div class="post-card__read-more">
                                                    <div class="product-details-small nav mt-12 product-dec-slider product-details-small--triumphs owl-carousel">
                                                        <a data-toggle="modal" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t8.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details2" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t4.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details3" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t5.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details4" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t6.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details5" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/peleas/p1.png">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="posts-list__item posts-list__item--triumph">
                                        <div class="post-card post-card--layout--list post-card--size--nl">
                                            <div class="d-md-none post-card__info">
                                                <div class="post-card__category"><a>Coliseo Círculo Gallístico</a></div>
                                                <div class="post-card__name"><a>Campeonato Nacional de Gallos a Navaja</a></div>
                                                <div class="post-card__date">2019</div>
                                            </div>
                                            <div class="post-card__image"><a><img src="images/triunfos/t3.png" alt=""></a></div>
                                            <div class="post-card__info">
                                                <div class="d-none d-md-flex post-card__category"><a>Coliseo Círculo Gallístico</a></div>
                                                <div class="d-none d-md-flex post-card__name"><a>Campeonato Nacional de Gallos a
                                                        Navaja</a></div>
                                                <div class="d-none d-md-flex post-card__date">2019</div>
                                                <div class="post-card__read-more">
                                                    <div class="product-details-small nav mt-12 product-dec-slider product-details-small--triumphs owl-carousel">
                                                        <a data-toggle="modal" class="active" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t4.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details2" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">

                                                            <img src="images/triunfos/t8.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details3" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t6.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details4" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/peleas/p1.png">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details5" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t5.jpg">

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="posts-list__item posts-list__item--triumph">
                                        <div class="post-card post-card--layout--list post-card--size--nl">
                                            <div class="d-md-none post-card__info">
                                                <div class="post-card__category"><a>Colise de Ayacucho</a></div>
                                                <div class="post-card__name"><a>Campeonato Nacional de Gallos
                                                        Ayacucho</a></div>
                                                <div class="post-card__date">2019</div>
                                            </div>
                                            <div class="post-card__image"><a><img src="images/triunfos/t7.jpg" alt=""></a></div>
                                            <div class="post-card__info">
                                                <div class="d-none d-md-flex post-card__category"><a>Colise de Ayacucho</a></div>
                                                <div class="d-none d-md-flex post-card__name"><a>Campeonato Nacional de Gallos
                                                        Ayacucho</a></div>
                                                <div class="d-none d-md-flex post-card__date">2019</div>
                                                <div class="post-card__read-more">
                                                    <div class="product-details-small nav mt-12 product-dec-slider product-details-small--triumphs owl-carousel">
                                                        <a data-toggle="modal" class="active" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t4.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details2" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/peleas/p1.png">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details3" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t8.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details4" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t5.jpg">
                                                        </a>
                                                        <a data-toggle="modal" href="#pro-details5" data-target="#homeVideo" class="img-responsive ver_video" onclick="playVid()">
                                                            <img src="images/triunfos/t5.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script src="assets/js/popper.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(main);
    var vid = document.getElementById("gossVideo");

    function playVid() {
        debugger;
        vid.play();
    }

    function pauseVid() {
        vid.pause();
    }

    function main() {
        $('#btn-msg-face').on('click', function() {
            debugger;
            PopupCenter(this.href, this.target, '350', '450');
            return false;
        });
    }

    function PopupCenter(url, title, w, h) {
        debugger;
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement
            .clientWidth : screen.width;
        height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement
            .clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top +
            ', left=' + left);

        if (window.focus) {
            newWindow.focus();
        }
    }
</script>

</html>