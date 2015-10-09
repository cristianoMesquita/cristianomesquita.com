<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
<!--[if IE 8]><link href="css/ie.css" rel="stylesheet" /><![endif]-->
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Cristiano Mesquita" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Cristiano Mesquita</title>
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/shortcodes.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/slider.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Importing Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68129722-1', 'auto');
  ga('send', 'pageview');

</script>
    <div id="wrapper">
        <!-- HEADER -->
        <header id="header">
            <div class="btn-responsive-menu"> <span class="span-bar"></span> <span class="span-bar"></span> <span class="span-bar"></span> </div>
            <nav id="nav">
                <div class="box-logo">
                    <a href="index.html"><img alt="logo" src="images/logo.png" /></a>
                </div>
                <div class="box-logo-mobile">
                    <a href="index.html"><img alt="logo" src="images/logo-mobile.png" /></a>
                </div>
                <ul class="nav">
                    <!-- CHANGE THE MENU TITLES HERE -->
                    <li>
                        <a id="link-profile" href="profile.html">
                            <div class="menu-name">My Profile</div>
                        </a>
                    </li>
                    <li>
                        <a id="link-portfolio" href="portfolio.html">
                            <div class="menu-name">Portfolio</div>
                        </a>
                    </li>
                    <li>
                        <a id="link-resume" href="resume.html">
                            <div class="menu-name">Resume</div>
                        </a>
                    </li>
                    <li class="current">
                        <a id="link-contact" href="contact.html">
                            <div class="menu-name">Contact</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- #HEADER ENDS HERE -->
        <div id="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110914.41216451666!2d-49.994878650000054!3d-29.688594149999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952281b6d2dd3aed%3A0x45b99e1f8e541979!2sCap%C3%A3o+da+Canoa%2C+RS!5e0!3m2!1spt-BR!2sbr!4v1442860683300" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- CONTACT SECTION -->
            <section id="profile">
                <div class="content">
                    <div class="two-third-first">
                        <!-- FORM SECTION -->
                        <style type="text/css">
                            .emailSent{
                                background-color: lightgreen;
                                width: 600px;
                                height: 40px;
                                text-align: center;
                                padding-top: 4px;
                                border-radius: 5px;
                            }
                            .emailNotSent{
                                background-color: red;
                                width: 200px;
                                height: 40px;
                                color:white;
                                text-align: center;
                                padding-top: 4px;
                                border-radius: 5px;
                            }
                        </style>

                        <?php if ((isset($_GET["emailSent"])) && ($_GET["emailSent"] == 'sent')){
                            echo '<div class="emailSent">';
                            echo    '<p>Email sent success, Thank you for contacting me,  I will contact you as soon as possible.</p>';
                            echo '</div>';
                        }
                        if ((isset($_GET["emailSent"])) && ($_GET["emailSent"] == 'notSent')){
                            echo '<div class="emailNotSent">';
                            echo    '<p>Email not sent</p>';
                            echo '</div>';
                        }
                        ?>
                        
                        <form action="http://www.cristianomesquita.com/send.php" name="contactform" class="contactform" method="POST">
                            <label for="name">Full Name<span class="required">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required="">
                            <label for="company">Company<span class="required">*</span></label>
                            <input type="text" name="company" id="company" placeholder="Where do you work?" required="">
                            <label for="email">Email<span class="required">*</span></label>
                            <input type="email" name="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="What is Your email account" required="">
                            <label for="project">Description<span class="required">*</span></label>
                            <br>
                            <textarea name="proposalDescription" id="proposalDescription" cols="40" rows="5" placeholder="Describe your proposal" required=""></textarea>
                            <button type="submit" name="submit" class="bt-navy txt-right fx1">Send &nbsp;&nbsp;<i class="icon-circle-arrow-right green"></i></button>
                        </form>
                        <!-- FORM SECTION ENDS -->
                    </div>
                    <div class="one-third-last">
                        <h3>Cristiano Mesquita</h3>
                        <p>Almirante Tamandaré 300 - Rio Grande do Sul - (Brazil)</p>
                        <p><i class="icon-user navy"></i>&nbsp;&nbsp; <strong>+55 051 8248.8129</strong></p>
                        <p><a href="#"><i class="icon-envelope navy"></i>&nbsp;&nbsp; contact@cristianomesquita.com</a></p>
                    </div>
                </div>
            </section>
            <!-- CONTACT SECTION ENDS -->
            <!-- FOOTER SECTION -->
            <div id="footer">
                <div class="inner-footer">
                    <div class="one-half-first copyright white">All Rights Reserved to Cristiano Mesquita 2015</div>
                     <div class="one-half-last txt-right"><a class="sc-icons" href="https://br.linkedin.com/pub/cristiano-mesquita/25/859/211" target="_blank"><i class="icon-linkedin green"></i></a></div>
                </div>
            </div>
            <!-- #footer -->
        </div>
        <!-- #container -->
    </div>
    <!-- #wrapper -->
    <!-- JavaScript Files -->
    <script src="js/jquery.min_1_9.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/jquery.slitslider.js"></script>
</body>

</html>
