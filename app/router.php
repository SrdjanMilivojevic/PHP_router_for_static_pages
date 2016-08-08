<?php

$app->route('/', function() {
    $title = 'Static-PHP-Router';
    $note = 'Static-PHP-Router';
    return show('home', compact('title', 'note'));
});
