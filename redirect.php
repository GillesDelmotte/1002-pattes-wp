<section class="redirect">
    <h2 class="redirect__title hidden"><?= get_sub_field('title'); ?></h2>
    <p class="redirect__desc">
        <?= get_sub_field('desc'); ?>
    </p>
    <?php if (have_rows('button')) : while (have_rows('button')): the_row(); ?>

        <a href="<?= get_sub_field('url'); ?>" class="redirect__link button" title="<?= get_sub_field('desc'); ?>"><?= get_sub_field('label'); ?></a>

    <?php endwhile; endif; ?>

</section>