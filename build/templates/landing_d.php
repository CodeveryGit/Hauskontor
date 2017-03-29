
<!--
Template Name: Landing D

--><!DOCTYPE html>
<html>
  <head>
    <title><?php the_field('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon-180x180.png">
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1052047464916648&amp;ev=PageView&amp;noscript=1"></noscript><?php wp_head(); ?>
  </head>
  <body><img src="<?php the_field('d_s1_bg'); ?>" style="display: none;" class="preload">
    <div class="head clearfix hide-notmobile fixedhead">
      <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
        <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('mobile_button_link', 456); ?>">
        <button class="signup login Einloggen"><?php the_field('mobile_button_text', 456); ?></button></a><?php endif; ?>
      <div class="phone fixedphone"><a href="<?php the_field('phone_link', 456); ?>"><img src="<?php the_field('phone_icon', 456); ?>">
          <div id="shadow"></div></a></div>
    </div>
    <div style="background-image: url(<?php the_field('d_s1_bg'); ?>)" id="block1" class="background-d">
      <div class="head clearfix hide-onmobile">
        <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
          <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('second_button_link', 456); ?>">
          <button class="signup login"><?php the_field('second_button_text', 456); ?></button></a><a href="<?php the_field('first_button_link', 456); ?>">
          <button class="signup whitehov"><?php the_field('first_button_text', 456); ?></button></a><?php endif; ?>
        <div class="info">
          <p class="infotext"><?php the_field('phone_number', 456); ?></p>
        </div>
      </div>
      <div class="cont cont-d">
        <h1 id="h1" class="mainheadline mainheadline-d"><?php the_field('d_s1_headline'); ?></h1>
        <h3 class="headline-d"><?php the_field('d_s1_h3'); ?></h3>
        <p class="p-d hide-onmobile"><?php the_field('d_s1_p'); ?></p>
        <div class="btndiv"><a href="<?php the_field('d_s1_mid_button_link'); ?>">
            <button class="btn-land btn-land-b"><?php the_field('d_s1_mid_button_text'); ?></button></a></div>
      </div>
    </div>
    <div id="block2" class="block2-d">
      <div class="content clearfix padbot padbot-b">
        <div class="lefttext lefttext-d">
          <h2 class="headline2 nomarg marg-b"><?php the_field('d_s2_headline'); ?></h2>
          <p class="padtwony p2 nopad b2-font_d"><?php the_field('d_s2_p1'); ?></p>
          <p class="padtwony p2 nopad b2-font_d"><?php the_field('d_s2_p2'); ?></p>
          <p class="padtwony p2 nopad moblastp b2-font_d"><?php the_field('d_s2_p3'); ?></p>
        </div>
        <div class="pict pict-b pict-d"><img src="<?php the_field('d_s2_image'); ?>" class="building"></div>
      </div>
    </div>
    <div style="background-image: url(<?php the_field('d_s3_bg'); ?>)" id="block3" class="landing_d">
      <div class="content clearfix">
        <div class="backgroundgradient block2-gradient-b"></div>
        <h3 class="headline2 h2white"><?php the_field('d_s3_headline'); ?></h3>
        <div class="block blockpad-b hide-onmobile">
          <div class="clearfix">
            <div class="quater">
              <div class="circle">1</div>
            </div>
            <div class="quater">
              <div class="circle">2</div>
            </div>
            <div class="quater">
              <div class="circle">3</div>
            </div>
            <div class="quater">
              <div class="circle">4</div>
            </div>
            <div class="line"></div>
          </div>
          <div class="clearfix stepspad">
            <div class="steps">
              <h3 class="stepsheadline stepshead-b"><?php the_field('d_s3_step1'); ?></h3>
            </div>
            <div class="steps">
              <h3 class="stepsheadline stepshead-b"><?php the_field('d_s3_step2'); ?></h3>
            </div>
            <div class="steps">
              <h3 class="stepsheadline stepshead-b"><?php the_field('d_s3_step3'); ?></h3>
            </div>
            <div class="steps">
              <h3 class="stepsheadline stepshead-b"><?php the_field('d_s3_step4'); ?></h3>
            </div>
          </div>
        </div>
        <div class="block hide-notmobile">
          <div class="steps">
            <div class="quater">
              <div class="circle circle-b">1</div>
            </div>
            <div class="quater">
              <div class="circle circle-b">2</div>
            </div>
            <div class="quater">
              <div class="circle circle-b">3</div>
            </div>
            <div class="quater">
              <div class="circle circle-b">4</div>
            </div>
          </div>
          <div class="vertline vertline-b"></div>
          <div class="stepstext stepstext-b">
            <div class="quater">
              <h3 class="stepsheadline quat quat-d"><?php the_field('d_s3_step1'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat quat-d"><?php the_field('d_s3_step2'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat quat-d"><?php the_field('d_s3_step3'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat quat-d"><?php the_field('d_s3_step4'); ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="block4" class="block4-b">
      <div class="content">
        <h3 class="headline2 letspace"><?php the_field('d_s4_headline'); ?></h3>
        <div class="contain contain-b hide-onmobile">
          <div class="row imgmax">
            <div class="custom1"><img src="<?php the_field('d_s4_image_1'); ?>" id="img1"></div>
            <div class="custom1"><img src="<?php the_field('d_s4_image_2'); ?>" id="img2" class="img2-d"></div>
            <div class="custom1"><img src="<?php the_field('d_s4_image_3'); ?>" id="img3" class="img3-d"></div>
          </div>
          <div class="row imgmax padthirty padthirty-b">
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth firsth4 firsth4-b customlineheight b4-h4-d"><?php the_field('d_s4_head_for_image_1'); ?></h4>
              <p id="1stp" class="padtwony p2 p3 notbold textwidth textwidth-b customlineheight p-line"><?php the_field('d_s4_text_for_image_1'); ?></p>
            </div>
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth second-h4 customlineheight b4-h4-d"><?php the_field('d_s4_head_for_image_2'); ?></h4>
              <p class="padtwony p2 p3 textwidth textwidth-b customlineheight p-line"><?php the_field('d_s4_text_1_for_image_2'); ?></p>
              <p class="padtwony p2 p3 textwidth textwidth-b customlineheight p-line"><?php the_field('d_s4_text_2_for_image_2'); ?></p>
            </div>
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth customlineheight b4-h4-d"><?php the_field('d_s4_head_for_image_3'); ?></h4>
              <p class="padtwony p2 p3 textwidth textwidth-b customlineheight p-line"><?php the_field('d_s4_text_1_for_image_3'); ?></p>
              <p class="padtwony p2 p3 textwidth textwidth-b customlineheight p-line"><?php the_field('d_s4_text_2_for_image_3'); ?></p>
            </div>
          </div>
        </div>
        <div class="contain hide-notmobile">
          <div class="custom1"><img src="<?php the_field('d_s4_image_1'); ?>" class="img1">
            <h4 class="stepsheadline dark textwidth"><?php the_field('d_s4_head_for_image_1'); ?></h4>
            <p class="padtwony p2 p3 notbold textwidth firstmobp"><?php the_field('d_s4_text_for_image_1');  ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('d_s4_image_2'); ?>" class="img3">
            <h4 class="stepsheadline dark textwidth"><?php the_field('d_s4_head_for_image_2'); ?></h4>
            <p class="padtwony p2 p3 textwidth third-mobile-p"><?php the_field('d_s4_text_1_for_image_2'); the_field('d_s4_text_2_for_image_2'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('d_s4_image_3'); ?>" class="img5">
            <h4 class="stepsheadline dark textwidth"><?php the_field('d_s4_head_for_image_3'); ?></h4>
            <p class="padtwony p2 p3 textwidth"><?php the_field('d_s4_text_1_for_image_3'); the_field('d_s4_text_2_for_image_3'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div style="background-image: url(<?php the_field('d_s5_bg'); ?>)" id="block5" class="block5-bg block5-d">
      <div class="content">
        <div class="s8-bg-gradient-sect5 bg-position"></div>
        <p class="p-d p-d2 block5headline"><?php the_field('d_s5_text'); ?></p>
        <div class="btndiv btndivlesspad pad-b"><a href="/contacts">
            <button class="btn-land btn-b btn-b-b"><?php the_field('d_s5_button_text'); ?></button></a></div>
      </div>
    </div>
    <div id="section7" class="sect7">
      <div id="say" class="say-d"><?php the_field('d_s6_text'); ?></div>
      <div id="sign"><?php the_field('d_s6_text_sign'); ?></div>
    </div>
    <div id="section6" class="sect6">
      <input id="immobilienubersicht" type="radio" name="slider-page" checked="checked" class="slider-radio">
      <input id="kommunikation-mit-mietern" type="radio" name="slider-page" class="slider-radio">
      <input id="dokumentenverwaltung" type="radio" name="slider-page" class="slider-radio">
      <input id="dienstleistungen-buchen" type="radio" name="slider-page" class="slider-radio">
      <!--div#slider-links-->
      <!--    label#immobilienubersicht.link(for="immobilienubersicht") Immobilienübersicht-->
      <!--    label#kommunikation-mit-mietern.link(for="kommunikation-mit-mietern") Kommunikation mit Mietern-->
      <!--    label#dokumentenverwaltung.link(for="dokumentenverwaltung") Dokumentenverwaltung-->
      <!--    label#dienstleistungen-buchen.link(for="dienstleistungen-buchen") Dienstleistungen buchen-->
      <!--div#slider-arrows-->
      <!--    div#backward-->
      <!--        label#immobilienubersicht(for="immobilienubersicht") &#x276E;-->
      <!--        label#kommunikation-mit-mietern(for="kommunikation-mit-mietern") &#x276E;-->
      <!--        label#dokumentenverwaltung(for="dokumentenverwaltung") &#x276E;-->
      <!--        label#dienstleistungen-buchen(for="dienstleistungen-buchen") &#x276E;-->
      <!--    div#forward-->
      <!--        label#immobilienubersicht(for="immobilienubersicht") &#x276F;-->
      <!--        label#kommunikation-mit-mietern(for="kommunikation-mit-mietern") &#x276F;-->
      <!--        label#dokumentenverwaltung(for="dokumentenverwaltung") &#x276F;-->
      <!--        label#dienstleistungen-buchen(for="dienstleistungen-buchen") &#x276F;-->
      <div id="slider-content" class="slider-cont-b">
        <div id="slider-header" class="header-b"><?php the_field('d_s7_headline'); ?></div>
        <div id="slider-page" class="page-b pageheight-b">
          <div id="immobilienubersicht">
            <p class="padtwelve"><?php the_field('d_s7_p1'); ?></p>
            <p class="padtwelve"><?php the_field('d_s7_p2'); ?></p>
            <p class="padtwelve"><?php the_field('d_s7_p3'); ?></p>
            <p class="padtwelve bold"><?php the_field('d_s7_p4'); ?></p>
            <div id="kommunikation-mit-mietern"></div>
          </div>
          <div id="dokumentenverwaltung"></div>
          <div id="dienstleistungen-buchen"></div>
        </div>
        <!--div#slider-buttons
        //label#immobilienubersicht(for="immobilienubersicht")
        //label#kommunikation-mit-mietern(for="kommunikation-mit-mietern")
        //label#dokumentenverwaltung(for="dokumentenverwaltung")
        //label#dienstleistungen-buchen(for="dienstleistungen-buchen")
        -->
      </div>
      <div id="slider-image" class="slider-b">
        <div id="tablet">
          <div id="image-placeholder"><img id="immobilienubersicht" src="<?php the_field('d_s7_slide'); ?>"><img id="kommunikation-mit-mietern"><img id="dokumentenverwaltung"><img id="dienstleistungen-buchen"></div>
        </div>
      </div>
    </div>
    <div style="background-image: url(<?php the_field('d_s8_bg');?>); background-size: 1280px 101%;" id="section8" class="sect8">
      <div id="background" class="block8-bg">
        <div class="s8-bg-gradient s8-bg-gradient-sect8-d">
          <div class="wrapper wrapper-b">
            <div id="line" class="line-b"><?php the_field('d_s8_text'); ?></div>
            <label>
              <button></button><a href="<?php the_field('d_s8_button_link'); ?>">
                <div class="button button-d"><?php the_field('d_s8_button_text'); ?></div></a>
            </label>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div><a href="/"><img id="logo" src="<?php the_field('footer_logo', 241); ?>"></a></div>
      <div class="wrapper">
        <div id="DasEigentumerportal" class="column">
          <div class="header"><?php the_field('footer_column1_header', 241); ?></div>
          <div class="body"><a href="<?php the_field('home', 241); ?>" class="section"><?php the_field('home_label', 241); ?></a><a href="<?php the_field('kontakt', 241); ?>" class="section"><?php the_field('kontakt_label', 241); ?></a><a href="<?php the_field('impressum', 241); ?>" class="section"><?php the_field('impressum_label', 241); ?></a><a href="<?php the_field('agb', 241); ?>" class="section"><?php the_field('agb_label', 241); ?></a><span class="section"><?php the_field('copyright', 241); ?></span></div>
        </div>
        <div id="UnsereLeistungen" class="column">
          <div class="header"><?php the_field('footer_column2_header', 241); ?></div>
          <div class="body"><a href="<?php the_field('mietvertrag', 241); ?>" class="section"><?php the_field('mietvertrag_label', 241); ?></a><a href="<?php the_field('rauchmelder', 241); ?>" class="section"><?php the_field('rauchmelder_label', 241); ?></a><a href="<?php the_field('hausmeister', 241); ?>" class="section"><?php the_field('hausmeister_label', 241); ?></a><a href="<?php the_field('mieterhohung', 241); ?>" class="section"><?php the_field('mieterhohung_label', 241); ?></a><a href="<?php the_field('ubergabeprotokoll', 241); ?>" class="section"><?php the_field('ubergabeprotokoll_label', 241); ?></a></div>
        </div>
        <div id="logos" class="column"><a id="bvfi" href="javascript:void(0);"><img src="<?php the_field('footer_bvfi', 241); ?>"></a>
          <!--a#sehrgut(href="javascript:void(0);")img(src!="<?php echo get_template_directory_uri(); ?>/assets/img/footer/sehrgut.png")
          -->
          <!-- Ausgezeichnet.org-Siegel: Anfang-->
          <div id="auorg-bg" class="sehrgut"><a href="https://www.ausgezeichnet.org" target="_blank" title="Unabh&amp;auml;ngige Bewertungen, Kundenbewertungen und G&amp;uuml;tesiegel von Ausgezeichnet.org" class="auorg-br"><span style="font-size:8px;font-weight:normal;text-transform:uppercase;">Ausgezeichnet.org</span></a></div>
          <script type="text/javascript" src="//siegel.ausgezeichnet.org/widgets/js/57e917a90cf271618230d562/widget.js"></script>
          <!-- Ausgezeichnet.org-Siegel: Ende--><a id="ssl" href="javascript:void(0);"><img src="<?php the_field('footer_ssl', 241); ?>"></a>
        </div>
        <div id="NewsletterAbonnieren" class="column">
          <div class="header"><?php the_field('footer_column4_header1', 241); ?></div>
          <div class="body">
            <script>
              function post(address, body) {
                  var request = new XMLHttpRequest();
                  request.open("POST", address, true);
                  request.send(new FormData(body));
              }
              document.addEventListener("DOMContentLoaded", function () {
                  var emailPopup = document.querySelector("#email-popup");
                  var greyBackground = document.querySelector("#grey-background");
                  function close()
                  {
                      greyBackground.style.display = "none";
                      emailPopup.style.display = "none";
                  }
                  emailPopup.querySelector("button").addEventListener("click", close);
                  emailPopup.querySelector(".close").addEventListener("click", close);
                  document.querySelector("form#emailform").addEventListener("submit", function (event) {
                      event.preventDefault();
                      greyBackground.style.display = "block";
                      emailPopup.style.display = "block";
                      post("//zenhomes.us13.list-manage.com/subscribe/post?u=77aaf650334f282ce52194467&amp;id=83cce8b1da", this);
                  });
              });
            </script>
            <form id="emailform">
              <input id="email" placeholder="<?php the_field('footer_email_placeholder', 241); ?>" type="email" name="EMAIL" required>
              <input type="hidden" name="b_77aaf650334f282ce52194467_83cce8b1da" value="">
              <label>
                <button value="Subscribe" name="subscribe"></button>
                <div class="button"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/arrow.png"></div>
              </label>
            </form>
          </div>
          <div id="folgen" class="header"><?php the_field('footer_column4_header2', 241); ?></div>
          <div class="body">
            <div id="social"><a href="<?php the_field('twitter_link', 241); ?>" target="_blank"><img id="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png"></a><a href="<?php the_field('facebook_link', 241); ?>" target="_blank"><img id="facebook" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png"></a><a href="<?php the_field('linkedin_link', 241); ?>" target="_blank"><img id="linkedIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedIn.png"></a><a href="<?php the_field('instagram_link', 241); ?>" target="_blank"><img id="instagram" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a></div>
          </div>
        </div>
      </div>
    </footer>
    <div id="grey-background"></div>
    <div id="email-popup" class="subscribe-popup">
      <div class="subscribe-header"><span class="subscribe-caption"><?php the_field('email-popup-header', 310); ?></span>
        <div class="close">&#215;</div>
      </div>
      <div class="subscribe-message"><?php the_field('email-popup-text', 310); ?></div>
      <label>
        <button value="Subscribe" name="subscribe"></button>
        <div class="button"><?php the_field('email-popup-button', 310); ?></div>
      </label>
      <div class="subscribe-bottom"></div>
    </div><?php wp_footer(); ?>
  </body>
</html>