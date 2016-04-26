<!DOCTYPE HTML>
<!--
Dopetrope by HTML5 UP
html5up.net | @n33co
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Mundocente</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap-responsive.min.css" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="right-sidebar">
<div id="page-wrapper">

<!-- Header -->
    <div id="header-wrapper">
        <div id="header">
            <!-- Nav -->
                 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
             <div class="row">
                <div class="2u 12u(mobile)">
                    <a href="#"><img  src="images/logo.jpg"></a>
                </div>
                <div class="8u 12u(mobile)">
                </div>              
                <div class="2u 12u(mobile)">
                    <form class="form login-form">
                        <input type="text" name="query" placeholder="Búsqueda" />
                        <a href="#">Búsqueda avanzada</a>
                        <br>
                    </form>
                </div>
            </div>  

            <div class="formu navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    
                        <li class="current"><a href="/">Home</a></li>
                        <li><a href="/">Publicaciones</a></li>  
                        <li><a href="/teacher_call">Convocatorias docente</a></li>
                        <li><a href="/scientific_magazine">Revistas científicas</a></li>
                        <li><a href="/academic_event">Eventos académicos</a></li>
                    
               
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="register"><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


        </div>
            <!-- Nav -->
        </div>      
        </div>
   

<!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row">

                <div class="8u 12u(mobile)">
                    <article class="box post">
                        <div id = "slider">
                            <div class ="elemento">
                                <img src="images/pic08.jpg">
                            </div>
                            <div class ="elemento">
                                <img src="images/pic09.jpg">
                            </div>
                            <div class ="elemento">
                                <img src="images/pic10.jpg">
                            </div>
                        </div>
                    </section>
                  <div class="information">
                @yield('content')
                    </div>
                </div>
                 @if (Auth::guest())
                <div class="4u 12u(mobile)">

                <section class="box">
                            <form class="form login-form" role="form" method="POST" action="{{ url('/login') }}">
                             {!! csrf_field() !!}
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                 
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuario"/>
                                     @if ($errors->has('username'))
                                             <span class="help-block">
                                                 <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                         @endif
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                 
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" />
                                    @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <center><label class="checkbox inline">
                                </label><input type="checkbox" name="remember">Recordar</center><br>
                                <center>
                                    <ul class="social">
                                        <li><button type="submit" class="btn2 btn-default">Ingresar</button></li>
                                        <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                                        <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
                                    </ul>
                                </center>
                                <HR>
                                <center><a class="forgot btn-link" href="{{ url('/password/reset') }}">¿Olvido su contraseña?</a></center>
                            </form>
                        <hr >       
                    </section>

                </div>
                @endif

            </div>
        </div>
    </div>

<div id="header-wrapper">
    <div id="header">
        <!-- Intro -->
<section id="intro" class="container">
    <div class="row">
        <div class="4u 12u(mobile)">
            <section class="first">
                <i class="icon featured fa-suitcase"></i>
                <header>
                    <h2>Convocatorias docente</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                <br>
                <a href="/teacher_call" class="button big">Ver más</a>
            </section>
        </div>
        <div class="4u 12u(mobile)">
            <section class="middle">
                <i class="icon featured alt fa-edit"></i>
                <header>
                    <h2>Revistas científicas</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                <br>
                <a href="/scientific_magazine" class="button alt big">Ver más</a>
            </section>
        </div>
        <div class="4u 12u(mobile)">
            <section class="last">
                <i class="icon featured alt2 fa-graduation-cap"></i>
                <header>
                    <h2>Eventos académicos</h2>
                </header>
                <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                <br>
                <a href="/academic_event" class="button alt2 big">Ver más</a>
            </section>
        </div>
    </div>
</section>

    </div>
</div>

<!-- Footer -->
    <div id="footer-wrapper">
        <section id="footer" class="container">

            <div class="row">
                <div class="6u 12u(mobile)">
                    <section>
                        <header>                
                            <h2 class="major">Contacto</h2>
                        </header>
                        <ul class="social">
                            <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                            <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                            <li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
                        </ul>
                        <ul class="contact">
                            <li>
                                <h3>Dirección</h3>
                                <p>
                                    Calle 18 # 7-43 Tunja/Boyacá
                                </p>
                            </li>
                            <li>
                                <h3>Mail</h3>
                                <p><a href="#">mundocente@mundocente.com</a></p>
                            </li>
                            <li>
                                <h3>Telefono</h3>
                                <p>(800) 000-0000</p>
                            </li>
                            <br>
                            <p style="text-align: center;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d717.9141082609934!2d-73.36008869887702!3d5.530217782425579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7dd297720937%3A0xae08a35864347103!2sCl.+18+%237-43%2C+Tunja%2C+Boyac%C3%A1!5e1!3m2!1ses!2sco!4v1460131644457" width=auto height=auto frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                        </ul>
                    </section>
                </div> 
                <div class="6u 12u(mobile)">
                    <header>
                        <h2 class="major">Sugerencias</h2>
                    </header>           
                    <form method="post" action="#">
                        <div class="field">
                            <h7>Nombre</h7>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field">
                            <h7>Email</h7>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="field">
                            <h7>Mensaje</h7>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                        <br>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar mensaje" /></li>
                        </ul>

                    </form>
                </div>
                
            </div>
            <div class="row">
                <div class="12u">

                    <!-- Copyright -->
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; Copyright 2016</li><li>Diseño: <a href="http://html5up.net">MunDocente</a></li>
                            </ul>
                        </div>

                </div>
            </div>
        </section>
    </div>

</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dropotron.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-viewport.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>
<script src='http://code.jquery.com/jquery-latest.js'></script>
<script src="js/slider.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>


