<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="archive-title">Reservez nos ateliers</h1>

    <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, 
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    $post_count = 0; 
    while ($query->have_posts()) : $query->the_post();
        $post_count++; 
        if ($post_count == 1) : 
            ?>
            <div class="prochainevent">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <p>Publié le 
                    <?php 
                        $dateFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                        echo $dateFormatter->format(get_the_date('U')); 
                    ?> 
                    par <?php the_author(); ?>
                </p>
            </div>
            <p class="old-list-center"> Anciens ateliers : </p>
            <?php
        else :
            ?>
            <div class="archive">
                <div class="archive-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>Publié le 
                        <?php 
                            $dateFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                            echo $dateFormatter->format(get_the_date('U')); 
                        ?> 
                    </p>
                </div>
            </div>
            <?php
        endif;
    endwhile;
endif; 

wp_reset_postdata(); // important, pour réinitialiser la requête principale
?>

</main>

<?php get_footer(); ?>

