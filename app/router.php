<?php

$app->route('/', function() {
    $title = 'Static-PHP-Router';
    $page = 'Home';
    return show('content', compact('title', 'page'));
});

$app->route('/about', function() {
    $title = 'Static-PHP-Router';
    $page = 'About';
    return show('content', compact('title', 'page'));
});

$app->route('/contact', function() {
    $title = 'Static-PHP-Router';
    $page = 'Contact';
    return show('content', compact('title', 'page'));
});
