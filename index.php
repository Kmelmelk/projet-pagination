<!DOCTYPE html>
<html dir="ltr" lang="fr-FR" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <!-- Gestion de l'HTML -->
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Language" content="fr-FR" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Expires" content="none" />
    <!-- Gestion des robots -->
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Spin Interactive" />
    <meta name="Author" content="Spin interactive" />
    <meta name="Publisher" content="Spin Interactive" />
    <meta name="Revisit-After" content="10 days" />
    <!-- Gestion du viewport -->
    <meta name="viewport" id="myViewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
    <link rel="image_src" href="" />
    <!-- Gestion SEO -->
    <title>Club Med - Interaktive Resortauswahl</title>
    <meta name="description" content="" />
    <!-- Gestion Réseaux sociaux -->
    <meta property="og:url" content="http://ns.clubmed.com/fbs/2016/133/MAPWINTER/index-de_CH.html" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Club Med" />
    <meta property="og:title" content="Club Med - finden Sie Ihr Traum-Skiresort in den Alpen !"/>
    <meta property="og:description" content="Ich habe das #ClubMed Ski-Resort meiner Träume gefunden. Guck Dir doch auch mal die besten Skigebiete für all-inclusive Ferien im Schnee hier an !" />
    <meta property="og:image" content="http://ns.clubmed.com/fbs/2016/133/MAPWINTER/assets/img/carte_interactive_neige.jpg" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script type="text/javascript" src="lib/cssbrowserselector.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9oQfMeXTZgSSR2Z6gCUrCGFS6VwP5scE&language=de"></script>
    <script type="text/javascript" src="lib/jquery.js"></script>
    <script type="text/javascript" src="lib/iscroll.js"></script>
    <script type="text/javascript" src="lib/infobubble.js"></script>
    <script type="text/javascript" src="lib/session.js"></script>
    <script type="text/javascript" src="lib/loader.js"></script>
    <script type="text/javascript" src="lib/tools.js"></script>
    <!--<script type="text/javascript" src="lib/analytics.js"></script>-->
    <script type="text/javascript">
        var lang;
        var locale = "de_CH";
        if((new RegExp(/\?lang=([a-zA-Z_]{5})$/).exec(location.href)) != null) {
            locale = (new RegExp(/\?lang=([a-zA-Z_]{5})$/).exec(location.href))[1];
        }
        $.ajax({async:false, cache:false, dataType:"json" , url:"data/locale/"+locale+"/ui.json", success: function(data) {
            lang = data;
        }});
        $(function() {
            $.each($(".translate"), function(a, b) {
                $(b).html(lang[$(b).data("translate")]);
            });
        });
    </script>
    <script type="text/javascript" src="eventlistener.js"></script>
    <script type="text/javascript" src="modules/filtres.js"></script>
    <script type="text/javascript" src="modules/fiche.village.js"></script>
    <script type="text/javascript" src="modules/fiche.domaine.js"></script>
    <script type="text/javascript" src="modules/carousel.js"></script>
    <script type="text/javascript" src="modules/appdata.js"></script>
    <script type="text/javascript" src="modules/map.style.js"></script>
    <script type="text/javascript" src="modules/map.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72862504-8', 'auto');
    ga('send', 'pageview');
    </script>
    <script type="text/javascript" id="dloader-cm" src="//ns.clubmed.com/fbs/RWD/header_footer_v2/dloader.js?locale=de_CH&utm=map"></script>
    <style type="text/css">
        @media (min-width: 801px) {
            #CommonLayout-header span { color:#333333!important;border-color:#333333!important; }
            #CommonLayout-header .Header-col-logo svg path { fill:#333333!important; }
        }
        @font-face{font-family:"TradeGothicSpin";
            src:url('fonts/TradeGothicLTProBold.eot');
            src:url('fonts/TradeGothicLTProBold.eot?#iefix') format('embedded-opentype'),
            url('fonts/TradeGothicLTProBold.woff') format('woff'),
            url('fonts/TradeGothicLTProBold.svg#abcd') format('svg'),
            url('fonts/TradeGothicLTProBold.ttf') format('truetype');
            font-weight:700;
            font-style:normal;
        }
    </style>
