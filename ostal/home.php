<?php get_header(); ?>
<?php 
        $phone_number = get_option('ostal_settings_field_phone_number');
        $email = get_option('ostal_settings_field_email');
        $mobile_number = get_option('ostal_settings_field_mobile_number');
      ?>
<main>
    <a href="#top" class="top-button-link">
        <div class="top-button">
            <div class="minitriangle"></div>
        </div></a>
    <section >
        <div >
            
            <div class="presentation-container">
                <p id="descriptif" class="presentation pres-content-one">
                    <?php 
                        $texte = __('Ostal Numérique est une association qui a pour but de promouvoir le numérique en milieu rural.', 'ostal');
                        $texte = str_replace('Ostal Numérique', '<strong>Ostal Numérique</strong>', $texte);
                        echo $texte;
                    ?>
                </p>
                <h1 class="h1-container">
                    <?php 
                        $texte = __('L&apos;Ostal propose des formations, des ateliers et des conseils en informatique. Elle accompagne les particuliers dans leur transition numérique.','ostal');
                        $texte = str_replace('L&apos;Ostal', '<strong>L&apos;Ostal</strong>', $texte);
                        echo $texte;
                    ?>
                </h1>
                <ul class="activity-list">
                    <li class="activity-item"><div class="triangle"></div><?php _e('Sensibilisation cyber-sécurité,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Initiation à la  bureautique,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Expo artistiques temporaires,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Espace de co-working,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Ateliers VR,,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Fab&apos;lab,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Repair&apos;café,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Petits travaux d&apos;impression,', 'ostal'); ?></li>
                    <li class="activity-item"><div class="triangle"></div><?php _e('Wifi en accès libre...', 'ostal'); ?></li>
                </ul>
                <p class="presentation pres-content-two">
                        <?php
                            $texte = __('L&apos;Ostal c&apos;est un lieu convivial, à coté de chez vous, ou l&apos;on peut échanger sur le thème du numérique autour d&apos;un café', 'ostal');
                            $texte = str_replace('L&apos;Ostal', '<strong>L&apos;Ostal</strong>', $texte);
                            echo $texte;
                        ?>
                </p>
            </div>
        </div>
        
    </section>

    <section >
        <div >
            <h2 id="localisation"><?php _e('Ou nous trouver ?', 'ostal')?></h2>
            <div id="situation" class="adress-loc-container">
                <div class="adresse">
                    <h3 class="adress-title"><?php _e('Ostal Numérique', 'ostal'); ?></h3>
                    <p class="adress-description"><?php _e('9 bis Rue du Dr H Lacroix', 'ostal'); ?>
                        </br>
                        <span><?php _e('24410 Saint-Aulaye-Puymangou', 'ostal'); ?></span>
                    </p>
                </div>
                <div class="localisation-container">
                    <a href="https://www.google.fr/maps/place/Ostal+Num%C3%A9rique/@45.2039256,0.1373747,18.33z/data=!4m6!3m5!1s0x47ffe51fc85244b9:0xd28550e976528a9c!8m2!3d45.2040276!4d0.137897!16s%2Fg%2F11h_5ngd90?entry=ttu" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plandesituation.webp" class="localisation-pic" width="1000" height="589" alt="plan de situation, lien vers google maps"></a>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div >
            <div class="description-wrapper">
                <h2 id="description">Nous proposons:</h2>
                <div id="equipments"class="description">
                    <h3 class="description-situ"><?php _e('Des équipements modernes, des conseils personnalisés et des animations originales...', 'ostal'); ?></h3>
                    <ul>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Ordinateurs & connexion internet en libre accès"><div class="triangle"></div><?php _e('Ordinateurs & connexion internet en libre accès.', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Des casques de réalités virtuels"><div class="triangle"></div><?php _e('Des casques de réalités virtuels', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Salle de visio-conférence équipée"><div class="triangle"></div><?php _e('Salle de visio-conférence équipée', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Espace de co-working"><div class="triangle"></div><?php _e('Espace de co-working', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Expo artistiques temporaires"><div class="triangle"></div><?php _e('Expo artistiques temporaires,', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Imprimantes classiques et 3D"><div class="triangle"></div><?php _e('Imprimantes classiques et 3D', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Animations thématiques"><div class="triangle"></div><?php _e('Animations thématiques', 'ostal'); ?></li>
                        <li class="activity-item showcase-item" data-image="chemin_vers_image1.jpg" data-alt="Atelier DAO, arduino, console switch..."><div class="triangle"></div><?php _e('Atelier DAO, arduino, console switch...', 'ostal'); ?></li>
                    </ul>
                    <div class="image-showcase">
                        <img id="showcase-image" width="300" height="200" src="<?php echo get_template_directory_uri(); ?>/assets/images/accueil.webp" alt="Accueil de l'association">
                    </div>
                </div>
            </div>
            <h2 class="equipe"><?php _e('Une équipe à votre écoute', 'ostal'); ?></h2>
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/lequipe.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lequipe.webp" alt="Photo de l'équipe" class="img-class" width="400" height="300">
                </picture>
            </div>
        
        </div>
    </section>
    <section>
        <h2 id="contact"><?php _e('Besoin d&apos;informations, envie de participer à un atelier... ?', 'ostal'); ?></h2>
        <a class="zapier-link" href="https://ostal.zapier.app/" target="_blank">
            <div class="lienzapier">
                <div class="bigtriangle"></div>
                <p><?php _e('Lien vers notre boite à outils et canaux de communications','ostal') ?></p>
            </div>
        </a>
        <a class="calendar-link" href="" target="_blank">
            <div class="calendrierresa">
                <div class="bigtriangle"></div>
                <p><?php _e('Lien vers notre calendrier d&apos;ateliers','ostal') ?></p>
            </div>
        </a>
        <div class="contact-container">
            <div class="contact-item">
                <h3><?php _e('Contactez-nous', 'ostal'); ?></h3>
                <p><?php _e('Par téléphone:', 'ostal'); ?> <?php echo $phone_number; ?></p>
                <p><?php _e('Par mail:', 'ostal'); ?> <?php echo $email; ?></p>
                <p class="centered-content"><?php _e('Sur Facebook:', 'ostal'); ?><a href="https://www.facebook.com/p/LOstal-Tiers-lieu-100063621938112/" target="_blank"><img class="logofb" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.webp" alt="logo de facebook" width="30" height="30"/></a></p>
            </div>
            <div class="contact-item">
                <h3><?php _e('Horaires d&apos;ouverture', 'ostal'); ?></h3>
                <p><?php _e('Du lundi au vendredi:', 'ostal'); ?> 9h-12h / 14h-17h</p>
            </div>
        </div>
    </section>
    <section>
        <h2 id="partenaires"><?php _e('Nos partenaires', 'ostal'); ?></h2>
        <div class="partenaires-container">
            <div class="partenaire-item">
                <a href="http://www.cc-paysdesaintaulaye.fr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logostaulayepuymangou.webp" alt="Logo partenaire 1" width="200" height="120"></a>
                <a href="https://www.nouvelle-aquitaine.fr/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logocdcpaysstaulaye.webp" alt="Logo partenaire 2" width="200" height="98"></a>
                <a href="https://www.saint-aulaye.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logonouvelleacquitaine.webp" alt="Logo partenaire 3" width="200" height="120"></a>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var items = document.querySelectorAll('.showcase-item');
            items.forEach(function(item) {
                item.addEventListener('mouseover', function() {
                    var image = document.getElementById('showcase-image');
                    image.src = "<?php echo get_template_directory_uri(); ?>" + this.dataset.image;
                    image.alt = this.dataset.alt;
                })
            })
        });
        window.addEventListener('DOMContentLoaded', (event) => {
            var container = document.querySelector('.presentation-container');
            var elements = container.querySelectorAll('p, h1, ul');

            elements.forEach((element, index) => {
                element.style.opacity = 0;
                element.style.transition = 'opacity 1.5s ease-in-out';
                setTimeout(() => {
                    element.style.opacity = 1;
                }, 1000 * (index + 1));
            });
        });
    </script>
</main>
<?php get_footer(); ?>