<?php

// Set autololader
require BASE_PATH . 'vendor/autoload.php';

/**
 * Compile Blade &or render the view.
 *
 * @param  string $view
 * @param  array $data
 */
function show($view, array $data = [])
{
    $factory = new \Xiaoler\Blade\Factory(new \Xiaoler\Blade\Engines\CompilerEngine(new \Xiaoler\Blade\Compilers\BladeCompiler(BASE_PATH . 'app/views/cache/')), new \Xiaoler\Blade\FileViewFinder([BASE_PATH . 'app/views/']));
    echo $factory->make($view, $data)->render();
}
