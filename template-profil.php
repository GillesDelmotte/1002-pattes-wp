<?php
/*
    Template name: Page de profil
*/

?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (have_rows('section')) : while (have_rows('section')) : the_row(); ?>

        <?php include get_row_layout() . '.php'; ?>

    <?php endwhile; endif; ?>

<?php endwhile; endif; ?>
<a href="./vous-aider/" class="retour button" title="retourner sur la page vous aider">Retour</a>
<?php get_footer(); ?>

