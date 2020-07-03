<link href="https://sachinchoolur.github.io/lightGallery/static/css/main.css" rel="stylesheet">
<link href="https://sachinchoolur.github.io/lightGallery/lightgallery/css/lightgallery.css" rel="stylesheet">
<link href="https://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link rel="stylesheet" href="css/shared.css" type="text/css" />
<link rel="stylesheet" href="css/videos.css" type="text/css" />

<body>
    <?php include_once('mvc/view/layouts/header.php') ?>
    <main class="mx-auto p-0">
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
        <div class="container container__seccion__imagenes">
            <div class="row">
                <div class="col-12">
                    <div id="videos" class="lista__galeria__videos">
                    </div>
                </div>
            </div>
        </div>
        <div class="products-view__pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                        <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                        </svg>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="">2 <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                        <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <?php include_once('mvc/view/layouts/footer.php') ?>
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