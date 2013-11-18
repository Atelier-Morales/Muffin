<?php
session_start ();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Muffin</title>
        <meta name="description" content="Ce petit site a pour objectif de recueillir un maximum d'informations concernant les compétences de chacun, et de les mettre à disposition pour faciliter les échanges, le partage et les petits boulots.">
        <meta name="viewport" content="width=device-width">
        <meta name="google" value="notranslate">
        <meta name="application-name" content="Muffin">
        <meta name="application-url" content="http://muffin.lambdaweb.fr/">
        <link rel="canonical" href="http://muffin.lambdaweb.fr/">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-114.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-144.png">
        <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144.png">

        <link rel="stylesheet" href="css/Muffin.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><span class="icon-muffin"></span> <i>Muffin <span style='color: #864032'>chocolat triples pépites</span></i></h1>
                <!-- // Pas besoin de navigation pour ce site...
                <nav>
                    <ul>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                    </ul>
                </nav>
                -->
            </header>
        </div>

        <div class="main-container">
            <div data-role="container" class="main wrapper clearfix">
                <?php
                if ( isset ($_SESSION['login']) and isset ($_SESSION['code']) )
                {
                    ?>
                    <script>
                        $(document).ready(function()
                        {
                            $.get("steps/step-2.php", {code: "<?= $_SESSION['code'] ?>", login: "<?= $_SESSION['login'] ?>"},
                            function(data) {
                                $("div[data-role='container']").html($(data)); 
                            }
                                );
                        });
                    </script>
                    <?php
                }
                else
                {
                    include_once 'steps/step-0.php';
                }
                ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->


        <div class="footer-container">
            <footer class="wrapper">
                <div role="author">
                    <p><span class="icon-quill"></span> <i>Made with love by <a href="http://www.lambdaweb.fr">lambdaweb</a></b> </i></p>
                </div>
                <div role="git-info">
                </div>
            </footer>
        </div>

        <script src="js/Muffin.js"></script>

        <script>
                        var _gaq = [['_setAccount', 'UA-45835616-1'], ['_trackPageview']];
                        (function(d, t) {
                        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                            g.src = '//www.google-analytics.com/ga.js';
                            s.parentNode.insertBefore(g, s)
                        }(document, 'script'));
        </script>
    </body>
</html>
