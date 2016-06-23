<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Na4Łapy</title>
    <link rel="shortcut icon" href="na4lapy_icon.ico" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="\"Na4Łapy\" to aplikacja pozwalająca przeglądać zdjęcia i opisy zwierząt znajdujących się pod opieką gdańskiego schroniska Promyk. Użytkownik może w prosty sposób dodawać psy i koty do listy ulubionych oraz przekazywać datki na zwierzęta w formie elektronicznych mikropłatności."/>
    <meta name="robots" content="index,nofollow">
    
     <!-- Scripts files -->
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!--webfont-->
    <!--animated-css-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--/animated-css-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic,700italic'
          rel='stylesheet' type='text/css'>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
     <script type="text/javascript">
    function gen_mail_to_link(lhs,rhs,subject) {
        document.write("<a href=\"mailto");
        document.write(":" + lhs + "@");
        document.write(rhs + "?subject=" + subject + "\">" + lhs + "@" + rhs + "<\/a>");
    }
	
	function gen_tel(lhs,rhs,subject) {
        document.write( "Tel: " + lhs + " ");
        document.write(rhs + " " + subject);
    }
</script>
    <!---- start-smoth-scrolling---->

</head>
<body>
<!---->
<div class="banner">
    <div class="container">
        <div class="header">
            <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
                <a href="index.html"><img src="images/logowww.png" width="252" height="62" alt=""/></a>
            </div>
            <div class="top-menu">
                <span class="menu"></span>
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a class="scroll" href="#features">O aplikacji</a></li>
                    <li><a class="scroll" href="#about-bottom">Współpraca</a></li>
                    <li><a class="scroll" href="#testimonials">Zespół</a></li>
                    <li><a class="scroll" href="#pricing">Partnerzy</a></li>
                    <li><a class="scroll" href="#contact">Kontakt</a></li>
                </ul>
            </div>
            <!-- script-for-menu -->
            <script>
                $("span.menu").click(function () {
                    $(".top-menu ul").slideToggle("slow", function () {
                    });
                });
            </script>
            <!-- script-for-menu -->

            <div class="clearfix"></div>
        </div>
        <div class="banner-info">
            <div class="col-md-6 banner-text wow fadeInRight" data-wow-delay="0.5s">
                <h1>Aplikacja mobilna Na4Łapy</h1>
                <p>"Na4Łapy" to aplikacja pozwalająca przeglądać zdjęcia i opisy zwierząt znajdujących się pod opieką
                    gdańskiego
                    schroniska Promyk. Użytkownik może w prosty sposób dodawać psy i koty do listy ulubionych oraz
                    przekazywać datki na zwierzęta w formie elektronicznych mikropłatności.</p>
                <a class="download"
                   href="https://play.google.com/store/apps/details?id=pl.kodujdlapolski.na4lapy">POBIERZ
                    TERAZ</a>

                <a class="view hvr-bounce-to-left" href="#features">O APLIKACJI</a>
            </div>
            <div class="col-md-6 banner-pic wow fadeInLeft" data-wow-delay="0.5s">
                <img src="images/phn.png" alt=""/>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</div>
