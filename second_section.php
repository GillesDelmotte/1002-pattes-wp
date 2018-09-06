<section class="timetable">
    <div class="timetable__img">
        <?php if (have_rows('image')) : while (have_rows('image')): the_row(); ?>

                <img src="<?php the_sub_field('img'); ?>"
                     alt="<?php the_sub_field('desc'); ?>" class="timetable__img">

        <?php endwhile; endif; ?>
    </div>
    <div class="timetable__infos">
        <h2 class="timetable__title"><?= get_sub_field('title'); ?></h2>
        <p class="timetable__desc"><?= get_sub_field('content'); ?></p>


            <?php $button = get_sub_field('button');?>

        <a href="<?= $button['url']?>" class="help__link button"
                   title="<?= $button['desc']?>"><?= $button['label']?></a>



    </div>
</section>