</head>
<body class="carte_neige">
<div style="visibility:hidden;width:0;height:0;left:0;top:0;position:absolute;">
    <img src="assets/img/marker-visited.png"/>
    <img src="assets/img/marker-favorite.png"/>
    <img src="assets/img/marker-active.png"/>
    <img src="assets/img/marker-active-favorite.png"/>
    <img src="assets/img/marker.png"/>
</div>
<div id="main" class="new_header">
    <header id="heading">
        <div class="bandeau">
            <script>document.write('<img src="'+lang.bandeau+'" />')</script>
            <p class="mobile_header_text"><span class="translate" data-translate="slogan1" style="display:block"></span><span class="translate" data-translate="slogan2"></span></p>
            <ul class="rs">
                <li id="fb" class="translate" data-translate="facebook_share"></li>
                <li id="tw" class="translate" data-translate="twitter_share"></li>
            </ul>
        </div>
        <div id="button_random">
            <p class="translate" data-translate="btn_carte"></p>
            <div class="pulse pulsar time50"></div>
            <div class="pulse wait pulsar time50"></div>
        </div>
    </header>
    <div class="map_content">

        <div id="map"></div>
        <div id="carousel_container">
            <div id="arrow_left" class="arrow"><img src="assets/img/arrow_left.svg" alt="Flèche de gauche" /></div>
            <div id="arrow_right" class="arrow"><img src="assets/img/arrow_right.svg" alt="Flèche de droite" /></div>
            <div class="container">
                <div id="carousel">
                    <ul>
                        <li class="panel" data-id="{id}" data-ga="{ga}">
                            <span class="cmfont like {coeur}">&#xe91a;</span>
                            {img}
                            <div class="village-text">
                                <p class="tridents">{score} <span class="cmfont">&#xe919;</span></p>
                                <p>{pays}<br /><span>{nom}</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div id="filtres" class="masked">
            <div class="wrapper">
                <header>
                    <p class="translate" data-translate="filter_label"></p>
                </header>
                <div id="noresult-msg" class="masked translate" data-translate="criteria_noresult"></div>
                <div class="contrainer">
                    <div id="groupe_selection" class="filter_part displayed">
                        <label class="translate" data-translate="criteria_label"></label>
                        <ul class="icons">
                            <input type="hidden" name="groupe" value="" />
                            <li class="c1" data-value="enfants">
                                <span class="cmfont">&#xe90e;<div class="circle"></div></span>
                                <p class="c1_title translate" data-translate="criteria_children"></p>
                            </li>
                            <li class="c2" data-value="sans_enfants">
                                <span class="cmfont">&#xe90d;<div class="circle"></div></span>
                                <p class="c2_title translate" data-translate="criteria_whithout_children"></p>
                            </li>
                        </ul>
                    </div>
                    <div id="age_selection" class="filter_part">
                        <ul>
                            <input type="hidden" name="enfant_tranche" value="" />
                            <li class="checkbox d1" data-value="0-1">
                                <p class="translate" data-translate="criteria_slice1"></p>
                            </li>
                            <li class="checkbox d2" data-value="2-3">
                                <p class="translate" data-translate="criteria_slice2"></p>
                            </li>
                            <li class="checkbox d3" data-value="4-10">
                                <p class="translate" data-translate="criteria_slice3"></p>
                            </li>
                            <li class="checkbox d4" data-value="11-17">
                                <p class="translate" data-translate="criteria_slice4"></p>
                            </li>
                        </ul>
                    </div>
                    <div id="lieu_selection" class="filter_part ">
                        <label class="translate" data-translate="mood_label"></label>
                        <ul class="icons">
                            <input type="hidden" name="station_type" value="" />
                            <li class="e1" data-value="sportive">
                                <span class="cmfont">&#xe92c;<div class="circle"></div></span>
                                <p class="e1_title translate" data-translate="mood_option1"></p>
                            </li>
                            <li class="e2" data-value="charme">
                                <span class="cmfont">&#xe931;<div class="circle"></div></span>
                                <p class="e2_title translate" data-translate="mood_option2"></p>
                            </li>
                        </ul>
                    </div>
                    <div id="skis_aux_pieds" class="filter_part ">
                        <label class="translate" data-translate="skis_aux_pieds_label"></label>
                        <ul>
                            <input type="hidden" name="skis_aux_pieds" value="" />
                            <li class="checkbox z" data-value="0">
                                <p class="translate" data-translate="criteria_slice5"></p>
                            </li>
                        </ul>
                    </div>

                    <div id="periode_selection" class="filter_part ">
                        <label class="translate" data-translate="period_label"></label>
                        <input type="hidden" name="domaine" value=""/>
                        <ul>
                            <span class="option cmfont arrow">&#xe903;</span>
                            <li class="option selected translate" data-translate="period_option1" value=""></li>
                            <li class="option hover translate" data-translate="period_option2" value=""></li>
                        </ul>
                    </div>

                    <div id="activite_selection" class="filter_part">
                        <label class="translate" data-translate="activity_label"></label>
                        <ul class="icons">
                            <input type="hidden" name="activite" value="" />
                            <li class="f1" data-value="detente">
                                <span class="cmfont">&#xe930;<div class="circle"></div></span>
                                <p class="f1_title translate" data-translate="activity_option1"></p>
                            </li>
                            <li class="f2" data-value="sport_varies">
                                <span class="cmfont">&#xe92f;<div class="circle"></div></span>
                                <p class="f2_title translate" data-translate="activity_option2"></p>
                            </li>
                            <li class="f3" data-value="shopping">
                                <span class="cmfont">&#xe92e;<div class="circle"></div></span>
                                <p class="f3_title translate" data-translate="activity_option3"></p>
                            </li>
                        </ul>
                    </div>
                    <div id="buttons" class="filter_part">
                        <ul>
                            <li id="new_search" class="translate" data-translate="reset_form1"></li>
                            <li id="go_search" class="translate" data-translate="reset_form2"></li>
                        </ul>
                    </div>
                </div>
                <div id="resultcount"></div>
                <div id="slide">
                    <div class="container">
                        <div class="back"></div>
                        <span class="cmfont">&#xe906;</span>
                    </div>
                </div>
                <div id="allinclusive">
                    <header>
                        <p class="translate" data-translate="allinclusive_title"></p>
                        <p class="translate" data-translate="allinclusive_title_image"></p>
                    </header>
                    <div>
                        <ul>
                            <li class="translate" data-translate="allinclusive_1"></li>
                            <li class="translate" data-translate="allinclusive_2"></li>
                            <li class="translate" data-translate="allinclusive_3"></li>
                            <li class="translate" data-translate="allinclusive_4"></li>
                            <li class="translate" data-translate="allinclusive_5"></li>
                            <li class="translate" data-translate="allinclusive_6"></li>
                            <li class="translate" data-translate="allinclusive_7"></li>
                            <li class="translate" data-translate="allinclusive_8"></li>
                        </ul>
                        <p class="translate" data-translate="allinclusive_note"></p>
                    </div>
                </div>
            </div>

            <div id="date_options">
                <div class="back"></div>
                <div class="container">
                    <ul>
                        <li class="real_option" value=""><span class="letter">T<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_0"></span></li>
                        <li class="real_option" value="01"><span class="letter">A<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_1"></span></li>
                        <li class="real_option" value="02"><span class="letter">C<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_2"></span></li>
                        <li class="real_option" value="03"><span class="letter">E<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_3"></span></li>
                        <li class="real_option" value="04"><span class="letter">G<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_4"></span></li>
                        <li class="real_option" value="05"><span class="letter">G<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_5"></span></li>
                        <li class="real_option" value="06"><span class="letter">G<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_6"></span></li>
                        <li class="real_option" value="07"><span class="letter">G<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_7"></span></li>
                        <li class="real_option" value="08"><span class="letter">H<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_8"></span></li>
                        <li class="real_option" value="09"><span class="letter">L<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_9"></span></li>
                        <li class="real_option" value="10"><span class="letter">L<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_10"></span></li>
                        <li class="real_option" value="11"><span class="letter">L<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_11"></span></li>
                        <li class="real_option" value="12"><span class="letter">P<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_12"></span></li>
                        <li class="real_option" value="13"><span class="letter">P<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_13"></span></li>
                        <li class="real_option" value="14"><span class="letter">V<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_14"></span></li>
                        <li class="real_option" value="15"><span class="letter">V<span class="cmfont">&#xe901;</span></span><span class="name translate" data-translate="domaine_15"></span></li>
                        <li class="scroll_arrow"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAADxklEQVR4Xu2cS24TQRRFkwkTPutBAqYwQYgwZnFsADHiuwDEeoAJGVEluZGRLMt9uxy/uve0VFIGfk7uPSfPjjrJ9RVXdAPX0ekJf4UA4RIgAAKENxAenw2AAOENhMdnAyBAeAPh8dkACBDeQHh8NgAChDcQHp8NgADhDYTHZwMgQHgD4fHZAAgQ3kB4fDYAAoQ3EB6fDYAA4Q2Ex2cDIEB4A+Hx2QAIEN5AeHw2AAKENxAenw2AAOENhMdnAyBAeAPh8dkACBDeQHh8NgAChDcQHp8NgADhDYTHZwMgQHgD4fHZAAgQ3kB4/Oob4GHj82tyRqUzVBbgWQP/oZ237XyZVIKX7et+186rdr5XzFBVgA7/czv32/nTzusJJejw37dzr53f7byoKEFFAZ7uYHf4yzWbBPvwlwwlJagmwCH4s0lwCH5ZCSoJ0OH3tf/gyGtl9U1wDH5JCaoI8GS39o/BXwq83b0n6LJUuk6BX06CCgKsgV9VgjXwS0lQQYCvrZHnwrdylU2gwF/iftv9dCDEHzNSQYBHLUqX4LEQ6dISbIH/Ywf/p5B72EgFAXqYGSWYHn4vvooAs0lgAb+aALNIYAO/ogAjJLhpT/Jp2Ivk/09kBb+qAFUlsINfWYBqEljCry5AFQls4c8gwKUlsIY/iwCXksAe/kwCjJDgTXuSjyf+dBABfzYB7kqCGPgzCnBuCaLgzyrAuSSIgz+zAKMliIQ/uwCjJOg3xJbf3j3xPeK/h5W4pbv2i95/fKW7gWqOrbeS++ftv7q99poevsMGWKBtkWAt+P54C/hOAmx9OVgjgQ18NwHuQgIr+I4CnFMCO/iuApxDAkv4zgKMlMAWvrsAIySwhp8gwBYJ7OGnCKBIEAE/SYA1EsTATxPgFAmi4CcKcEyCOPipAhySIBJ+sgD7EvSP+z9wuuhf6a65GTHysQ63g7f00e8i9isSfvoG2CKOzWz6BrABqQZBALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcZAALU5kzkEMAGpxkAAtTmTOQQwAanGQAC1OZM5BDABqcb4CzCMvIGoOQfpAAAAAElFTkSuQmCC" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="fiche-village">
        <header id="little_carousel_container">
            <div id="close" class="cmfont">&#xe900;</div>
            <div id="little_arrow_left" class="arrow"><span class="cmfont">&#xe904;</span></div>
            <div id="little_arrow_right" class="arrow"><span class="cmfont">&#xe905;</span></div>
            <ul id="little_indicators">
                {indicators}
            </ul>
            <div class="container">
                <div id="little_carousel">
                    <ul>
                        {village_pictures}
                    </ul>
                </div>
            </div>
        </header>
        <div class="content">
            <header>
                <div class="note">
                    <p>{score}<span class="cmfont trident">&#xe919;</span></p>
                </div>
                <div class="name">
                    <p class="pays">{pays} - {altitude}</p>
                    <p class="village">{nom}</p>
                </div>
                <div class="like">
                    <span class="cmfont {coeur}">&#xe91a;</span>
                </div>
            </header>
            <div id="btn_domaine" data-domaine={id_domaine} data-village={id_village}>
                <span class="cmfont montagne">&#xe918;</span><span class="translate text_montagne" data-translate="btn_domaine_title"></span><span class="cmfont arrow_domaine">&#xe907;</span>
            </div>
            <div class="content_other">
                <div class="sports">
                    <ul>
                        {sports_enfants}
                    </ul>
                    <img src="assets/img/{school_ski}" />
                </div>
                <div class="comments">
                    <div class="tripadvisor arrowed mini">
                        {tripadvisor}
                    </div>
                    <div class="the_comment {avis_class}">
                        <p>{avis}</p>
                    </div>
                    <div class="client {author_class}">
                        <img class="comm_img" src="assets/img/comm.svg" />
                        <p class="client_name">{author}<span class="status {status_class}">, {status}</span></p>
                    </div>
                </div>
                <footer>
                    <a class="cta translate" data-translate="prices_info" href="{url}"></a>
                    <a class="cta mobile translate" data-translate="village_info" href="{url}"></a>
                    <span class="allinclusivelink translate" data-translate="allinclusive_link"></span>
                </footer>
            </div>
        </div>
    </div>


    <div id="fiche-domaine">
        <div class="content">
                <div id="back_fiche_village" class="cmfont">&#xe933;</div>
                <div id="close_domaine" class="cmfont">&#xe900;</div>
            <header>
                <div class="info_domaine">
                    <p>Informationen zum Skigebiet</p>
                </div>
                <div class="note">
                    <p><span class="cmfont trident">&#xe918;</span><span class="domaine"> {nom}</span></p>
                </div>
            </header>
            <div class="content_other">
                <div class="infos_sup">
                    <span class="translate data_domaine" data-translate="alt_min"></span><span class="text_infos">{altitude_min} <span class="translate" data-translate="meters"></span></span>
                    <span class="translate data_domaine" data-translate="alt_max"></span><span class="text_infos">{altitude_max} <span class="translate" data-translate="meters"></span></span>
                    <span class="translate data_domaine" data-translate="nb_km_piste"></span><span class="text_infos">{nb_km_piste} <span class="translate" data-translate="km_piste"></span></span>
                    <span class="translate data_domaine" data-translate="remonte"></span><span class="text_infos">{nb_remontees}</span>
                    <span class="translate data_domaine" data-translate="difficulte"></span>
                    <span class="piste_ski data_domaine">
                        <ul>
                            <li class="piste_green">{nb_piste_verte}</li>
                            <li class="piste_blue">{nb_piste_bleu}</li>
                            <li class="piste_red">{nb_piste_rouge}</li>
                            <li class="piste_black">{nb_piste_noir}</li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile_filter" class="masked">
        <span class="arrow cmfont left">&#xe906;</span>
        <span class="arrow cmfont right">&#xe906;</span>
        <p class="masked translate" data-translate="mobile_criteria_label"></p>
        <p class="opened translate" data-translate="mobile_back_button"></p>
    </div>

    <div id="back_village_mobile"></div>
    <div id="back_domaine_mobile"></div>

    <section id="loader">
        <div class="content">
            <div class="picto trident">
                <span class="cmfont">&#xe919;</span>
            </div>
            <div class="picto plage">
                <span class="cmfont">&#xe917;</span>
            </div>
            <div class="picto montagne">
                <span class="cmfont">&#xe918;</span>
            </div>
        </div>
    </section>
