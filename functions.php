<?php

include(__DIR__ . '/core/Menus/Container.php');
include(__DIR__ . '/core/Menus/Item.php');


$m2p = new \stdClass();

function assets($path){
    return get_template_directory_uri() . '/' . trim($path, '/');
}

register_nav_menu('main', 'La navigation principale du site web');

function m2p_get_menu($location)
{
    global $m2p;
    if(!$m2p)
        if (!isset($m2p->menus)) $m2p->menus = [];
    if (!isset($m2p->menus[$location])) $m2p->menus[$location] = new Container($location);
    return $m2p->menus[$location];
}

