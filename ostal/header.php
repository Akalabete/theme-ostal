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
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/medium/coverpicmedium.webp" media="(min-width: 768px)">
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/small/coverpicsmall.webp" media="(max-width: 767px)">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <script type=application/ld+json>
        [
          {
            "@context": "https://schema.org",
            "@type": "LodgingBusiness",
            "name": "Les Grands Chênes",
            "description": "Site de présentation du gîte les grands chênes",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/coverpicsmall.webp",
              "width": "400",
              "height": "300",
              "description": "main cover picture"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-one-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
          },
          {
            "@context": "https://schema.org",
            "@type": "ImageGallery",
            "name": "Slider d'images",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-one-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
            },
            {
            "@context": "https://schema.org",
            "@type": "LodgingBusiness",
            "name": "Les Grands Chênes",
            "url": "https://ostal.info/",
            "priceRange": "141€ to 172€",
            "telephone": "+33-6-82-26-87-80",
            "numberOfRooms": "3",
            "petsAllowed": "true",
            "paymentAccepted": [
              "Cash",
              "CreditCard"
              ],
            "image": "./assets/images/small/coverpicsmall.webp",
            "contactPoint": {
              "@type": "ContactPoint",
              "telephone": "+33-6-82-26-87-80",
              "contactType": "customer service"
            },
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Leynie",
              "addressLocality": "Festalemps",
              "addressRegion": "Nouvelle Acquitaine",
              "postalCode": "24410",
              "addressCountry": "FRANCE"
            }
          }
        ]
      
      </script>
      <script>
    function initializeTestimonialsSlider(containerId, prevButtonId, nextButtonId) {
        fetch('<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json')
            .then(response => response.json())
            .then(testimonials => {
                const testimonialsContainer = document.getElementById(containerId);
                let currentIndex = 0;

                function showTestimonial(index) {
                    const testimonial = testimonials[index];
                    const testimonialItem = document.createElement('div');
                    testimonialItem.classList.add('testimonial-item');
                    testimonialItem.innerHTML = `
                        <div class="testimonial-info">
                            <p class="testimonial-owner">${testimonial.name}</p>
                            <p class="testimonial-date">${testimonial.date}</p>
                            <p class="testimonial-content-title">${testimonial.title}</p>
                            <p class="testimonial-content">${testimonial.content}</p>
                        </div>
                        <div class="testimonial-photo-container">
                            <img src="<?php echo get_template_directory_uri(); ?>${testimonial.photo}" alt="${testimonial.alt}" class="testimonial-photo" width="400" height="300">
                        </div>
                    `;

                    testimonialsContainer.innerHTML = '';
                    testimonialsContainer.appendChild(testimonialItem);
                }

                function nextTestimonial() {
                    currentIndex = (currentIndex + 1) % testimonials.length;
                    showTestimonial(currentIndex);
                }

                function prevTestimonial() {
                    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
                    showTestimonial(currentIndex);
                }

                showTestimonial(currentIndex);
                document.getElementById(prevButtonId).addEventListener('click', prevTestimonial);
                document.getElementById(nextButtonId).addEventListener('click', nextTestimonial);
            })
            .catch(error => console.error('Error fetching testimonials:', error));
    }

  
    document.addEventListener('DOMContentLoaded', function() {
        initializeTestimonialsSlider('testimonials-container', 'prevButton', 'nextButton', '<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json');
    });


    document.addEventListener('DOMContentLoaded', function() {
        initializeTestimonialsSlider('testimonials-container-header', 'prevButtonHeader', 'nextButtonHeader', '<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json');
    });
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
      <header>
      <div class="sticky-right">
      <section id="sticky-testimonials" >
        <h2  class="testimonial">Nos ateliers</h2>
        <div id="testimonials-container-header" class="testimonials-container"></div>
        <div class="slider-buttons">
            <button id="prevButtonHeader">Précédent</button>
            <button id="nextButtonHeader">Suivant</button>
        </div>
    </section>
    
    
    <script>
        initializeTestimonialsSlider('testimonials-container-header', 'prevButtonHeader', 'nextButtonHeader');
    </script>


   
    
      </div>
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