<!DOCTYPE html>

<html lang="">
<head>
    <title>Protfolio Damien PAYET</title>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{url('front/css/layout.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style='background-image:url(" {{url('front/images/bg.png')}} ")'>
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="fl_left">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><i class="fa fa-phone"></i> 0629540972</li>
                    <li><i class="fa fa-envelope-o"></i> damien-payet@hotmail.fr</li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <div class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="nospace">
                    <li><a href="{{url('/')}}"><i class="fa fa-lg fa-home"></i></a></li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="index.html">Damien PAYET</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li><a class="drop" href="#">Mes WEBAPP</a>
                        <ul>
                            <li><a href="http://ttd.hacktive.live">TrouveTonDev</a></li>
                            <li><a href="http://game.hacktive.live">Emoji killer</a></li>
                            <li><a href="http://fms.hacktive.live">FollowMyStudent</a></li>
                            <li><a href="http://job.hacktive.live">Job Finder</a></li>
                            <li><a href="http://edt.hacktive.live">Calandrier GLPMR</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('front/pdf/PAYETDamienCV.pdf')}}">Mon CV</a></li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
        </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
@section("content")

@show
<!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <article class="one_quarter first">
                <h6 class="heading">A propos de moi</h6>
                <p>Passionné par l’informatique et doté d’une grande curiosité, j’ai appris à maîtriser de nombreux langages de programmation très tôt. J’ai aussi participé à quelques concours de programmation telle que la battle du dev. Fort d’une expérience professionnelle ...
                </p>

                <p class="nospace"><a href="#">Voir plus</a></p>
            </article>
            <div class="one_quarter">
                <h6 class="heading">Information personnelle</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            18 Rue de la chapelle , Villers-les-pots, 21130
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> 0629540972</li>
                    <li><i class="fa fa-envelope-o"></i> damien-payet@hotmail.fr</li>
                </ul>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="https://www.facebook.com/damien.payet.7927"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-dribble" href="https://github.com/DamienPayet"><i class="fa fa-github"></i></a>
                    </li>
                    <li><a class="faicon-linkedin" href="https://www.linkedin.com/in/damien-payet-1b7b43183/"><i
                                class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Mes WEBAPP</h6>
                <ul class="nospace linklist">
                    <li><a href="http://ttd.hacktive.live">TrouveTonDev</a></li>
                    <li><a href="http://game.hacktive.live">Emoji killer</a></li>
                    <li><a href="http://fms.hacktive.live">FollowMyStudent</a></li>
                    <li><a href="http://job.hacktive.live">Job Finder</a></li>
                    <li><a href="http://edt.hacktive.live">Calandrier GLPMR</a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Mon CV</h6>
                <ul class="nospace linklist">
                    <li><a href="{{url('front/pdf/PAYETDamienCV.pdf')}}">Damien PAYET.pdf</a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">hacktive.live</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{url('front/js/jquery.min.js')}}"></script>
    <script src="{{url('front/js/jquery.backtotop.js')}}"></script>
    <script src="{{url('front/js/mobilemenu.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://www.mattboldt.com/demos/typed-js/js/typed.custom.js'></script>
    <script src="{{url('front/js/terminal.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
