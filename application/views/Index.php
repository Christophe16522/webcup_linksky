 
<!DOCTYPE html>
<html lang="en">
    <!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
    <!--[if lte IE 9]><html class="ie9" lang="en"><![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Android Land</title>
        <meta name="description" content="FS Millbank is a distinctive wayfinding and signage typeface from leading type foundry Fontsmith." />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url("assets/application.css"); ?>" rel="stylesheet" type="text/css" />
        <!--[if lte IE 9]><link href="/stylesheets/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
        <link rel="icon" href="<?php echo base_url("assets/images/logo.png"); ?>">
        <link rel="apple-touch-icon" href="<?php echo base_url("assets/images/touch-icon-iphone.png"); ?>" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/images/touch-icon-ipad.png"); ?>" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url("assets/images/touch-icon-iphone-retina.png"); ?>" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url("assets/images/touch-icon-ipad-retina.png"); ?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets/images/touch-icon-iphone-plus-retina.png"); ?>" />
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <meta name="msapplication-TileImage" content="<?php echo base_url("assets/images/metro-tile.png"); ?>"/>
        <meta name="msapplication-TileColor" content="#000000"/>
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
    </head>

    <body ng-app="myApp">

        <div id="Site">

            <div id="Header">
                <a href="#jurassicmund" class="FS-logo" title="Go to Fontsmith.com" target="_blank"></a>
                <a href="#jurassicmund" >
                    <img src="assets/images/logo.png" style="width: 5%;"></a>
                <div class="right">
                    <div class="barBox right">
                        <a class="menuButton js-menu"><span>Menu</span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22" height="23" viewBox="0 0 22 23" enable-background="new 0 0 22 23" xml:space="preserve"><rect x="0" y="20" fill="#C6BA00" width="22" height="3"/><rect x="0" y="10" fill="#C6BA00" width="22" height="3"/><rect x="0" fill="#C6BA00" width="22" height="3"/></svg></a>
                    </div>
         
                </div>
            </div>

            <div id="Menu" class="js-menu">
                <div class="Menu-box">
                    <ul class="Menu-list">
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#jurassicmund">Jurassic Mund</a></li>
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#function">Egypt Mund</a></li>
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#form">West Mund</a></li>
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#other-uses">Réserver</a></li>
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#function-form">Voter</a></li>
                        <li class="Menu-item"><a class="js-goto Menu-link" href="#links">Nous Contacter</a></li>
                       
                      
                    </ul>
                </div>
            </div>
            <div class="impress-container">
                <div id="impress">
                    <div id="jurassicmund" class="step" data-x="0" data-y="0" data-z="1" data-scale="1">
                        <div class="slide smallerPaddingTop" style="background-image: url('assets/images/dyno1.png');width: 200%;height: 150%;">
                            <span class="microText silver">Osez l'aventure!</span>
                            <span class="bigText bold block microPaddingTop mediumIndentFix">Jurassic Mund</span>
                            <!-- <img src="assets/images/image1.png"> -->
                        </div>
                        <a href="#jurassicmund-1" class="js-next nextIcon firstIcon">Suivant</a>
                    </div>

                    <div id="jurassicmund-1" class="step" data-x="800" data-y="0" data-z="1" data-scale="1">
                        <div class="slide smallerPaddingTop">
                            <span class="microText silver"> Sur l'île des dinosaures,</span>
                            <span class="smallerText block microPaddingTop smallerIndentFix"> enfilez votre chapeau d’explorateur et venez vivre aux côtés de notre paléontologue un voyage qui vous transportera au cœur de la préhistoire <br /> </span>
                        </div>
                        <a href="#transport" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="transport" class="step" data-x="1600" data-y="0" data-z="1" data-scale="1">
                        <div class="slide smallerPaddingTop">
                            <img src="assets/images/tirex.png">
                            <span class="smallerText block microPaddingTop smallerIndentFix"> partagez les péripéties des dinosaures leurs modes de vie, comme si vous y étiez. <br /> </span>

                        </div>
                        <a href="#signage" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="signage" class="step" data-x="3310" data-y="720" data-rotate="90" data-z="1" data-scale="3">

                        <span class="smallestText block heavy">De nouvelles attractions uniques à </span>
                        <span class="biggestText bold yellow block bigIndentFix smallestPaddingTop">Android Land</span>
                        <span class="silverLine"></span>
                        <a href="#detail-signage" class="js-next exampleInfoBox"><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    </div>

                    <div id="detail-signage" class="step" data-x="1150" data-y="780" data-scale="0.4" data-z="-500">
                        <span>Incroyable</span>
                        <a href="#detail-display" class="js-next nextIcon">et</a>
                    </div>

                    <div id="detail-display" class="step" data-x="500" data-y="800" data-rotate="-90" data-scale="0.15" data-z="-500">
                        <span>Surprises</span>
                        <a href="#function" class="js-next nextIcon"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    </div>

                    <div id="function-form" class="step" data-x="555" data-y="1400" data-scale="0.3" data-z="-400" ng-Controller="voteLandCtrl">
                        <div class="slide smallerPaddingTop extraPaddingRight" style="background-image: url('assets/images/node.png');">
                            <h2 class="paragraph block bold smallerText">Vote</h2>
                            <table class="tableExample" cellpadding="0" cellspacing="0">
                                <tr ng-repeat="x in munds">
                                    <td>{{x.monde}}</td>
                                    <td>{{x.vote}}</td>
                                    <td><a ng-click="ajoutervote(x.id)"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
                                </tr>
                                
                                


                            </table>
                                         
                     
                        </div>
                        <a href="#tate-britain" class="js-next nextIcon--right">Proposer un nouveau monde <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="tate-britain" class="step centreText" data-x="800" data-y="1400" data-z="-400" data-scale="0.3" ng-controller="voteLandCtrl">
                        <div class="Overlay-wrap" >
                            <label for="last_name">E-mail<span class="yellow">*</span></label>
                            <input id="last_name" type="email" ng-model="mail" required>     
                            <label for="last_name">Nom du nouveau monde<span class="yellow">*</span></label>
                            <input id="last_name" type="text" ng-model="mund" required> 
                            <label for="last_name"><span class="yellow"></span></label>

                            <a ng-click="nouveaumonde()" class="eyeButton"><span>Proposer un nouveau monde</span></a>
                        </div> 
                        <a href="#links" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="function" class="step" data-x="-77" data-y="1225" data-scale="1" data-z="-600">
                        <h2 class="bigWhiteTitle">Égypte</h2>
                        <a href="#legibility-scenarios" class="js-next magnifier"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>

                    <div id="legibility-scenarios" class="step" data-x="-290" data-y="1425" data-z="-600" data-scale="0.4">
                        <div class="slide extraPaddingRight" style="
                             background-image: url('assets/images/pyramid1.png');
                             width: 250%;
                             ">
                            <h3 class="paragraph block bold smallerPaddingTop">L'Égypte antique</h3>
                            <span class="smallerText block microPaddingTop smallerIndentFix">est une ancienne civilisation d'Afrique du Nord-Est concentrée le long du cours inférieur du Nil, dans ce qui constitue aujourd'hui l'Égypte</span>
                        </div>
                        <a href="#typeface-details" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="typeface-details" class="step" data-x="30" data-y="1425" data-z="-600" data-scale="0.4">
                        <div id="exampleArea">
                            <div id="exampleTextArea">
                                <div id="exampleText"> <img src="assets/images/tablette.png"></div>
                            </div>
                        </div>
                        <div class="exampleOptions">
                            <ul class="Grid">
                                <li class="Grid-item oneThird centreText">
                                    <a id="detailing" class="bigsquareButton fullWidth exampleOption"><span>Zoomer</span></a>
                                </li><li class="Grid-item oneThird centreText">
                                    <a id="angle" class="bigsquareButton fullWidth exampleOption"><span>Vue d'angle</span></a>
                                </li><li class="Grid-item oneThird centreText">
                                    <a id="distance" class="bigsquareButton fullWidth exampleOption"><span>Dézoomer</span></a>
                                </li>
                            </ul>
                        </div>
                        <a href="#positive-negative" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="positive-negative" class="step" data-x="750" data-y="1144" data-z="-600" data-scale="0.3">
                        <div class="lineUp"></div>
                        <div class="slide extraPaddingRight">
                            <h3 class="paragraph block bold smallerPaddingTop">Pyramides </h3>
                            <p class="paragraph smallerPaddingTop">Les pyramides d'Égypte, de tous les vestiges monumentaux que nous ont légués les Égyptiens de l'Antiquité, et notamment les trois grandes pyramides de Gizeh, sont à la fois les plus impressionnantes et les plus emblématiques de cette civilisation.</p>
                            <img src="assets/images/piramid.gif">

                        </div>
                        <a href="#typeface-versions" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="typeface-versions" class="step" data-x="1000" data-y="1144" data-z="-600" data-scale="0.3">
                        <div class="slide">
                            <div class="Example">
                                <span class="smallerText block microPaddingTop smallerIndentFix">Traverser les dunes, admirez les paysages de l’Egypte  antiques à la découverte des pyramides et hiéroglyphes</span>

            <!-- <img src="assets/images/negative-example.png" alt="Negative font" class="negativeExample"> -->
                            </div>


                        </div>
                    </div>

                    <div id="user-interface" class="step" data-x="1250" data-y="1144" data-z="-600" data-scale="0.3">
                        <div class="slide">
                            <img src="assets/images/caravan.png" alt="Standard font" >
                            <span class="microText">Les pieds dans le sable ou à dos d’un chameau, vivez des expériences inoubliables et un bon moment en notre compagnie</span>

                        </div>
                        <a href="#form" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="form" class="step" data-x="1725" data-y="1575" data-rotate="180" data-scale="1" data-z="-200">
                        <h2 class="bigWhiteTitle">Far West </h2>
                        <a href="#design" class="js-next magnifier"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>

                    <div id="design" class="step" data-x="1935" data-y="1375" data-rotate="180" data-z="-200" data-scale="0.4">
                        <div class="slide extraPaddingRight" style="background-image: url('assets/images/western.png');width: 300%;height: 150%;">
                            <h3 class="paragraph block bold smallerPaddingTop smallerText">L'Ouest américain,</h3>
                            <p class="paragraph smallerPaddingTop microText" style="width: 40%;"> aussi appelé Far West, est une région située à l'ouest des États-Unis. Sa définition a évolué avec le temps, puisque la population a colonisé les terres intérieures en se dirigeant vers l'océan Pacifique.</p>

                        </div>
                        <a href="#wayfinding" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="wayfinding" class="step" data-x="1615" data-y="1375" data-rotate="180" data-z="-200" data-scale="0.4">
                        <div class="slide extraPaddingRight">
                            <span class="microText silver"> Faites l’expérience d’un cowboy ! </span>
                            <span class="smallerText block microPaddingTop smallerIndentFix"> Aller dans le far West dans un parcours à cheval, trois périodes clés de la conquête de l’or dignes d’un western <br /> </span>


                        </div>
                        <a href="#weights" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="weights" class="step" data-x="1295" data-y="1375" data-rotate="180" data-z="-200" data-scale="0.4">
                        <img src="assets/images/bandi.png" alt="Standard font" >
                        <span class="microText">C’est un grand moment pour réveiller en vous l’amour des grands canyons, découvrez nos saloons mythiques et devenez le personnage de vos rêves, être l’incroyable shérif du coin ou un grand Hors-la-Loi. <br /> </span>

                        <a href="#other-uses" class="js-next nextIcon">Réserver <i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                    </div>
                    <div  ng-controller="reservationCtrl">
                    <div id="other-uses" class="step" data-x="1040" data-y="1656" data-rotate="180" data-z="-200" data-scale="0.3">
                        <div class="lineDown"></div>
                        <div class="slide rightNext smallerPaddingTop">
                            <span class="block">
                                <span class="smallerText">
                                    <span class="silver italic">Interessé</span>
                                    <span class="right">
                                        <span class="yellowLine"></span>
                                        <span class="normalText bold">?</span>
                                    </span>
                                </span>
                            </span>
                            <span class="block">
                                <span class="smallerText">
                                    <span class="silver italic">veuillez remplir  <br />les
                                        <span class="heavy">formalités.</span>
                                    </span>
                                    <span class="right">
                                        <span class="yellowLine"></span>
                                        <span class="normalText bold">Vos Infos</span>
                                    </span>
                                </span>
                            </span>
                            <div class="extraPaddingRight">
                                <h3 class="paragraph bold smallerPaddingTop">Réservation</h3>
                                <div class="Overlay-wrap" >
                                    <label for="last_name">Nom<span class="yellow">*</span></label>
                                    <input id="last_name" type="text" ng-model="nom" required>     
                                    <label for="last_name">Prénom<span class="yellow">*</span></label>
                                    <input id="last_name" type="text" ng-model="prenom" required>                                        
                                </div>                                
                            </div>
                            <a href="#information" class="js-next nextIcon">Suivant <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            <!-- <a href="#information" class="js-overlay-open eyeButton bottomLeft" title="Suivant"><span>Suivant ...</span></a> -->
                        </div>
                        <!-- <a href="#information" class="js-next nextIcon--right">ª</a> -->
                    </div>

                    <div id="information" class="step" data-x="720" data-y="1656" data-rotate="180" data-z="-200" data-scale="0.3">
                        <div class="slide">
                            <a href="#other-uses"><span class="basicText yellow bold block smallIndentFix"><span class="bold"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </span>Revenir </span></a>
                            <div class="silverLine smallerMarginTop smallestMarginBottom"></div>
                            <div class="Overlay-wrap" >
                                <label for="last_name">E-mail<span class="yellow">*</span></label>
                                <input id="last_name" type="email" ng-model="mail" required>     
                                <label for="last_name">Adresse<span class="yellow">*</span></label>
                                <input id="last_name" type="text" ng-model="adresse" required>  
                                <label></label>
                                <p> <span class="yellow">*</span> Un mail de confirmation vous sera envoyé.</p>
                            </div> 
                        </div>
                        <a href="#clarity" class="js-next nextIcon">Suivant <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="clarity" class="step" data-x="400" data-y="1656" data-rotate="180" data-z="-200" data-scale="0.3">
                        <div class="slide">
                            <a href="#information"><span class="basicText yellow bold block smallIndentFix"><span class="bold"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </span>Revenir </span></a>
                            <div class="silverLine smallerMarginTop smallestMarginBottom"></div>
                            <div class="Overlay-wrap" >
                                <label for="last_name">De<span class="yellow">*</span></label>
                                <input id="last_name" type="date" datetime="yyyy-MM-dd" ng-model="datedebut"  style="width: 100%;border-radius: 5px;">     
                                <label for="last_name">à<span class="yellow">*</span></label>
                                <input id="last_name" type="date" ng-model="datefin" style="width: 100%;border-radius: 5px;">                                        
                                <label for="last_name">Nombre de place<span class="yellow">*</span></label>
                                <input id="last_name" type="number" ng-model="nbreplace" style="width: 100%;border-radius: 5px;">   
                                <small class="smallerText" ng-bind="getprix()|currency"></small>
                            </div> 
                        </div>
                        <a ng-click="reservation()" class="js-next nextIcon">Reserver</a>
                    </div>
                    </div>
                    <div id="icons" class="step" data-x="1105" data-y="3100" data-rotate="90" data-scale="3">
                        <div class="slide">
                            <div class="iconLine">
                                <div class="iconSet"><span><i class="fa fa-chevron-right" aria-hidden="true" style="color: #FDB41E;"></i></span></div><div class="iconSet"><span><i class="fa fa-clock-o" aria-hidden="true" style="color: #FDB41E;"></i></span></div><div class="iconSet"><span><i class="fa fa-star-o" aria-hidden="true" style="color: #FDB41E;"></i></span></div>
                            </div>
                            <div class="bottomLeft extraPaddingRight">
                                <span class="paragraph bold smallerPaddingTop smallerText">Nouveau</span>
                                <p class="paragraph smallerPaddingTop">Suite au succès des pré-réservations, une mise en place de trois nouvelles attractions seront en cours de production et nous avons décidé de vous faire participer pour que chacun propose leur idée afin d’en sortir les meilleurs et voter pour ceux qui lui plaisent le plus.</p>
                                <a href="#function-form" class="eyeButton  mediumMarginTop"><span>oter</span></a>
                            </div>
                        </div>
                        <a href="#links" class="js-next nextIcon"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div id="links" class="step" data-x="3500" data-y="3450" data-z="2200" data-scale="1.3">
                        <div class="slide">
                            <small class="smallerText">Nous Contacter</small>
                              <label for="last_name"></label>
                          
                            <div class="greyBox">
                                <div class="Grid">
                                    <div class="Grid-item oneThird centreText">
                                        <a  href="https://www.facebook.com/Linksky-Webcup-Madagascar-2017-1880082388930233/"><img src="assets/images/facebook-icon.svg" alt="Facebook" title="Share on Facebook" width="50" height="50"></a>
                                    </div><div class="Grid-item oneThird centreText">
                                        <a  href="https://www.youtube.com/"><img src="assets/images/youtube.svg" alt="Youtube" title="Share on Twitter" width="50" height="50"></a>
                                    </div><div class="Grid-item oneThird centreText">
                                        <a  href="mailto:ras.njaka@gmail.com"><img src="assets/images/gplus-icon.svg" alt="Google Mail " title="Share on Google+" width="50" height="50"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="greyBox">
                                    <img src="assets/images/logo.png" alt="Standard font" style="width: 50%;margin-left: 25%;">
                            </div>

                            <div class="bottom">
                                <div class="creditText">Web site: <a href="#jurassicmund" class="creditLink" title="Link Sky | Web Cup 2017" target="_blank">Link Sky | Web Cup 2017</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="step no-step" data-x="-900" data-y="-225" data-rotate="90" data-scale="1" data-z="-300">
                        <div class="massiveText bold darkgrey">3</div>
                    </div>

                    <div class="step no-step" data-x="-200" data-y="-250" data-scale="1" data-z="-300">
                        <div class="massiveText bold">Android</div>
                    </div>

                    <div class="step no-step" data-x="-1165" data-y="620" data-rotate="90" data-scale="1.5" data-z="-300">
                        <div class="mediumText light darkgrey">LinkSky<br />
                            WebCup<br />
                            2017</div>
                    </div>

                    <div class="step no-step arrowSlide" data-x="1025" data-y="1400" data-z="-400" data-scale="0.3">
                    </div>

                    <div class="step no-step" data-x="-1200" data-y="3000" data-rotate="-90" data-scale="1" data-z="-200">
                        <div class="massiveText bold">Exit</div>
                    </div>

                </div>
            </div>



        </div>

        <div class="Overlay">
            <a href="#" class="js-overlay-close closeButton" title="Close">)</a>
            <div id="Charset" class="Overlay-content">
                <div>
                    <div class="Overlay-wrap">
                        <h2 class="Overlay-title">FS Millbank <span class="light">Light</span></h2>
                        <span class="Overlay-bigChar"><span class="light">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="light">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Light Italic</span></h2>
                        <span class="Overlay-bigChar"><span class="light italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="light italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Regular</span></h2>
                        <span class="Overlay-bigChar">The quick brown fox jumps over the lazy dog</span>
                        <span class="Overlay-smallChar">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Italic</span></h2>
                        <span class="Overlay-bigChar"><span class="italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Bold</span></h2>
                        <span class="Overlay-bigChar"><span class="bold">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="bold">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Bold Italic</span></h2>
                        <span class="Overlay-bigChar"><span class="bold italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="bold italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Heavy</span></h2>
                        <span class="Overlay-bigChar"><span class="heavy">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="heavy">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-line"></div>
                        <h2 class="Overlay-title">FS Millbank <span class="light">Heavy Italic</span></h2>
                        <span class="Overlay-bigChar"><span class="heavy italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-smallChar"><span class="heavy italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                    </div>
                </div>
                <div class="darkBg">
                    <div class="Overlay-wrap">
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Light</span></h2>
                        <span class="Overlay-negativebigChar"><span class="light">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="light">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Light Italic</span></h2>
                        <span class="Overlay-negativebigChar"><span class="light italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="light italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Regular</span></h2>
                        <span class="Overlay-negativebigChar">The quick brown fox jumps over the lazy dog</span>
                        <span class="Overlay-negativesmallChar">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Italic</span></h2>
                        <span class="Overlay-negativebigChar"><span class="italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Bold</span></h2>
                        <span class="Overlay-negativebigChar"><span class="bold">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="bold">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Bold Italic</span></h2>
                        <span class="Overlay-negativebigChar"><span class="bold italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="bold italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Heavy</span></h2>
                        <span class="Overlay-negativebigChar"><span class="heavy">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="heavy">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                        <div class="Overlay-lightline"></div>
                        <h2 class="Overlay-title">FS Millbank Negative <span class="light">Heavy Italic</span></h2>
                        <span class="Overlay-negativebigChar"><span class="heavy italic">The quick brown fox jumps over the lazy dog</span></span>
                        <span class="Overlay-negativesmallChar"><span class="heavy italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br />abcdefghijklmnopqrstuvwxyz<br />0123456789</span></span>
                    </div>
                </div>
            </div>
            <div id="Story" class="Overlay-content">
                <div class="Overlay-wrap">
                    <h2 class="Overlay-title">The FS Millbank Story</h2>
                    <p class="Overlay-text">Designed by Stuart de Rozario over a sustained development period of twelve months, FS Millbank answers an important typographic question, ‘with the increasing pace of life, shorter attention spans and the huge practical and cultural impact of technology, how should typography for wayfinding look?’</p>
                    <p class="Overlay-text">The small clutch of tried and tested fonts in this discipline are serviceable, but their over-familiarity means that they no longer feel contemporary and relevant. Much of their personality has been lost through assimilation - they have become purely functional. And what’s more, the parameters of that function are changing fast.</p>
                    <p class="Overlay-text">There’s an argument that personality has no real place in typography for wayfinding and signage. However, research suggests that, although functionality is the key priority, a lack of character is likely to subliminally disengage the reader and functionally compromise the attention the information receives. And, is there truly such a thing as a font that is merely functional?</p>
                    <p class="Overlay-text">Of course, fonts designed for this purpose always have a much greater life outside the arena for which they were designed. Frutiger, still the most ubiquitous font in airport and transport signage was commissioned in 1968 for Paris Charles de Gaulle Airport. But, of course, it has enjoyed huge success outside its intended use because it is simply a perfectly designed humanist sans-serif with, arguably, a good deal more unique character than the perfectly functional Univers that it replaced.</p>
                    <p class="Overlay-text">So, Stuart’s ambition for FS Millbank, was to analyse the specific requirements of wayfinding for a contemporary world - with the pace and volume of traffic and the technological changes that have altered the way travellers now see and absorb information. The font’s unique character would be driven by its functional specifics, coupled with a distinct personality that would stem from Fontsmith’s philosophical outlook and their particular sensibilities.</p>
                    <p class="Overlay-text">Stuart looked at typical legibility issues and commonly mis-read glyph combinations by testing with things like blur and sharp angle views. This revealed key issues that then informed some of the key glyphs in the character set. He discovered that the sharp angles in characters like the cap ‘A, W and M’ bunched-up visually, compromising legibility at distances and in situations with restricted view. This led to a decision that significantly informed the look of the font. The new font had to be opened-up across the board, whilst keeping the overall line length the same, or shorter than its predecessors.</p>
                    <p class="Overlay-text">This and other key challenges risked driving the entire direction of the font towards the merely functional. In an effort to ensure he had the creative freedom to design a font that would also have relevance outside the context for which it was designed, Stuart turned for inspiration to the words of Matthew Carter and his creative philosophy and a working method when he had similar restrictions designing the Microsoft screen font Verdana. ‘Design from the inside out’ was the mantra that helped him keep the process on track. This meant working on the core visual idea and fundamental personality of the font first, so that it was robust enough to survive the rigours that functional expediency would exert on it. Using this mantra, Stuart concentrated on what were the ultimate important parameters before adding design nuances and detail to make something beautiful as well as functional.</p>
                    <p class="Overlay-text">The result is a font with its own, particular beauty. It flows exquisitely, is defiantly human and, as for personality, it’s brimming with it. But fundamentally, its real power lies in its utterly unbreakable legibility. Researched extensively, FS Millbank has been expertly crafted and developed for its pure clarity.</p>
                </div>
            </div>
            <div id="IconSet" class="Overlay-content">
                <div class="Overlay-wrap">
                    <h2 class="hide">FS Millbank Icon</h2>
                    <h3 class="Overlay-title">Arrows</h3>
                    <div class="iconFont">Ä Å | ¥ à â ∆ ä - – — _</div>
                    <div class="Overlay-line"></div>
                    <h3 class="Overlay-title">Transport</h3>
                    <div class="iconFont">0 1 2 3 4 5 6 7 8 9 ı : ; , . Ï π ∏ € y Ë È</div>
                    <div class="Overlay-line"></div>
                    <h3 class="Overlay-title">Information</h3>
                    <div class="iconFont">M W B T D R Î E e P S · b c p L l h é ∞ N F H w f i ? G m d r ç ƒ u a © ^ … A £ $ C t è s ˙ ∫ ¿ k % Ó Ò j J ® ! ¡ ß # ¢ Í œ Œ Â µ</div>
                    <div class="Overlay-line"></div>
                    <h3 class="Overlay-title">Borders</h3>
                    <div class="iconFont">X Y Z</div>
                    <div class="Overlay-line"></div>
                    <h3 class="Overlay-title">User Interface</h3>
                    <div class="iconFont">Ø > § = • ≤ ≥ ‰ √ ◊ x o K q z ª º ‡ ¶ ˜ ≈ Ç Ù ™ Æ æ { } / \ ( ) [ ] V v ~ À + ± “ ‘ ” á å Á O Q I » Ê ’ « n „ @ é † g ∑ ‹ U ∂ * › &</div>
                </div>
            </div>
            <div id="Form" class="Overlay-content">
                <div class="Overlay-wrap">
                    <h2 class="Overlay-title">Stay informed</h2>
                    <p class="Overlay-text noMargin">Fill out your details below to keep up to date with news, releases and special offers from Fontsmith.</p>
                    <form action="" method="post" class="Overlay-text">
                        <fieldset>
                            <ol>
                                <li>
                                    <label for="first_name">First name <span class="yellow">*</span></label>
                                    <input id="first_name" type="text" name="registration[first_name]" required />
                                    <input type="hidden" value="1" name="registration[opt_in]">
                                </li>
                                <li>
                                    <label for="last_name">Last name <span class="yellow">*</span></label>
                                    <input id="last_name" type="text" name="registration[last_name]" required />
                                </li>
                                <li>
                                    <label for="job_title">Job title</label>
                                    <input id="job_title" type="text" name="registration[job_title]" />
                                </li>
                                <li>
                                    <label for="company_name">Company name <span class="yellow">*</span></label>
                                    <input id="company_name" type="text" name="registration[company_name]" required />
                                </li>
                                <li>
                                    <label for="email_address">Email <span class="yellow">*</span></label>
                                    <input id="email_address" type="email" name="registration[email_address]" required />
                                </li>
                                <li>
                                    <label for="address_1">Address (line 1) <span class="yellow">*</span></label>
                                    <input id="address_1" type="text" name="registration[address_1]" required />
                                </li>
                                <li>
                                    <label for="address_2">Address (line 2)</label>
                                    <input id="address_2" type="text" name="registration[address_2]" />
                                </li>
                                <li>
                                    <label for="town">Town/city <span class="yellow">*</span></label>
                                    <input id="town" type="text" name="registration[town]" required />
                                </li>
                                <li>
                                    <label for="postcode">Postcode <span class="yellow">*</span></label>
                                    <input id="postcode" type="text" name="registration[postcode]" required />
                                </li>
                                <li>
                                    <label for="country_id">Country <span class="yellow">*</span></label>
                                    <div class="select">
                                        <select id="country_id" name="registration[country_id]" required />
                                        <option value="1">United Kingdom</option>
                                        <option value="2">United States</option>
                                        <option value="3">Afghanistan</option>
                                        <option value="4">Albania</option>
                                        <option value="5">Algeria</option>
                                        <option value="6">Andorra</option>
                                        <option value="7">Angola</option>
                                        <option value="8">Argentina</option>
                                        <option value="9">Armenia</option>
                                        <option value="10">Australia</option>
                                        <option value="11">Austria</option>
                                        <option value="12">Azerbaijan</option>
                                        <option value="13">Bahamas</option>
                                        <option value="14">Bahrain</option>
                                        <option value="15">Bangladesh</option>
                                        <option value="16">Barbados</option>
                                        <option value="17">Belarus</option>
                                        <option value="18">Belgium</option>
                                        <option value="19">Belize</option>
                                        <option value="20">Benin</option>
                                        <option value="21">Bermuda</option>
                                        <option value="22">Bolivia</option>
                                        <option value="23">Bosnia and Herzegovina</option>
                                        <option value="24">Botswana</option>
                                        <option value="25">Brazil</option>
                                        <option value="26">Brunei Darussalam</option>
                                        <option value="27">Bulgaria</option>
                                        <option value="28">Burkina Faso</option>
                                        <option value="29">Burundi</option>
                                        <option value="30">Cambodia</option>
                                        <option value="31">Cameroon</option>
                                        <option value="32">Canada</option>
                                        <option value="33">Central African Republic</option>
                                        <option value="34">Chad</option>
                                        <option value="35">Chile</option>
                                        <option value="36">China</option>
                                        <option value="37">Colombia</option>
                                        <option value="38">Congo</option>
                                        <option value="39">Costa Rica</option>
                                        <option value="40">Cote D’ivoire</option>
                                        <option value="41">Croatia</option>
                                        <option value="42">Cuba</option>
                                        <option value="43">Cyprus</option>
                                        <option value="44">Czech Republic</option>
                                        <option value="45">Denmark</option>
                                        <option value="46">Djibouti</option>
                                        <option value="47">Dominica</option>
                                        <option value="48">Dominican Republic</option>
                                        <option value="49">East Timor</option>
                                        <option value="50">Ecuador</option>
                                        <option value="51">Egypt</option>
                                        <option value="52">El Salvador</option>
                                        <option value="53">Equatorial Guinea</option>
                                        <option value="54">Eritrea</option>
                                        <option value="55">Estonia</option>
                                        <option value="56">Ethiopia</option>
                                        <option value="57">Falkland Islands (Malvinas)</option>
                                        <option value="58">Faroe Islands</option>
                                        <option value="59">Fiji</option>
                                        <option value="60">Finland</option>
                                        <option value="61">France</option>
                                        <option value="62">French Guiana</option>
                                        <option value="63">French Polynesia</option>
                                        <option value="64">Gabon</option>
                                        <option value="65">Gambia</option>
                                        <option value="66">Georgia</option>
                                        <option value="67">Germany</option>
                                        <option value="68">Ghana</option>
                                        <option value="69">Gibraltar</option>
                                        <option value="70">Greece</option>
                                        <option value="71">Greenland</option>
                                        <option value="72">Grenada</option>
                                        <option value="73">Guadeloupe</option>
                                        <option value="74">Guam</option>
                                        <option value="75">Guatemala</option>
                                        <option value="76">Guinea</option>
                                        <option value="77">Guyana</option>
                                        <option value="78">Haiti</option>
                                        <option value="79">Honduras</option>
                                        <option value="80">Hong Kong</option>
                                        <option value="81">Hungary</option>
                                        <option value="82">Iceland</option>
                                        <option value="83">India</option>
                                        <option value="84">Indonesia</option>
                                        <option value="85">Iran</option>
                                        <option value="86">Iraq</option>
                                        <option value="87">Ireland</option>
                                        <option value="88">Israel</option>
                                        <option value="89">Italy</option>
                                        <option value="90">Jamaica</option>
                                        <option value="91">Japan</option>
                                        <option value="92">Jordan</option>
                                        <option value="93">Kazakhstan</option>
                                        <option value="94">Kenya</option>
                                        <option value="95">Korea, Democratic People’s Republic of</option>
                                        <option value="96">Korea, Republic of</option>
                                        <option value="97">Kuwait</option>
                                        <option value="98">Kyrgyzstan</option>
                                        <option value="99">Laos</option>
                                        <option value="100">Latvia</option>
                                        <option value="101">Lebanon</option>
                                        <option value="102">Lesotho</option>
                                        <option value="103">Liberia</option>
                                        <option value="104">Liechtenstein</option>
                                        <option value="105">Lithuania</option>
                                        <option value="106">Luxembourg</option>
                                        <option value="107">Macedonia</option>
                                        <option value="108">Madagascar</option>
                                        <option value="109">Malawi</option>
                                        <option value="110">Malaysia</option>
                                        <option value="111">Maldives</option>
                                        <option value="112">Mali</option>
                                        <option value="113">Malta</option>
                                        <option value="114">Martinique</option>
                                        <option value="115">Mauritania</option>
                                        <option value="116">Mauritius</option>
                                        <option value="117">Mexico</option>
                                        <option value="118">Micronesia</option>
                                        <option value="119">Moldova</option>
                                        <option value="120">Monaco</option>
                                        <option value="121">Mongolia</option>
                                        <option value="122">Morocco</option>
                                        <option value="123">Mozambique</option>
                                        <option value="124">Namibia</option>
                                        <option value="125">Nepal</option>
                                        <option value="126">Netherlands</option>
                                        <option value="127">New Caledonia</option>
                                        <option value="128">New Zealand</option>
                                        <option value="129">Nicaragua</option>
                                        <option value="130">Niger</option>
                                        <option value="131">Nigeria</option>
                                        <option value="132">Norway</option>
                                        <option value="133">Oman</option>
                                        <option value="134">Pakistan</option>
                                        <option value="135">Palestinian Territory</option>
                                        <option value="136">Panama</option>
                                        <option value="137">Papua New Guinea</option>
                                        <option value="138">Paraguay</option>
                                        <option value="139">Peru</option>
                                        <option value="140">Philippines</option>
                                        <option value="141">Poland</option>
                                        <option value="142">Portugal</option>
                                        <option value="143">Puerto Rico</option>
                                        <option value="144">Qatar</option>
                                        <option value="145">Romania</option>
                                        <option value="146">Russian Federation</option>
                                        <option value="147">Rwanda</option>
                                        <option value="148">Saudi Arabia</option>
                                        <option value="149">Senegal</option>
                                        <option value="150">Seychelles</option>
                                        <option value="151">Sierra Leone</option>
                                        <option value="152">Singapore</option>
                                        <option value="153">Slovakia</option>
                                        <option value="154">Slovenia</option>
                                        <option value="155">Somalia</option>
                                        <option value="156">South Africa</option>
                                        <option value="157">Spain</option>
                                        <option value="158">Sri Lanka</option>
                                        <option value="159">Sudan</option>
                                        <option value="160">Swaziland</option>
                                        <option value="161">Sweden</option>
                                        <option value="162">Switzerland</option>
                                        <option value="163">Syrian Arab Republic</option>
                                        <option value="164">Taiwan</option>
                                        <option value="165">Tajikistan</option>
                                        <option value="166">Tanzania</option>
                                        <option value="167">Thailand</option>
                                        <option value="168">Tonga</option>
                                        <option value="169">Trinidad and Tobago</option>
                                        <option value="170">Tunisia</option>
                                        <option value="171">Turkey</option>
                                        <option value="172">Turkmenistan</option>
                                        <option value="173">Uganda</option>
                                        <option value="174">Ukraine</option>
                                        <option value="175">United Arab Emirates</option>
                                        <option value="176">Uruguay</option>
                                        <option value="177">Uzbekistan</option>
                                        <option value="178">Venezuela</option>
                                        <option value="179">Vietnam</option>
                                        <option value="180">Western Sahara</option>
                                        <option value="181">Yemen</option>
                                        <option value="182">Yugoslavia</option>
                                        <option value="183">Zambia</option>
                                        <option value="184">Zimbabwe</option>
                                        </select>
                                    </div>
                                </li>
                            </ol>
                        </fieldset>
                        <div class="Grid">
                            <div class="Grid-item oneHalf">
                                <button class="submitButton" type="submit">Submit</button>
                            </div><div class="Grid-item oneHalf submitFeedback">
                                <div></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var body = document.body;
            if (!body.dataset) {
                document.write("<script src=\"/assets/html5-dataset.js\"></scr" + "ipt>");
            }
        </script>

        <script src="assets/impress.js"></script>
        <script>impress().init();</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="assets/jquery.touchSwipe.min.js"></script>
        <script src="assets/script.js"></script>
        <script src="assets/registration.js"></script>
        <script src="assets/angular.min.js"></script>
        <script src="assets/homeController.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-41750697-12', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>