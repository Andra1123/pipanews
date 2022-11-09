<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/stlye.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(./Img/bg1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 1100px;
            width: 100%;
            padding: 0 auto;
            box-sizing: border-box;
            text-align: center;
        }

        header {
            margin: 30px 0;
            overflow: hidden;
        }

        .gallery {
            margin: 50px 0;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 25px;
        }

        h1 {
            color: aliceblue;
        }

        p {
            color: aliceblue;
        }

        .gallery img {
            height: 240px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./Img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="About.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Galery.html">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Daftar-Artikel.html">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd" aria-controls="offcanvasend">List Game</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel" style="background-image: url(./Img/bgabout.png);">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasEndLabel">List Game</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: aqua;"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="row row-cols-2">
                <div class="col mb-2" id="list-game">
                    <a href="https://play.google.com/store/apps/details?id=com.mobile.legends" target="_blank">
                        <img src="./Img/ml.jpg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="https://store.steampowered.com/app/389730/TEKKEN_7/" target="_blank">
                        <img src="./Img/tekken7.jpg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="http://www.pubgmobile.com/id/home.shtml" target="_blank">
                        <img src="./Img/PUBG MBL.jpeg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="https://www.callofduty.com/warzone" target="_blank">
                        <img src="./Img/codm.jpg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="https://www.dota2.com/home" target="_blank">
                        <img src="./Img/dota2.jpg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="https://www.ea.com/games/apex-legends/apex-legends-mobile" target="_blank">
                        <img src="./Img/APEX.jpg" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href=" https://ff.garena.com/" target="_blank">
                        <img src="./Img/free fire.png" alt="">
                    </a>
                </div>
                <div class="col mb-2" id="list-game">
                    <a href="https://genshin.hoyoverse.com/m/en//" target="_blank">
                        <img src="./Img/gensin impact.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="header">
            <img src="Img/logo.png" height="120" width="120" class="bg-dark rounded-circle bg-black">
            <h1>My Galery</h1>
            <p>This is My Galery</p>
        </div>
        <div class="gallery">
            <img src="Img/juaracod.jpg">
            <img src="Img/pemainpubg.jpeg">
            <img src="Img/dota2 juara.jpg">
            <img src="Img/juaratakken.png">
            <img src="Img/juaraml.webp">
            <img src="Img/juaraapex.jpg">

        </div>
        <div class="footer">
            <h2>Contact Me</h2>
            <div class="social">
                <a class="fb" href="#facebook"></a>
                <a class="wa" href="#whatsApp"></a>
                <a class="twt" href="#twiter"></a>
                <a class="ig" href="#instagram"></a>
            </div>
        </div>
    </div>





    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>