<?php


    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

}

  function ostal_add_admin_pages() {
    add_menu_page(__('Paramètres du thème Ostal Numérique', 'ostal'), __('ostal', 'ostal'), 'manage_options', 'ostal-settings', 'ostal_theme_settings', 'dashicons-admin-settings', 60); 
  }

  function set_samesite_cookie($content) {
    if (is_string($content)) {
        if (strpos($content, 'SameSite=None; Secure') === false && is_user_logged_in()) {
            $content = str_replace('path=/;', 'path=/; SameSite=None; Secure;', $content);
        }
    }
  
    return $content;
  }
  
  if (is_user_logged_in()) {
    add_filter('wp_headers', 'set_samesite_cookie', 10, 1);
  }
  function ostal_theme_settings() {
    echo '<h1>'.esc_html( get_admin_page_title() ).'</h1>';
    echo '<form action="options.php" method="post" name="ostal_settings">';
    echo '<div>';

    settings_fields('ostal_settings_fields');
    do_settings_sections('ostal_settings_section');
    submit_button();

    echo '</div>';
    echo '</form>';
  }

  function ostal_settings_register() {
    register_setting('ostal_settings_fields', 'ostal_settings_fields', 'ostal_settings_fields_validate');
    add_settings_section('ostal_settings_section', __('Paramètres', 'ostal'), 'ostal_settings_section_introduction', 'ostal_settings_section');
    add_settings_field('ostal_settings_field_introduction', __('Introduction', 'ostal'), 'ostal_settings_field_introduction_output', 'ostal_settings_section', 'ostal_settings_section');
    add_settings_field('ostal_settings_field_phone_number', __('Numéro de téléphone', 'ostal'), 'ostal_settings_field_phone_number_output', 'ostal_settings_section', 'ostal_settings_section');
    add_settings_field('ostal_settings_field_mobile_number', __('Numéro de mobile', 'ostal'), 'ostal_settings_field_mobile_number_output', 'ostal_settings_section', 'ostal_settings_section');
    add_settings_field('ostal_settings_field_email', __('Email', 'ostal'), 'ostal_settings_field_email_output', 'ostal_settings_section', 'ostal_settings_section');
    add_settings_field('ostal_settings_field_lienresa', __('Lien de reservation', 'ostal'), 'ostal_settings_field_lienresa_output', 'ostal_settings_section', 'ostal_settings_section');
   
    }

  function ostal_settings_section_introduction() {
    echo __('Paramètrez les différentes options de votre thème ostal.', 'ostal');
  }

  function ostal_settings_fields_validate($inputs) {  
    if(isset($_POST) && !empty($_POST)):
      if(isset($_POST['ostal_settings_field_introduction']) && !empty($_POST['ostal_settings_field_introduction'])):
        update_option('ostal_settings_field_introduction', $_POST['ostal_settings_field_introduction']);
      endif;
      if(isset($_POST['ostal_settings_field_phone_number']) && !empty($_POST['ostal_settings_field_phone_number'])):
        update_option('ostal_settings_field_phone_number', $_POST['ostal_settings_field_phone_number']);
      endif;
      if(isset($_POST['ostal_settings_field_mobile_number']) && !empty($_POST['ostal_settings_field_mobile_number'])):
        update_option('ostal_settings_field_mobile_number', $_POST['ostal_settings_field_mobile_number']);
      endif;
      if(isset($_POST['ostal_settings_field_email']) && !empty($_POST['ostal_settings_field_email'])):
        update_option('ostal_settings_field_email', $_POST['ostal_settings_field_email']);
      endif;
      if(isset($_POST['ostal_settings_field_lienresa']) && !empty($_POST['ostal_settings_field_lienresa'])):
        update_option('ostal_settings_field_lienresa', $_POST['ostal_settings_field_lienresa']);
      endif;
    endif;

    return $inputs;
  }

  function ostal_settings_field_introduction_output() {
    $value = get_option('ostal_settings_field_introduction');

    echo '<input name="ostal_settings_field_introduction" type="text" value="'.$value.'" />';
  }

  function ostal_settings_field_phone_number_output() {
    $value = get_option('ostal_settings_field_phone_number');

    echo '<input name="ostal_settings_field_phone_number" type="text" value="'.$value.'" />';
  }
  function ostal_settings_field_mobile_number_output() {
    $value = get_option('ostal_settings_field_mobile_number');

    echo '<input name="ostal_settings_field_mobile_number" type="text" value="'.$value.'" />';
  }

  function ostal_settings_field_email_output() {
    $value = get_option('ostal_settings_field_email');

    echo '<input name="ostal_settings_field_email" type="text" value="'.$value.'" />';
  }
  function ostal_settings_field_lienresa_output() {
    $value = get_option('ostal_settings_field_lienresa');

    echo '<input name="ostal_settings_field_lienresa" type="text" value="'.$value.'" />';
  }
  

  add_action('admin_menu', 'ostal_add_admin_pages', 10);
  add_action('admin_init', 'ostal_settings_register');
  ?>