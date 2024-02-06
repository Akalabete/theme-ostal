<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php _e('Ostal Numérique', 'ostal'); ?></title>
    <meta name=description content="Ostal Numérique: Association d'assistance et de formation en informatique,conseils,fab'lab, repair café, wifi libre-service, petits travaux d'impression a Saint Aulaye 24410">
    <meta name=robots content="index, follow">
    <meta property=og:title content="Ostal Numérique, Association autour du numérique à Saint Aulaye 24410">
    <meta property=og:description content="Ostal Numérique: Association d'assistance et de formation en informatique,conseils, répare-café, wifi libre-service, petits travaux d'impression">
    <meta property=og:url content=https://ostal24.fr/>
    <meta property=og:type content=website>
    <meta property=og:site_name content="Ostal Numérique">
    <meta http-equiv=Permissions-Policy content="interest-cohort=()">
    <link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    
    <?php wp_head(); ?>
  </head>
  <body>
      <header>
      
        <div class="container">
            <div class="header">
                <a href="/" class="logolink">
                <img class="logo" width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="<?php _e('Les Grands Chênes', 'ostal'); ?>" />
                <span >
                    <h1 class="intro">
                    <?php 
                    $introduction = get_option('ostal_settings_field_introduction');
                    
                    echo $introduction;
                    ?>
                    </h1>
                </span>
                </a>
                <ul class="nav">
                    <li class="nav-item"><a href="/" class="nav-link"><?php _e('Accueil', 'ostal'); ?></a></li>
                    <li class="nav-item"><a href="#descriptif" class="nav-link"><?php _e('Présentation', 'ostal'); ?></a></li>
                    <li class="nav-item"><a href="#situation" class="nav-link"><?php _e('Localisation', 'ostal'); ?></a></li>
                    <li class="nav-item"><a href="#fablab" class="nav-link"><?php _e('Fab&apos;Lab', 'ostal'); ?></a></li>
                    <li class="nav-item"><a href="#ateliers" class="nav-link nav-link-magic"><?php _e('Ateliers', 'ostal'); ?></a></li>
                    <li class="nav-item"><a href="#reservation" class="nav-link nav-link-magic"><?php _e('Reservation', 'ostal'); ?></a></li>
                </ul>
            </div>
            
            
        </div>
      </header>