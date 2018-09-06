<section class="links">
    <h2 class="links__title hidden"><?= get_sub_field('title'); ?></h2>
    <?php if (have_rows('button')) : while (have_rows('button')): the_row(); ?>


        <a href="<?= get_sub_field('url') ?>" class="links__part" title="<?= get_sub_field('desc') ?>">
            <p><?= get_sub_field('label') ?></p>
            <p><?= get_sub_field('url') ?></p>
        </a>

    <?php endwhile; endif; ?>
</section>