<!---->
<div id="features" class="features">
    <div class="container">
        <div class="features-head">
            <h3>O aplikacji</h3>
        </div>
        <div class="features-section">
            <div class="col-md-3 feature-grid">
                <img class="wow bounceIn" data-wow-delay="0.4s" src="images/icon1.png" alt=""/>
                <h3>Określ preferencje</h3>
                <p>Wybierz typ, płeć, wiek, rozmiar oraz aktywność zwierzaka i znajdź wymarzonego pupila.
                </p>
            </div>
            <div class="col-md-3 feature-grid">
                <img class="wow bounceIn" data-wow-delay="0.4s" src="images/icon2.png" alt=""/>
                <h3>Przeglądaj zwierzęta</h3>
                <p>Dzięki zdjęciom i dokładnym opisom możesz w szybki sposób zapoznać się ze zwierzętami będącymi
                    obecnie w schronisku.</p>
            </div>
            <div class="col-md-3 feature-grid">
                <img class="wow bounceIn" data-wow-delay="0.4s" src="images/icon3.png" alt=""/>
                <h3>Dodaj do ulubionych</h3>
                <p>Spodobał Ci się wybrany zwierzak? Dodaj go do listy ulubionych, żebyś mógł w łatwy sposób go
                    odnaleźć.</p>
            </div>
            <div class="col-md-3 feature-grid">
                <img class="wow bounceIn" data-wow-delay="0.4s" src="images/icon4.png" alt=""/>
                <h3>Wesprzyj schronisko</h3>
                <p>Dzięki mikropłatnościom możesz w łatwy sposób wesprzeć zwierzęta znajdujące się w schronisku.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div id="about-bottom" class="about-bottom">
    <div class="container">
        <div class="col-md-6 about-customize wow fadeInRight" data-wow-delay="0.5s">
            <div class="device-text-bottom">
                <h3>Współpraca i Opensource</h3>
                <p>Obecnie jesteśmy na etapie dopracowywania aplikacji. Planujemy udostępnić kod aplikacji w przeciągu
                    kilku miesięcy.
                    Jeżeli jednak jesteś zainteresowany dodaniem do naszej aplikacji schroniska znajdującego się w
                    Twojej okolicy - skontaktuj się z nami.
                    Chętnie rozszerzymy naszą bazę i zespół ;-)</p>
            </div>
        </div>
        <div class="col-md-6 about-device-bottom wow fadeInLeft" data-wow-delay="0.5s">
            <img src="images/phn3.jpg" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
   // $(function () {
	   $(window).load(function() {
        $("#slider2").responsiveSlides({
            auto: true,
            pager: true,
			pauseControls: true,
            speed: 1000,
			timeout: 5000, 
            namespace: "callbacks",
        });
    });
</script>
<!---->
<div id="testimonials" class="pricing">
    <div class="container">
        <div class="pricing-text">
            <h3>Zespół</h3>
        </div>
        <!-- start slider -->
        <div class="pricing-grids">
            <div class="slider">
                <ul class="rslides" id="slider2">
                    <li>
                        <div class="col-md-6 pricing-plans">
                            <p>W projekcie aplikacji "Na4Łapy" zajmuje się koordynacją prac i spinaniem wszystkich
                                elementów w całość.
                                To świetne doświadczenie robić to co się lubi i jeszcze przy tym pomagać innym.</p>
                            <div class="pic1">
                                <img src="images/pr1.png" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Katarzyna Swat</h5>
                                <a href="#">KIEROWNIK PROJEKTU</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 pricing-plans">
                            <p>W projekcie aplikacji "Na4Łapy" zajmuje się.........</p>
                            <div class="pic1">
                                <img src="images/pr2.png" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Marek Wojtuszkiewicz</h5>
                                <a href="#">LIDER TECHNICZNY</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-md-6 pricing-plans">
                            <p>Technologia powinna pomagać nie tylko ludziom, dlatego cieszę się, że mogę wspierać
                                zwierzaki w szukaniu nowego domu.
                                W projekcie zajmuję się programowaniem aplikacji na platformę Android.</p>
                            <div class="pic1">
                                <img src="images/m6.jpg" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Natalia Wróblewska</h5>
                                <a href="#">PROGRAMISTA ANDROID</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 pricing-plans">
                            <p>Dołączyłam do projektu, gdyż los porzuconych zwierząt nie był mi obojętny.
                                Pomoc zespołu pozwoliła mi postawić pierwsze kroki w programowaniu na Androida,
                                efektem czego jest ta świetna aplikacja.".</p>
                            <div class="pic1">
                                <img src="images/m2.jpg" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Małgorzata Syska</h5>
                                <a href="#">PROGRAMISTA ANDROID</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-md-6 pricing-plans">
                            <p>Once upon a time all the Rivers combined to protest against the action of the Sea in
                                making their waters salt.
                                “When we come to you,” said they to the Sea.</p>
                            <div class="pic1">
                                <img src="images/m5.jpg" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Andrzej Wójcicki</h5>
                                <a href="#">GRAFIK</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 pricing-plans">
                            <p>A shoe is not only a design, but it's a part of your body language, the way you walk. The
                                way you're going to move is quite dictated by your shoes.</p>
                            <div class="pic1">
                                <img src="images/m3.jpg" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Tomasz Nastały</h5>
                                <a href="#">PROGRAMISTA - FRONT-END</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="col-md-6 pricing-plans">
                            <p>Denerwuje się gdy słyszę, że w tym kraju nic się nie da zrobić i, że nic od nas nie zależy. Dlatego ile tylko mogę wspieram zespół i projekt Na4Łapy</p>
                            <div class="pic1">
                                <img src="images/m4.jpg" alt=""/>
                            </div>
                            <div class="pic-info">
                                <h5>Marcin Rudzki</h5>
                                <a href="#">PROGRAMISTA - BACKEND</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 pricing-plans">
                            <p>Chcesz rozwijać swoje umiejętnośći programowania? Szukasz ciekawych projektów? DOŁĄCZ DO
                                NAS ;-)</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
            <!-- end slider -->
        </div>
    </div>
