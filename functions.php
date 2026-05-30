<?php
function digisahko_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    
    register_nav_menus(array(
        'primary' => 'Päävalikko',
        'footer'  => 'Alavalikko'
    ));
}
add_action('after_setup_theme', 'digisahko_setup');

function digisahko_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact.js', array('jquery'), null, true);

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'digisahko_scripts');


function digisahko_tuote_post_type() {
    register_post_type('tuote',
        array(
            'labels'      => array(
                'name'          => 'Tuotteet',
                'singular_name' => 'Tuote',
                'add_new'       => 'Lisää uusi tuote',
                'add_new_item'  => 'Lisää uusi tuote',
            ),
            'public'      => true,
            'has_archive' => true, 
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon'   => 'dashicons-lightbulb',
            'rewrite'     => array('slug' => 'tuotteet'),
        )
    );
}
add_action('init', 'digisahko_tuote_post_type');

function digisahko_create_db_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'yhteydenotot';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nimi varchar(100) NOT NULL,
        sahkoposti varchar(100) NOT NULL,
        viesti text NOT NULL,
        aika datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action('after_switch_theme', 'digisahko_create_db_table');

function handle_contact_form() {
    global $wpdb;
    
    // Nonce-suojaus
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'digisahko_contact_nonce')) {
        wp_send_json_error('Turvallisuusvirhe: tunnus puuttuu tai on virheellinen.');
        wp_die();
    }

    $table_name = $wpdb->prefix . 'yhteydenotot';

    $nimi = sanitize_text_field($_POST['nimi']);
    $email = sanitize_email($_POST['email']);
    $viesti = sanitize_textarea_field($_POST['viesti']);

    if (empty($nimi) || empty($email)) {
        wp_send_json_error('Täytä pakolliset kentät.');
    }

    $result = $wpdb->insert($table_name, array(
        'nimi' => $nimi,
        'sahkoposti' => $email,
        'viesti' => $viesti
    ));

    if ($result) {
        wp_send_json_success('Kiitos! Viestisi on tallennettu tietokantaan.');
    } else {
        wp_send_json_error('Tietokantavirhe.');
    }
}
add_action('wp_ajax_contact_form_submit', 'handle_contact_form');
add_action('wp_ajax_nopriv_contact_form_submit', 'handle_contact_form');

function digisahko_localize_ajax() {
    wp_localize_script('contact-js', 'ajax_obj', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('digisahko_contact_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'digisahko_localize_ajax');

/**
 * Custom: Hae kaikki tuotteet
 */
function digisahko_get_all_tuotteet() {
    $args = array(
        'post_type' => 'tuote',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    return get_posts($args);
}

/**
 * Custom: Muotoile hinta
 */
function digisahko_format_hinta($hinta) {
    return number_format($hinta, 2, ',', ' ') . ' €';
}

/**
 * Custom: Hae tuotteen pääkuva URL:na
 */
function digisahko_get_tuote_image_url($post_id) {
    $image_id = get_post_thumbnail_id($post_id);
    if ($image_id) {
        $image_array = wp_get_attachment_image_src($image_id, 'full');
        return $image_array[0];
    }
    return get_template_directory_uri() . '/assets/placeholder.png';
}

/**
 * Custom: Tarkista onko käyttäjä loggautunut
 */
function digisahko_is_user_admin() {
    return current_user_can('manage_options');
}

/**
 * Custom: Yhdistä teksti, poista liian pitkät rivit
 */
function digisahko_truncate_text($text, $length = 100) {
    if (strlen($text) > $length) {
        return substr($text, 0, $length) . '...';
    }
    return $text;
}