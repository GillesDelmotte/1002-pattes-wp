<section class="sponsor">
    <h2 class="sponsor__title"><?= get_sub_field('title'); ?></h2>
    <div class="sponsor__logo">
        <?php if (have_rows('logo')) : while (have_rows('logo')): the_row(); ?>
            <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('desc'); ?>">
        <?php endwhile; endif; ?>
    </div>
</section>