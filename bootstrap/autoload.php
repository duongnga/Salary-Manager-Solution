<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
Update Bootstrap
|
*/
// require __DIR__ . '/../app/Library/array_function.php';
// require __DIR__ . '/../app/Library/global-functions.php';
// require __DIR__ . '/../app/Library/tienluong-functions.php';
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------

|
*/

$compiledPath = __DIR__.'/cache/compiled.php';

if (file_exists($compiledPath)) {
    require $compiledPath;
}
