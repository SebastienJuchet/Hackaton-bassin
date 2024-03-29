<!doctype html>
<html lang="fr">
<head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"
    >

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-black">
            <div class="container-fluid">
                <div class="mx-auto">
                    <a class="navbar-brand text-white fs-1" href="#">
                        <img src="images/logo.png" alt="" width="50" height="auto" class="d-inline-block align-text-top me-2">
                        SpeedZick</a>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <img class="buttonLogo border rounded-circle shadow-lg p-3 mb-5 bg-white" id="button" src="images/run.png" width="150" height="auto" alt="">
            <audio id="audio"></audio>
        </div>
        <!-- End Navbar -->
<!-- progressbar -->
        <div class="container d-flex justify-content-center">
            <div class="col-10 text-center fs-5">
                <label for="level" class="form-label">Choisissez votre vitesse de démarrage</label>
                <div id="value-level">9-12 km/h</div>
                <div id="test"></div>
                <input type="range" class="form-range my-3" min="0" max="5" id="level">
            </div>
        </div>

        <!-- End progressbar -->
        <div id="bars">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        .
        <!-- Map with button GO -->
        <div class="container d-flex justify-content-center fs-4">
            <div class="text-center text-light" id="speed"></div>
        </div>
        <div class="d-flex justify-content-center rounded mt-3 mb-5">
            <div id='map'></div>
        </div>
        <!-- End Map with button GO -->
        <!-- Player -->
        <!-- End Player -->

        <!-- Footer -->
        <footer class="d-flex justify-content-between align-items-center text-secondary bg-primary">
            <ul class="nav col-md-4 justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-center text-secondary">&copy; 2021 SpeedZik Corporate</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-center text-secondary">&copy; Wild Team : <br>Sebastien - Gregoire - Joffrey - Aurélien</a></li>
            </ul>
        </footer>
        <!-- End Footer -->
        <script>
            // TO MAKE THE MAP APPEAR YOU MUST
            // ADD YOUR ACCESS TOKEN FROM
            // https://account.mapbox.com
            mapboxgl.accessToken = 'pk.eyJ1IjoiYnJvd2x5NDAiLCJhIjoiY2s2OTQ1b3AwMGIxcjNrcWo0MXdtZTRseCJ9.goBmMVra4yIQgexoPzL3fw';
            const map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/streets-v11', // style URL
                center: [-0.56, 44.84], // starting position [lng, lat]
                zoom: 9 // starting zoom
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="scripts/speed.js"></script>
<script src="scripts/index.js"></script>
<script src="scripts/geoloc.js"></script>
<script src="scripts/geo.js"></script>
<script src="scripts/index.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/music.js"></script>
</body>
</html>