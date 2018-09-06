<section class="choice">
    <div class="choice__img">

        <?php if (have_rows('image')) : while (have_rows('image')): the_row(); ?>
        <a href="<?php the_sub_field('url'); ?>" class="table__float" title="<?php the_sub_field('desc'); ?>">
            <div class="table__img">
                <img src="<?php the_sub_field('img'); ?>"
                 alt="<?php the_sub_field('desc_img'); ?>" class="image">
                <p class="table__img__name"><?php the_sub_field('name'); ?></p>
            </div>
        </a>
        <?php endwhile; endif; ?>
    </div>
    <div class="choice__infos">
        <h2 class="choice__title"><?php the_sub_field('title'); ?></h2>
        <p class="choice__desc"><?php the_sub_field('content'); ?></p>
        <?php $button = get_sub_field('button');?>
        <a href="<?= $button['url']?>" class="choice__link button" title="<?= $button['desc']?>"><?= $button['label']?></a>
    </div>
</section>