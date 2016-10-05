<?php

$app->route('/', function() {
    $title = 'Static-PHP-Router';
    $page = 'Home';
    return show('home', compact('title', 'page'));
});

$app->route('/about', function() {
    $title = 'Static-PHP-Router';
    $page = 'About';
    return show('about', compact('title', 'page'));
});

$app->route('/contact', function() {
    $title = 'Contact';
    $page = 'Static-PHP-Router';
    return show('contact', compact('title', 'page'));
});
