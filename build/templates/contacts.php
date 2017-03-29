
<!--
Template Name: Contacts

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
  <body><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/header.jpg" style="display: none;" class="preload">
    <div id="contacts-popup" class="subscribe-popup">
      <div class="subscribe-header"><span class="subscribe-caption">Vielen Dank!</span>
        <div class="close">&#215;</div>
      </div>
      <div class="subscribe-message">Wir beantworten Ihre Nachricht umgehend.</div>
      <label>
        <button value="Subscribe" name="subscribe"></button>
        <div class="button">Fertig</div>
      </label>
      <div class="subscribe-bottom"></div>
    </div>
    <div class="head clearfix hide-notmobile fixedhead">
      <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
        <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('mobile_button_link', 456); ?>">
        <button class="signup login Einloggen"><?php the_field('mobile_button_text', 456); ?></button></a><?php endif; ?>
      <div class="phone fixedphone"><a href="<?php the_field('phone_link', 456); ?>"><img src="<?php the_field('phone_icon', 456); ?>">
          <div id="shadow"></div></a></div>
    </div>
    <div id="block1" class="background-b">
      <div class="head clearfix hide-onmobile">
        <div class="logo"><a href="<?php the_field('header_logo_link', 456); ?>"><img src="<?php the_field('header_logo', 456); ?>"></a></div><?php if (is_user_logged_in()): ?><a href="<?php the_field('loggined_button_link', 456); ?>">
          <button class="return signup login"><?php the_field('loggined_button_text', 456); ?></button></a><?php else: ?><a href="<?php the_field('second_button_link', 456); ?>">
          <button class="signup login"><?php the_field('second_button_text', 456); ?></button></a><a href="<?php the_field('first_button_link', 456); ?>">
          <button class="signup whitehov"><?php the_field('first_button_text', 456); ?></button></a><?php endif; ?>
        <div class="info">
          <p class="infotext"><?php the_field('phone_number', 456); ?></p>
        </div>
      </div>
      <div class="cont cont-b">
        <h1 id="h1" class="mainheadline"><?php the_field('headline'); ?></h1>
        <h3 id="h3" class="headline"><?php the_field('text'); ?></h3>
      </div>
    </div>
    <div id="section2">
      <div id="sect2-wrapper">
        <div id="Hinterlassen" class="columnn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/contacts_mail.png" class="mailIcon">
          <h1 class="header"><?php the_field('mail_head'); ?></h1>
          <form id="contact">
            <div class="half left">
              <h5 class="caption"><?php the_field('name'); ?></h5>
              <input name="name" type="text" placeholder="<?php the_field('name_placeholder'); ?>" required class="input">
              <h5 class="caption phonecap"><?php the_field('phone'); ?></h5>
              <input name="phone" type="tel" placeholder="<?php the_field('phone_placeholder'); ?>" required class="input">
              <h5 class="caption mailcap"><?php the_field('email'); ?></h5>
              <input name="email" type="email" placeholder="<?php the_field('email_placeholder'); ?>" required class="input">
            </div>
            <div class="half right">
              <h5 class="caption"><?php the_field('message'); ?></h5>
              <textarea name="desc" placeholder="<?php the_field('message_placeholder'); ?>" required class="input"></textarea>
              <div class="button">
                <input type="submit" id="subm">
                <label for="subm"><?php the_field('button_text'); ?></label>
              </div>
            </div>
          </form>
        </div>
        <div id="Oder" class="columnn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/contacts_phone.png" class="phoneIcon">
          <h1 class="header"><?php the_field('phone_head'); ?></h1>
          <h1 class="phoneNum"><?php the_field("phone_num"); ?></h1>
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