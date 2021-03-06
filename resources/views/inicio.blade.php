@extends('layaouts.plantilla')


@section('title')
    Inicio
@endsection

@section("header")
     <div class="header">
        <div class="divLogo">
            <a class ="Link_Header" href="{{ route('home') }}">
                <img alt="Logo" height="60" src="Imagenes/LOGO1.1.svg" width="60">Wallet</a>
        </div>
        @guest
            <div class="divRegistrarse">
                <a class="Link_Header" href="{{ route('sign') }}">Registrarse</a>
            </div>
            <a class="divIngresar" href="{{ route('login') }}">Ingresar</a>
        @else
            <div class="divRegistrarse">
                <a class="Link_Header" href="{{ route('logout') }} ">Salir</a>
            </div>
            <a class="divIngresar" href=" {{ route('dashboard') }} " >{{ Auth::user()->usuario }}</a>
        @endguest
    </div>
    <nav class="navbar-light navbar-toggleable-sm">
        <div class="navbar-header">
            <div class="divLogo">
                <a class ="Link_Header" href="http://localhost/YeiWallet/public/">
                    <img alt="Logo" height="40" src="Imagenes/LOGO1.1.svg" width="40">Wallet</a>
            </div>
            <button class="navbar-toggler navbar-toggler-right menu-icon" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="nav navbar-nav navbar-right">
                @guest
                    <a class="nav-item nav-link" href="{{ route('login') }}">Ingresar</a>
                    <a class="nav-item nav-link" href="{{ route('sign') }}">Registrarse</a>
                @else
                    <a class="nav-item nav-link" href=" {{ route('dashboard') }} " >{{     
                    Auth::user()->usuario }}
                    </a>
                    <a class="nav-item nav-link" href="{{ route('logout') }} ">Salir</a>
                @endguest
            </div>
        </div>
    </nav>
@endsection

@section("body")
    
    <section class="splash">
        <article>
            <div id="espacio">
                <canvas id="lineas" style="display:block;"></canvas>
                <div class="divAlgo" id="centrado_CryptInfor">
                    Conozca con cuáles criptomonedas trabajamos
                    <a href="#Seccion_crypt" class="class_a_href">
                        <h4>Aprenda más</h4>
                    </a>
                </div>
            </div>
        </article>
    </section>

    <div class="row">
        <div class="divBen">
            Más sobre nuestra Wallet
        </div>

        <div class="divInfo col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="divInformacion" data-aos="fade-right" data-aos-duration="2000">
                <img alt="Social" height="200" src="Imagenes/Transferencia.svg" width="100%" data-aos="fade-down" data-aos-duration="3000">
                <p>
                    Transfiere dinero a tu familia, amigos, de forma sencilla y rápida
                </p>
            </div>
        </div>

        <div align="center" class="divInfo col-xs-12 col-sm-12 col-md-4 col-lg-4" >
            <div class="divInformacion" data-aos="fade-down" data-aos-duration="2000">
                <img alt="Seguridad" height="200" src="Imagenes/Seguridad.svg" width="100%" data-aos="fade-down" data-aos-duration="3000">
                <p>
                    Al implementar 'BlockChain' todas tus transacciones están seguras
                </p>
            </div>
        </div>

        <div class="divInfo col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center">
            <div class="divInformacion" data-aos="fade-left" data-aos-duration="2000">
                <img alt="Comodidad" height="200" src="Imagenes/Portabilidad.svg" width="100%" data-aos="fade-down" data-aos-duration="3000">
                <p>
                    Accede a nuestra página desde cualquiera de tus dispositivos
                </p>
            </div>
        </div>

        <!-- DIV DONDE SALE LA INFORMACION DE QUE CRYPTOMONEDA USAMOS-->

        <div class="divInfoCrypt" id="Seccion_crypt" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400">
            <p>¿Con cuáles Criptomonedas trabajamos?</p>
            <div class="divTxtCrypt col-xs-12 col-sm-12 col-md-6"
             data-aos="zoom-out-right" data-aos-duration="2000" data-aos-delay="400">
                Trabajamos con Bitcoin la criptomoneda más utilizada a nivel internacional. Además nuestro
                equipo está implementando monedas que estan teniendo un rapido crecimiento en el mercado como son Litecoin y Dogecoin, y seguimos trabajando para incorporar mas monedas en un futuro proximo.
            </div>

            <div class="divImgCrypt col-xs-12 col-sm-12 col-md-6">
                <img src="Imagenes/bitlogo.svg" width="200" height="200" style="margin-bottom: 30px;" data-aos="flip-left" data-aos-duration="2000">
                <img src="Imagenes/dogelogo.png"
                 width="250" height="250" style="margin-bottom: 30px;" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="500">
                <img src="Imagenes/litelogo.svg"
                 width="200" height="200" style="margin-bottom: 30px;" data-aos="flip-right" data-aos-duration="2000" data-aos-delay="500">
            </div>
        </div>
    </div>

    @section("footer")
        <div class="row">
            <div class="footer col-xs-12 col-sm-12 col-md-12">
                <h1 style="font-family:Roboto; margin-top:15px;">YeiWallet</h1>
                <div class="row">
                    <div class="texto_footer col-xs-12 col-sm-4 col-md-4">
                        <p style="font-size:20px; font-weight:bold;">Acerca del monedero</p>
                        <p>Empezamos como un proyecto universitario y queremos seguir como un        proyecto que ayude a las personas a tener una forma de almacenar y
                        de transferir sus activos en internet de una forma rápida y sencilla.
                        </p>
                    </div>
            
                    <div class="div_redes_sociales col-xs-12 col-sm-8 col-md-8">
                        <p>Siguenos en nuestras redes sociales</p>
                        <a href="">
                        <div id="facebook" class="boton_wallets col-xs-12-col-sm-4 col-md-4">
                            <img src="Imagenes/facebook.svg" width="35">Facebook</div>
                        </a>
                         <a href="https://www.twitter.com/yeiwallet">
                        <div id="twitter" class="boton_wallets col-xs-12-col-sm-4 col-md-4">
                            <img src="Imagenes/twitter.svg" width="40">Twitter</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@endsection











