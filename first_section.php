<section class="help">
<h2 class="help__title"><?= get_sub_field('title'); ?></h2>
<p class="help__desc">
    <?= get_sub_field('content'); ?>
</p>

        <div class="help__links">

            <?php if( have_rows('button') ): while ( have_rows('button') ) : the_row(); ?>


                <a href="<?= get_sub_field('url') ?>" class="help__link button"
                   title="<?= get_sub_field('desc') ?>"><?= get_sub_field('label') ?></a>

                    <!--display a sub field value
                    the_sub_field('sub_field_name');-->


            <?php endwhile; endif; ?>

        </div>
</section>