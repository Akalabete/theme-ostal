<?php get_header(); ?>

<main>
    <h1>Archives</h1>

    <?php if (have_posts()) : ?>
        <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p>Publié le <?php the_date(); ?> par <?php the_author(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>