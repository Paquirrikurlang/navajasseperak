<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://sachinchoolur.github.io/lightGallery/static/css/main.css" rel="stylesheet">
    <link href="https://sachinchoolur.github.io/lightGallery/lightgallery/css/lightgallery.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">

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

                    <section class="section highlight pdb0">
                        <div class="container-fluid" id="videos">

                        </div>
                    </section>
                </div>
            </div>
            <!-- .block-slideshow / end -->
        </div>
    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/LoadVideos.js"></script>
    <script src="https://vjs.zencdn.net/4.12/video.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/static/js/transition.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/static/js/collapse.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lightgallery.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-fullscreen.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-thumbnail.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-video.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-autoplay.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/static/js/demos.js"></script>



</body>

</html>