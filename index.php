<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 21/10/14
 * Time: 18:06
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);


$article = [
    'name' => 'zefzef',
    'content' => 'zefzefzefger ergerg',
];


echo $twig->render('article.html.twig', [
    'article' => $article,
]);

