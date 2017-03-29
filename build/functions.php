<?php
add_action('init', function () {
    remove_filter('the_content', 'wpautop');
});

add_action('wp_enqueue_scripts', function () {
    wp_register_style('landing', get_template_directory_uri() . '/assets/css/landing.css', null, null);
    wp_enqueue_style('landing');

    wp_register_script('headerscripts', get_template_directory_uri() . '/assets/js/header.js', null, null);
    wp_enqueue_script('headerscripts');
    wp_register_script('font-fix', get_template_directory_uri() . '/assets/js/font-fix.js', null, null);
    wp_enqueue_script('font-fix');


    add_action('wp_footer', 'slow_js')    ;
    function slow_js() {
        wp_register_script('footer', get_template_directory_uri() . '/assets/js/footer.js', null, null);
        wp_enqueue_script('footer');
    }

    switch (get_the_title()) {
        case 'Contacts':
            wp_register_style('contacts', get_template_directory_uri() . '/assets/css/contacts.css', null, null);
            wp_enqueue_style('contacts');
            wp_register_script('contactscript', get_template_directory_uri() . '/assets/js/contacts.js', null, null);
            wp_enqueue_script('contactscript');
            break;
        case 'Landing':
            wp_register_script('slider', get_template_directory_uri() . '/assets/js/slider.js', null, null);
            wp_enqueue_script('slider');
            wp_register_style('landing_a', get_template_directory_uri() . '/assets/css/landing_a.css', null, null);
            wp_enqueue_style('landing_a');
            break;
        case "Impressum":
            wp_register_style('impressum', get_template_directory_uri() . '/assets/css/impressum.css', null, null);
            wp_enqueue_style('impressum');
            break;
        case "Terms":
            wp_register_style('impressum', get_template_directory_uri() . '/assets/css/impressum.css', null, null);
            wp_enqueue_style('impressum');
            wp_register_style('terms', get_template_directory_uri() . '/assets/css/terms.css', null, null);
            wp_enqueue_style('terms');
            break;
        case "Landing C":
            wp_register_style('landing_c', get_template_directory_uri() . '/assets/css/landing_c.css', null, null);
            wp_enqueue_style('landing_c');
            break;
        case "Landing D":
            wp_register_style('landing_d', get_template_directory_uri() . '/assets/css/landing_d.css', null, null);
            wp_enqueue_style('landing_d');
            break;
        case "Landing E":
            wp_register_style('landing_e', get_template_directory_uri() . '/assets/css/landing_e.css', null, null);
            wp_enqueue_style('landing_e');
            break;
        case "Landing F":
            wp_register_style('landing_f', get_template_directory_uri() . '/assets/css/landing_f.css', null, null);
            wp_enqueue_style('landing_f');
            break;
        case "Jobs Fin":
            wp_register_style('jobsfin', get_template_directory_uri() . '/assets/css/jobsfin.css', null, null);
            wp_enqueue_style('jobsfin');
            break;
    }
});

add_action('wp_ajax_contacts_mail', function () {
    ob_start();
    ?>
    <html>
    <head>
        <title>New contact</title>
    </head>
    <body>
    <p>Name: <?php echo $_POST['name']; ?></p>

    <p>Phone: <?php echo $_POST['phone']; ?></p>

    <p>E-mail: <?php echo $_POST['email']; ?></p>
    <br/>

    <p><?php echo $_POST['desc']; ?></p>
    </body>
    </html>
    <?php
    $headers[] = 'MIME-Version: 1.0' . "\r\n";
    $headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    wp_mail('admin@zenhomes.de', 'New contact', ob_get_clean(), $headers);
});