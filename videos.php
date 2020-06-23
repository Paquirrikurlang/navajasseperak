<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://sachinchoolur.github.io/lightGallery/static/css/main.css" rel="stylesheet">
    <link href="https://sachinchoolur.github.io/lightGallery/lightgallery/css/lightgallery.css" rel="stylesheet">
</head>

<body>
    <div class="site">
        <?php include_once('mvc/view/layouts/header.php') ?>
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">Videos</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Videos</h1>
                    </div>
                </div>
            </div>
            <!-- .block-slideshow -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-sidebar-area pr-30">
                            <div class="products-view__options">
                                <div class="view-options view-options--offcanvas--always">
                                    <div class="view-options__divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="container-fluid">
                            <div style="display:none;" id="video1">
                                <video class="lg-video-object lg-html5" controls="" preload="none">
                                    <source src="http://navajasseperak.com/videos/video1.mp4" type="video/mp4">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Su navegador no admite video HTML5.
                                        </font>
                                    </font>
                                </video>
                            </div>
                            <div style="display:none;" id="video2">
                                <video class="lg-video-object lg-html5" controls="" preload="none">
                                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video2.mp4" type="video/mp4">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Su navegador no admite video HTML5.
                                        </font>
                                    </font>
                                </video>
                            </div>
                            <div style="display:none;" id="video3">
                                <video class="lg-video-object lg-html5" controls="" preload="none">
                                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video3.mp4" type="video/mp4">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Su navegador no admite video HTML5.
                                        </font>
                                    </font>
                                </video>
                            </div>
                            <div style="display:none;" id="video4">
                                <video class="lg-video-object lg-html5" controls="" preload="none">
                                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video4.mp4" type="video/mp4">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Su navegador no admite video HTML5.
                                        </font>
                                    </font>
                                </video>
                            </div>
                            <div class="demo-gallery dark mrb35">
                                <ul id="html5-videos" class="list-unstyled row">
                                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-poster="../static/img/videos/h-video1-poster.jpg" data-sub-html="<h4>CGI Animated Short HD: Student Academy Award Winning 'PeckPocketed' by Kevin Herron</h4>" data-html="#video1">
                                        <a href="">
                                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-2.jpg">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#video2" data-poster="../static/img/videos/h-video2-poster.jpg" data-sub-html="<h4>Rollin`Wild - Short Funny Animated Clips - Film Academy BW</h4>">
                                        <a href="">
                                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#video3" data-poster="../static/img/videos/h-video3-poster.jpg" data-sub-html="<h4>Big Buck Bunny</h4>">
                                        <a href="">
                                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-v-1.jpg">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#video4" data-poster="../static/img/videos/h-video4-poster.jpg" data-sub-html="<h4>Ninja vs Pirate</h4>">
                                        <a href="">
                                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-v-2.jpg">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- .block-slideshow / end -->
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lightgallery.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-thumbnail.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-video.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-autoplay.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/static/js/demos.js"></script>
    <script src="js\detalleMultimedia.js"></script>
    </div>


</body>

</html>