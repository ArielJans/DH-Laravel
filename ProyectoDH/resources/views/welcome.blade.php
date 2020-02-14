@extends('layouts/plantilla')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <header>
        <img class="img-header" src="images/fondo-web.jpg" alt="">
    </header>
    <body>
        <main>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    
            <div class="container my-5">
                    
                
                <div class="row d-flex align-items-center my-5 py-5">
                    <div class="col-md-7">
                        <h2 class="display-4">Título del beneficio 1. <br><span class="text-muted">Sub titulo.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                            euismod
                            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                            ac cursus
                        commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class=" img-fluid mx-auto" src="images/cards1.png" alt="Generic placeholder image1111111">
                    </div>
                </div>
    
                <hr class="" id="beneficio2">
    
                <div class="row d-flex align-items-center my-5 py-5">
                    <div class="pos-tex-izq col-md-7 push-md-5">
                        <h2 class="display-4">Título del beneficio 2. <br><span class="text-muted">Sub titulo.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                            euismod
                            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                            ac cursus
                        commodo.</p>
                    </div>
                    <div class=" pos-img-izq col-md-5 pull-md-7">
                        <img class=" img-fluid mx-auto" src="images/cards2.png" alt="Generic placeholder image">
                    </div>
                </div>
    
                <hr class="" id="beneficio3">
    
                <div class="row d-flex align-items-center my-5 py-5">
                    <div class="col-md-7">
                        <h2 class="display-4">Título del beneficio 3. <br><span class="text-muted">Sub titulo.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                            euismod
                            semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus
                            ac cursus
                        commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class=" img-fluid mx-auto" src="images/cards3.png" alt="Generic placeholder image">
                    </div>
                </div>
            </div>
            <!--/////////////////////////// FIN DESCRIPCION ///////////////////////////////-->
    
            <section class="call-to-action">
                <h2 class="tex-cta">Empeza a jugar ahora!!</h2>
                <button type="button" class="btn btn-cta btn-primary btn-lg btn-warning"><a href="login.php">COMENZAR</a></button>
            </section>
    
        </div>
    </main>
    </body>
</html>