</div>
<!---->
<div class="theme">
    <div class="container">
        <h3 class="wow bounceIn" data-wow-delay="0.4s"><span>Pobierz aplikację</span> na system Android ;-)</h3>
        <a class="view hvr-bounce-to-left wow bounceIn" data-wow-delay="0.4s" href="#features">O APLIKACJI</a>
        <a class="download wow bounceIn" data-wow-delay="0.4s" href="https://play.google.com/store/apps/details?id=pl.kodujdlapolski.na4lapy">POBIERZ APLIKACJĘ</a>
    </div>
</div>
<!---->
<div id="pricing" class="pricing-bottom">
    <div class="container">
        <div class="pricing-text-bottom">
            <h3>Partnerzy</h3>
        </div>

        <a href="http://www.volanto.pl"><img src="images/volanto.png" width="150" height="150"
                                             style="float: left; margin: 30px; text-align:center;" alt=""/></a>
        <img src="images/kdp.png" width="221" height="123" style="float: left; margin: 30px; text-align:center;"
             alt=""/>
        <a href="http://www.schroniskopromyk.pl"><img src="images/promyk.jpg" width="261" height="60"
                                                      style="float: left; margin: 30px; text-align:center;" alt=""/></a>
        <a href="http://www.paylane.pl"><img src="images/paylane.jpg" width="242" height="125"
                                             style="float: left; margin: 30px; text-align:center;" alt=""/></a>

    </div>
</div>
<!---->
<div id="contact" class="contact">
    <div class="container">
        <div class="contact-text">
            <h3>Masz pytania? Skontaktuj się z nami!</h3>
        </div>
        <div class="contact-grids">
            <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
                <div class="icon1"></div>
                <p>Katarzyna Swat </p>
                <p><script type="text/javascript"> 
    gen_tel('600','255','751');
</script> </p>
            </div>
            <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
                <div class="icon2"></div>
                <p>Miejsce spotkań</p>
                <p>Gdański Inkubator Przedsiębiorczości STARTER</p>
                <p>ul. Lęborska 3B</p>
                <p>siedziba firmy Volanto Sp. z o.o.</p>
            </div>
            <div class="col-md-4 contact-grid text-center wow bounceIn" data-wow-delay="0.4s">
                <div class="icon3"></div>
               
                <script type="text/javascript"> 
    gen_mail_to_link('k.swat','volanto.pl','Odnośnie aplikacji na4łapy...');
</script>
            
            </div>
            <!-- <div class="clearfix"></div>-->
        </div>
        <!-- <div class="contact-details" style="display: none">

             <form>
                 <div class="col-md-6 contact-left">
                     <input type="text" class="text wow fadeInLeft" data-wow-delay="0.4s" value="Imię *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name *';}">
                     <input type="text" class="text wow fadeInLeft" data-wow-delay="0.4s" value="Email *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email *';}">
                     <input type="text" class="text wow fadeInLeft" data-wow-delay="0.4s" value="Temat *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject *';}">
                 </div>
                 <div class="col-md-6 contact-right">
                     <textarea class="wow fadeInRight" data-wow-delay="0.4s" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Treść wiadomości *</textarea>
                     <input class="wow fadeInRight" data-wow-delay="0.4s" type="submit" value="WYŚLIJ"/>
                 </div>
                 <div class="clearfix"></div>
             </form>
         </div>		 -->
    </div>

</div>
<!---->
<div class="footer text-center">
    <div class="container">
        <p class="wow bounceIn" data-wow-delay="0.4s">Copyright &copy; <?php echo date("Y"); ?> NA4ŁAPY All rights reserved | Template by <a
                href="http://w3layouts.com"> W3layouts</a></p>
    </div>
</div>
<!---->
<script type="text/javascript">
    $(document).ready(function () {
       
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->

</body>
</html>