</div>
<section id="popin">
    <div class="back"></div>
    <div class="container">
        <header>
            <div class="left translate" data-translate="mobile_back_button"></div>
            <div class="right"><span class="cmfont">&#xe900;</span></div>
        </header>
        <div class="content">
            <ul>
                <li class="fb">
                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://ns.clubmed.com/fbs/Neige/Mobile/"></a>
                    <span class="cmfont translate" data-translate="via_fb">&#xe928;</span>
                </li>
                <li class="tw">
                    <a target="_blank" href="http://twitter.com/share?text=Club Med, The Place to Ski ! 22 Villages d’exception, un service tout compris.&url=http://ns.clubmed.com/fbs/Neige/Mobile/"></a>
                    <span class="cmfont translate" data-translate="via_tw">&#xe929;</span>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="popin_video">
    <div class="back close"></div>
    <div class="container">
        <header>
            <div class="note">
                <p>4<span class="cmfont trident">&#xe919;</span></p>
            </div>
            <div class="name">
                <p class="pays">Portugal</p>
                <p class="village">Da pailabras</p>
            </div>
            <div class="close">
                <span></span>
                <span></span>
            </div>
        </header>
        <div class="content">
            <iframe src="https://www.youtube.com/embed/0doC_1MBH-8" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
</body>
<script type="text/javascript">
    if(parent.window.innerWidth < 590) {
        _satellite.pageBottom();
    }
</script>
</html>
