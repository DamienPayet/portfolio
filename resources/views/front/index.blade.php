@extends('layout.templateFront')


@section('content')
    <link href="{{url('front/css/terminal.css')}}" rel="stylesheet" type="text/css" media="all">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2 ">
        <!-- partial:index.partial.html -->
        <br>
        <div id=terminal class="terminal-window">
            <header>
                <div class="button green"></div>
                <div class="button yellow"></div>
                <div class="button red"></div>
            </header>
            <section class="terminal">
                <div class="history"></div>
                $&nbsp;<span class="prompt"></span>
                <span class="typed-cursor"></span>

            </section>
        </div>
        <!-- data -->
        <div class="terminal-data mimik-run-output">
            <br>Damien PAYET<br>
            ----------------------------------------------<br>
            Age: 21 ans  <span class="gray"># ./19/12/1999</span><br>
            ----------------------------------------------
            <br>Email : damien-payet@hotmail.fr<br>
            ----------------------------------------------<br>
            &nbsp;&nbsp;Experiences : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">2018-2021</span> <span class="gray">Apprenti Administrateur Système</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">2017-2018</span> <span class="gray">Apprenti Developpeur Back-End Symfony</span><br>

            <br>
            &nbsp;&nbsp;Compétences : <br>
            <span class="gray">&nbsp;----------- ----------- ------- -------- --------</span><br>
            &nbsp;PHP/Laravel&nbsp;JAVA/JAVAEE&nbsp;.NET&nbsp;&nbsp;&nbsp;&nbsp;MySQL&nbsp;&nbsp;&nbsp;&nbsp;Apache2<br>
            <span class="gray">&nbsp;----------- ----------- ------- -------- --------</span><br><br>
            &nbsp;&nbsp;Formation : <br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="orange">en cours</span> <span class="gray">Licence Administrateur des Systèmes d'Information</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">BTS Système Numérique</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="green">✓</span> <span class="gray">BAC Professionnel Système Electronique et &nbsp;Numerique</span><br>
            <br>
        </div>
        <br>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');">
        <section class="hoc cta clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading">Vous souhaitez rester informé ? </h6>
                <p>Inscrivez-vous à la NewLetter</p>
                <p>😁</p>
            </div>
            <form method="post" action="#">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input class="btmspace-15" type="text" value="" placeholder="saisissez votre adresse email&hellip;">
                    <button type="submit" value="submit">Valider</button>
                </fieldset>
            </form>
            <!-- ################################################################################################ -->
        </section>
    </div>
@endsection
