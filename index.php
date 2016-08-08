<?php
/*
|---------------------------------------------------------------------------
| Constants:
|---------------------------------------------------------------------------
|
| Define the root-path and root-url-path constants,
| that we can use trough rest of our application.
|
 */
define('BASE_URL', rtrim($_SERVER['PHP_SELF'], 'index.php'));

// Hack for Windows
$dir = __DIR__;
$dir = strpos($dir, '\\') ? str_replace($dir, '/', '\\') . '/' : $dir . '/';

define('BASE_PATH', $dir);

/*
|--------------------------------------------------------------------------
| Bootstrap:
|--------------------------------------------------------------------------
|
| Include a bootstrap file that will boot all that
| is needed for application to run.
|
 */
require BASE_PATH . 'lib/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Instantiate the application class:
|--------------------------------------------------------------------------
|
 */
$app = new Application;

/*
|--------------------------------------------------------------------------
| Bind all routes:
|--------------------------------------------------------------------------
|
 */
require BASE_PATH . 'app/router.php';

/*
|--------------------------------------------------------------------------
| Output:
|--------------------------------------------------------------------------
|
| Render the view.
|
 */
$app->run();
