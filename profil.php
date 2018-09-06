<section class="profil" id="profil">
    <h2 class="profil__title" id="title"><?= get_sub_field('name'); ?></h2>

        <?php $image = get_sub_field('image');?>
        <img src="<?= $image['img']; ?>" alt="<?= $image['desc']; ?>">

    <div class="profil__content">
        <p class="content__job"><?= get_sub_field('specialite'); ?></p>

        <?php if (have_rows('paragraphe')) : while (have_rows('paragraphe')): the_row(); ?>

        <p>
            <?= get_sub_field('text'); ?>
        </p>

        <?php endwhile; endif; ?>

    </div>
</section>