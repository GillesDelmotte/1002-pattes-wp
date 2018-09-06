<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Asbl - la maison du 1002 pattes">
    <meta name="keywords"
          content="ASBL,1002 pattes, aide, Bastogne, neuropsychologue, psychologue, psychothérapeute,logopède, psychomotricien, autisme, jeunesse, soutien, famille, adolescent, assuétude, santé, psychique, communication, difficulté">
    <meta name="author" content="Gilles Delmotte">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= assets("assets/css/bundle.css"); ?>">
    <link rel="icon" type="image/png" href="<?= get_field('logo') ?>"/>
    <title>La maison du 1002 pattes</title>
</head>
<body>
<header class="head">
    <div class="head__logoMainNav">
        <img src="<?= get_field('logo') ?>" alt="logo de la maison 1002 pattes" class="head__logo">
        <input id="burger" type="checkbox" class="checkbox"/>

        <label for="burger" class="burger" id="toto">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="head__mainNav mainNav">
            <h2 class="mainNav__title hidden">Navigation principale</h2>
            <!--<a href="#" class="mainNav__link check">Accueil</a>
            <a href="./pages/equipe.html" class="mainNav__link">Équipe</a>
            <a href="./pages/aides.html" class="mainNav__link">Vous aidez&nbsp;?</a>
            <a href="./pages/partenaires.html" class="mainNav__link">Partenaires</a>
            <a href="./pages/contact.html" class="mainNav__link">Contact</a>
            -->
            <?php foreach (m2p_get_menu('main')->getItems() as $item): ?>
                <a href="<?= $item->url; ?>" class="mainNav__link"><?= $item->label; ?></a>
            <?php endforeach; ?>
            <a href="#" class="mainNav__link button don">Faire un don</a>
        </nav>
        <div class="head__don">
            <a href="#" class="exitDon"><span class="hidden">exit</span><i class="fas fa-times"></i></a>
            <p>Tous vos don seront utiliser pour améliorier votre confort au seins de notre asbl</p>
            <p class="thank">Merci&nbsp;!</p>
            <p class="number">185/645123/45456</p>
        </div>
    </div>


    <div class="head__ban__<?= get_field('ban_choice') ?>">
        <?php if (get_field('text') !== null) : ?>
            <div>
                <h1 class="ban__title"><?= get_field('title') ?></h1>
                <p class="ban__brand"><?= get_field('text') ?></p>

                <?php if (have_rows('button')): while (have_rows('button')) : the_row(); ?>

                    <a href="<?= get_sub_field('url') ?>" class="ban__link button"
                       title="<?= get_sub_field('desc') ?>"><?= get_sub_field('label') ?></a>

                <?php endwhile; endif; ?>
            </div>
        <?php else : ?>
            <div>
                <h1 class="ban__title hidden"><?= get_field('title') ?></h1>
            </div>
        <?php endif; ?>

    </div>
</header>