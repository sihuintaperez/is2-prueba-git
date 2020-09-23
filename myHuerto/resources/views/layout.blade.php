<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>@yield('title', 'MyHuerto')</title>
    <link rel="stylesheet" href="/css/CssHuerto.css">
    <script src="/js/javascr.js"></script>
</head>
<body>
    <header class="principal">
        <span id="titulo">MyHuerto</span>
        @section('view')
            
        @show
    </header>
    <div class="slider" id="main-slider">
    <div class="slider-wrapper">
        <img src="/img/slide1.png" alt="First" class="slide" />
        <img src="/img/slide2.png" alt="Second" class="slide" />
        <img src="/img/slide3.png" alt="Third" class="slide" />
    </div>
    </div>  
    <div id="containerp">
        <div id="subtitle"><a> Nuestros Productos</a></div>

        <div class="container">
            <img src="/img/girasol.jpg"  class="image">
            <div class="overlay">

                <div class="text"><a>Girasoles</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/rosasRojas.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Rosas Rojas</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/azada.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Azada</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/manguera.jpg"  class="image" >
            <div class="overlay">
                <div class="text"><a>Manguera</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/regadera.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Regadera</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/serrucho.jpg"  class="image" >
            <div class="overlay">
                <div class="text"><a>Serrucho de Poda</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/tijera.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Tijera de poda</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/fresa.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Semilla de fresa</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/bonsai.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Bonsai</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/guantes.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Guantes</a></div>
            </div>
        </div>
    </div>
    <div><footer id="pie"><small>Derechos reservados © 2018-2018</footer>
</body>
</html>