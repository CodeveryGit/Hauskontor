
<!--Template Name: Landing A--><!DOCTYPE html>
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
  <body><img src="<?php the_field('background'); ?>" style="display: none;" class="preload">
    <div class="head clearfix hide-notmobile fixedhead">
      <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
        <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('mobile_button_link', 456); ?>">
        <button class="signup login Einloggen"><?php the_field('mobile_button_text', 456); ?></button></a><?php endif; ?>
      <div class="phone fixedphone"><a href="<?php the_field('phone_link', 456); ?>"><img src="<?php the_field('phone_icon', 456); ?>">
          <div id="shadow"></div></a></div>
    </div>
    <div id="block1" style="background-image: url(<?php the_field('background'); ?>);" class="video-block"><?php $video = get_field('background_video'); if ($video): ?>
      <video id="header-video" autoplay="autoplay" loop="loop" class="hide-onmobile">
        <source src="<?php echo $video; ?>">
      </video><?php endif; ?>
      <div class="head clearfix hide-onmobile">
        <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
          <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('second_button_link', 456); ?>">
          <button class="signup login"><?php the_field('second_button_text', 456); ?></button></a><a href="<?php the_field('first_button_link', 456); ?>">
          <button class="signup whitehov"><?php the_field('first_button_text', 456); ?></button></a><?php endif; ?>
        <div class="info">
          <p class="infotext"><?php the_field('phone_number', 456); ?></p>
        </div>
      </div>
      <div class="cont">
        <h1 id="h1" class="mainheadline"><?php the_field('1sect_h1'); ?></h1>
        <h3 id="h3" class="headline"><?php the_field('1st_sect_h2'); ?></h3>
        <p class="headline p1 hide-onmobile"><?php the_field('1st_sect_p'); ?></p>
        <div class="btndiv"><a href="<?php the_field('mid_button_link'); ?>">
            <button class="btn-land"><?php the_field('mid_button_text'); ?></button></a></div>
      </div>
    </div>
    <div id="block2">
      <div class="content clearfix padbot">
        <div class="lefttext">
          <h2 class="headline2 nomarg"><?php the_field('2nd_section_h1'); ?></h2>
          <p id="padp1" class="padtwony p2 nopad"><?php the_field('2nd_sect_p_1'); ?></p>
          <p id="padp" class="padtwony p2 nopad"><?php the_field('2nd_sect_p_2'); ?></p>
          <p id="padp3" class="padtwony p2 nopad moblastp"> <?php the_field('2nd_sect_p_3'); ?></p>
        </div>
        <div class="pict"><img src="<?php the_field('2sect_img'); ?>" class="building hide-onmobile"><img src="<?php the_field('2sect_img_mob'); ?>" class="building hide-notmobile mobimg"></div>
      </div>
    </div>
    <div style="background-image: url(<?php the_field('3rd_sect_background'); ?>)" id="block3">
      <div class="content clearfix">
        <div class="backgroundgradient"></div>
        <h3 class="headline2 h2white"><?php the_field('3rd_sect_h1'); ?></h3>
        <div class="block hide-onmobile">
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
          <div class="steps">
            <h3 class="stepsheadline"><?php the_field('3rd_sect_h3_1'); ?></h3>
          </div>
          <div class="steps">
            <h3 class="stepsheadline"><?php the_field('3rd_sect_h3_2'); ?></h3>
          </div>
          <div class="steps">
            <h3 class="stepsheadline"><?php the_field('3rd_sect_h3_3'); ?></h3>
          </div>
          <div class="steps">
            <h3 class="stepsheadline"><?php the_field('3rd_sect_h3_4'); ?></h3>
          </div>
        </div>
        <div class="block hide-notmobile">
          <div class="steps">
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
          </div>
          <div class="vertline"></div>
          <div class="stepstext">
            <div class="quater">
              <h3 class="stepsheadline quat"><?php the_field('3rd_sect_h3_1'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat"><?php the_field('3rd_sect_h3_2'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat"><?php the_field('3rd_sect_h3_3'); ?></h3>
            </div>
            <div class="quater">
              <h3 class="stepsheadline quat"><?php the_field('3rd_sect_h3_4'); ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="block4">
      <div class="content">
        <h3 class="headline2"><?php the_field('4th_sect_h1'); ?></h3>
        <div class="contain hide-onmobile">
          <div class="row imgmax">
            <div class="custom1"><img src="<?php the_field('4th_sect_img1'); ?>" id="img1"></div>
            <div class="custom1"><img src="<?php the_field('4th_sect_img2'); ?>" id="img2"></div>
            <div class="custom1"><img src="<?php the_field('4th_sect_img3'); ?>" id="img3"></div>
          </div>
          <div class="row imgmax padthirty">
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth firsth4"><?php the_field('4th_h4_for_img1'); ?></h4>
              <p id="1stp" class="padtwony p2 p3 notbold textwidth"><?php the_field('4th_p_for_img1'); ?></p>
            </div>
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth second-h4"><?php the_field('4th_h4_for_img2'); ?></h4>
              <p class="padtwony p2 p3 textwidth padtopten"><?php the_field('4th_p_for_img2'); ?></p>
            </div>
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img3'); ?></h4>
              <p class="padtwony p2 p3 textwidth thirdp padtopten"><?php the_field('4th_p_for_img3'); ?></p>
            </div>
          </div>
          <div class="row imgmax padfifty">
            <div class="custom1"><img src="<?php the_field('4th_sect_img4');s ?>" id="img4"></div>
            <div class="custom1"><img src="<?php the_field('4th_sect_img5'); ?>" id="img5"></div>
            <div class="custom1"><img src="<?php the_field('4th_sect_img6'); ?>" id="img6"></div>
          </div>
          <div id="lastline" class="row imgmax padthirty">
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth firsth4"><?php the_field('4th_h4_for_img4'); ?></h4>
              <p class="padtwony p2 p3 textwidth padtopten"><?php the_field('4th_p_for_img4'); ?></p>
            </div>
            <div class="custom1">
              <h4 class="stepsheadline dark textwidth second-h4"><?php the_field('4th_h4_for_img5'); ?></h4>
              <p class="padtwony p2 p3 textwidth padtopten second-h4"><?php the_field('4th_p_for_img5'); ?></p>
            </div>
            <div class="custom1">
              <h4 id="last-h4" class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img6'); ?></h4>
              <p class="padtwony p2 p3 textwidth thirdp padtopten last-p"><?php the_field('4th_p_for_img6'); ?></p>
            </div>
          </div>
        </div>
        <div class="contain hide-notmobile">
          <div class="custom1"><img src="<?php the_field('4th_sect_img1'); ?>" class="img1">
            <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img1'); ?></h4>
            <p class="padtwony p2 p3 notbold textwidth firstmobp"><?php the_field('4th_p_for_img1'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('4th_sect_img2'); ?>" class="img2">
            <h4 class="stepsheadline dark textwidth second-mobile-h4"><?php the_field('4th_h4_for_img4'); ?></h4>
            <p class="padtwony p2 p3 textwidth second-mobile-p"><?php the_field('4th_p_for_img4'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('4th_sect_img3'); ?>" class="img3">
            <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img2'); ?></h4>
            <p class="padtwony p2 p3 textwidth third-mobile-p"><?php the_field('4th_p_for_img2'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('4th_sect_img4'); ?>" class="img4">
            <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img5'); ?></h4>
            <p class="padtwony p2 p3 textwidth fourthp"><?php the_field('4th_p_for_img5'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('4th_sect_img5'); ?>" class="img5">
            <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img3'); ?></h4>
            <p class="padtwony p2 p3 textwidth"><?php the_field('4th_p_for_img3'); ?></p>
          </div>
          <div class="custom1"><img src="<?php the_field('4th_sect_img6'); ?>" class="img6">
            <h4 class="stepsheadline dark textwidth"><?php the_field('4th_h4_for_img6'); ?></h4>
            <p class="padtwony p2 p3 textwidth sixthp"><?php the_field('4th_p_for_img6'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div id="block5">
      <div class="content">
        <div class="backgroundgradient2"></div>
        <p class="headline p1 block5headline"><?php the_field('5_sect_p'); ?></p>
        <div class="btndiv btndivlesspad"><a href="<?php the_field('5sect_button_link'); ?>">
            <button class="btn-land btn-b"><?php the_field('5sect_button_text'); ?></button></a></div>
      </div>
    </div>
    <div id="section6">
      <input id="immobilienubersicht" type="radio" name="slider-page" checked="checked" class="slider-radio">
      <input id="kommunikation-mit-mietern" type="radio" name="slider-page" class="slider-radio">
      <input id="dokumentenverwaltung" type="radio" name="slider-page" class="slider-radio">
      <input id="dienstleistungen-buchen" type="radio" name="slider-page" class="slider-radio">
      <div id="slider-links">
        <label id="immobilienubersicht" for="immobilienubersicht" class="link">Immobilienübersicht</label>
        <label id="kommunikation-mit-mietern" for="kommunikation-mit-mietern" class="link">Kommunikation mit Mietern</label>
        <label id="dokumentenverwaltung" for="dokumentenverwaltung" class="link">Dokumentenverwaltung</label>
        <label id="dienstleistungen-buchen" for="dienstleistungen-buchen" class="link">Dienstleistungen buchen</label>
      </div>
      <div id="slider-arrows">
        <div id="backward">
          <label id="immobilienubersicht" for="immobilienubersicht"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leftarrow.jpg"></label>
          <label id="kommunikation-mit-mietern" for="kommunikation-mit-mietern"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leftarrow.jpg"></label>
          <label id="dokumentenverwaltung" for="dokumentenverwaltung"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leftarrow.jpg"></label>
          <label id="dienstleistungen-buchen" for="dienstleistungen-buchen"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/leftarrow.jpg"></label>
        </div>
        <div id="forward">
          <label id="immobilienubersicht" for="immobilienubersicht"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rightarrow.jpg"></label>
          <label id="kommunikation-mit-mietern" for="kommunikation-mit-mietern"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rightarrow.jpg"></label>
          <label id="dokumentenverwaltung" for="dokumentenverwaltung"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rightarrow.jpg"></label>
          <label id="dienstleistungen-buchen" for="dienstleistungen-buchen"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rightarrow.jpg"></label>
        </div>
      </div>
      <div id="slider-content">
        <div id="slider-header"><?php the_field('6sect_h1'); ?></div>
        <div id="slider-page">
          <div id="immobilienubersicht">
            <h3><?php the_field('6sect_slider_h3_1'); ?></h3>
            <p><?php the_field('6sect_slider_p1'); ?></p>
          </div>
          <div id="kommunikation-mit-mietern">
            <h3><?php the_field('6sect_slider_h3_2'); ?></h3>
            <p><?php the_field('6sect_slider_p2'); ?></p>
          </div>
          <div id="dokumentenverwaltung">
            <h3><?php the_field('6sect_slider_h3_3'); ?></h3>
            <p><?php the_field('6sect_slider_p3'); ?></p>
          </div>
          <div id="dienstleistungen-buchen">
            <h3><?php the_field('6sect_slider_h3_4'); ?></h3>
            <p><?php the_field('6sect_slider_p4'); ?></p>
          </div>
        </div>
        <div id="slider-buttons">
          <label id="immobilienubersicht" for="immobilienubersicht">
            <div class="slider-button"></div>
          </label>
          <label id="kommunikation-mit-mietern" for="kommunikation-mit-mietern">
            <div class="slider-button"></div>
          </label>
          <label id="dokumentenverwaltung" for="dokumentenverwaltung">
            <div class="slider-button"></div>
          </label>
          <label id="dienstleistungen-buchen" for="dienstleistungen-buchen">
            <div class="slider-button"></div>
          </label>
        </div>
      </div>
      <div id="slider-image">
        <div id="tablet">
          <div id="image-placeholder"><img id="immobilienubersicht" src="<?php the_field('6sect_slide_1_img'); ?>"><img id="kommunikation-mit-mietern" src="<?php the_field('6sect_slide_2_img'); ?>"><img id="dokumentenverwaltung" src="<?php the_field('6sect_slide_3_img'); ?>"><img id="dienstleistungen-buchen" src="<?php the_field('6sect_slide_4_img'); ?>"></div>
        </div>
      </div>
    </div>
    <div id="section7">
      <div id="say"><?php the_field('7sect_p1'); ?></div>
      <div id="sign"><?php the_field('7sect_p2'); ?></div>
    </div>
    <div id="section8">
      <div id="background">
        <div id="background-gradient">
          <div class="wrapper">
            <div id="line"><?php the_field('8sect_p'); ?></div>
            <label>
              <button></button><a href="<?php the_field('8sect_button_link'); ?>">
                <div class="button"><?php the_field('8sect_button_text'); ?></div></a>
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