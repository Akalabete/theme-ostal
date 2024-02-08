<?php get_header(); ?>
<?php 
        $phone_number = get_option('ostal_settings_field_phone_number');
        $email = get_option('ostal_settings_field_email');
        $mobile_number = get_option('ostal_settings_field_mobile_number');
      ?>
<main>

    <section class="topic">
        <div class="sub-topic">
            <h2 id="presentation"><?php _e('présentation', 'ostal'); ?></h2>
            <div class="presentation-container">
                <p id="descriptif" class="presentation">
                    <?php 
                        $texte = __('Ostal Numérique est une association qui a pour but de promouvoir le numérique en milieu rural. Elle propose des formations, des ateliers et des conseils sur le numérique. Elle accompagne les particuliers dans leur transition numérique.', 'ostal');
                        $texte = str_replace('Ostal Numérique', '<strong>Ostal Numérique</strong>', $texte);
                        echo $texte;
                    ?>
                    
                </p>
                <ul class="activity-list">
                    <li class="activity-item"><?php _e('Sensibilisation cyber-sécurité,', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Initiation à la  bureautique', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Ateliers VR,,', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Fab&apos;lab,', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Repair&apos;café,', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Petits travaux d&apos;impression,', 'ostal'); ?></li>
                    <li class="activity-item"><?php _e('Wifi en accès libre...', 'ostal'); ?></li>
                </ul>
                <p class="presentation">
                        <?php
                            $texte = __('L&apos;Ostal c&apos;est un lieu convivial, à coté de chez vous, ou l&apos;on peut échanger sur le thème du numérique autour d&apos;un café', 'ostal');
                            $texte = str_replace('L&apos;Ostal', '<strong>L&apos;Ostal</strong>', $texte);
                            echo $texte;
                        ?>
                </p>
            </div>
        </div>
        
    </section>

    <section class="topic">
        <div class="sub-topic">
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/pic-two-medium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/pic-two-small.webp" alt="Photos ateliers" class="img-class" width="400" height="300">
                </picture>
            </div>
            <h2 id="localisation">Localisation</h2>
            <div id="situation" class="adress-loc-container">
                <div class="adresse">
                    <h3 class="adress-title"><?php _e('Ostal Numérique', 'ostal'); ?></h3>
                    <p class="adress-description"><?php _e('9 bis Rue du Dr H Lacroix', 'ostal'); ?>
                        <span><?php _e('24410 Saint-Aulaye-Puymangou', 'ostal'); ?></span>
                    </p>
                    <p><?php echo $email; ?></p>
                    <p><?php echo $phone_number; ?></p>
                    <p><?php echo $mobile_number; ?></p>
                </div>
                <div class="localisation-container">
                    <a href="https://www.google.fr/maps/place/2+Chem.+de+Leynie,+24410+St+Privat+en+P%C3%A9rigord/@45.2290909,0.2370968,17z/data=!3m1!4b1!4m5!3m4!1s0x47ffebf13ebb4129:0xcd930de6a3153563!8m2!3d45.2290872!4d0.2396717?entry=ttu" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plandesituation.webp" class="localisation-pic" width="700" height="421" alt="plan de situation, lien vers google maps"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="topic">
        <div class="sub-topic">
            <div class="description-wrapper">
                <h2 id="description">Descriptif</h2>
                <div id="equipments"class="description">
                    <h3 class="description-situ"><?php _e('Des équipements modernes, des conseils personnalisés et des animations originales...', 'ostal'); ?></h3>
                    <div class="description-item-container">
                        <p class="description-item"><?php _e('Ordinateurs & connexion internet en libre accès.', 'ostal'); ?></p>
                        <p class="description-item"><?php _e('Des casques de réalités virtuels', 'ostal'); ?></p>
                        <p class="description-item"><?php _e('Salle de visio-conférence équipée', 'ostal'); ?></p>
                    </div>
                    <div class="description-item-container">
                        <p class="description-item"><?php _e('Imprimantes classiques et 3D', 'ostal'); ?></p>
                        <p class="description-item"><?php _e('Animations thématiques', 'ostal'); ?></p>
                        <p class="description-item"><?php _e('Atelier DAO, arduino, console switch...', 'ostal'); ?></p>
                    </div>
                    <h3 class="description-lodge"><?php _e('Une équipe à votre écoute', 'ostal'); ?></h3>
                </div>
            </div>
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/pic-three-medium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/pic-three-small.webp" alt="Photo de l'équipe" class="img-class" width="400" height="300">
                </picture>
            </div>
        
        </div>
    </section>
</main>
<?php get_footer(); ?>