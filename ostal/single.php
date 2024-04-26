<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p>Publié le <?php the_date(); ?> par <?php the_author(); ?></p>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>