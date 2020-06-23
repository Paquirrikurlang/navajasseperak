<html lang="en">

<head>
    <link href="https://sachinchoolur.github.io/lightGallery/static/css/main.css" rel="stylesheet">
    <link href="https://sachinchoolur.github.io/lightGallery/lightgallery/css/lightgallery.css" rel="stylesheet">
</head>

<body class="demos">

    <section class="section highlight pdb0">
        <div class="container-fluid">
            <h2 id="video-without-poster" class="anchor-title mrb15">
                <a href="#video-without-poster">Html5 video gallery with videojs</a>
                <span class="border"></span>
            </h2>
            <p class="lead mrb50">It is easy to integrate <a href="http://www.videojs.com/" target="_blank">videojs</a> with lightgallery. Setup your <code>video</code> tag according to the videojs documentation and pass <code>videojs</code> : <code>true</code> via lightgallery options. You are done!</p>
            <div style="display:none;" id="videojs1">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" poster="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-2.jpg" controls="" preload="none">
                    <source src="http://navajasseperak.com/videos/video1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div style="display:none;" id="videojs2">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls="" preload="none">
                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video2.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div style="display:none;" id="videojs3">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls="" preload="none">
                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video3.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div style="display:none;" id="videojs4">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls="" preload="none">
                    <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video4.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="demo-gallery dark mrb35">
                <ul id="html5-videos-videojs" class="list-unstyled row">
                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-sub-html="<h4>CGI Animated Short HD: Student Academy Award Winning 'PeckPocketed' by Kevin Herron</h4>" data-poster="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-2.jpg" data-html="#videojs1">
                        <a href="">
                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-2.jpg">
                            <div class="demo-gallery-poster">
                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#videojs2" data-poster="../static/img/videos/h-video2-poster.jpg" data-sub-html="<h4>Rollin`Wild - Short Funny Animated Clips - Film Academy BW</h4>">
                        <a href="">
                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg">
                            <div class="demo-gallery-poster">
                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#videojs3" data-poster="../static/img/videos/h-video3-poster.jpg" data-sub-html="<h4>Big Buck Bunny</h4>">
                        <a href="">
                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-v-1.jpg">
                            <div class="demo-gallery-poster">
                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                            </div>
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3 video" data-html="#videojs4" data-poster="../static/img/videos/h-video4-poster.jpg" data-sub-html="<h4>Ninja vs Pirate</h4>">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lightgallery.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-thumbnail.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-video.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-autoplay.js"></script>
    <script src="https://sachinchoolur.github.io/lightGallery/static/js/demos.js"></script>


</body>

</html>