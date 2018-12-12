<?php
/**
 * Quars - Framework
 *
 * @package  Quars
 * @author   Miguel Mendoza <mmendoza000@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Application dir
|--------------------------------------------------------------------------
|
| Directory for you app code. This is your work directory.
| 
*/

$application_dir = realpath(__DIR__ . '/../') . '/';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on.
| 
*/

require __DIR__ . '/../../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader:: Dev
|--------------------------------------------------------------------------
|
| This provides a custom autoload prs-4 but can be updated to vendor autoload
| like: require __DIR__ . '/../vendor/autoload.php';
*/

require __DIR__ . '/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Register The app Auto Loader 
|--------------------------------------------------------------------------
|
| All app files will be auto loaded from /app/ directory
|
*/

require __DIR__ . '/../bootstrap/autoload_app.php';


/*
|--------------------------------------------------------------------------
| Load configuration files
|--------------------------------------------------------------------------
|
| All config filles must be loaded here
|
*/
session_start();
if(!isset($_SESSION['num_conn'])){$_SESSION['num_conn'] = 0;}
$_SESSION['num_conn'] = 0;

if(!defined('SYSTEM_PATH_QRS')){
	define('SYSTEM_PATH_QRS', $application_dir);
	
	//load the app configuration
	\Quars\Quars::load_configuration();
	
	//Create url_relative HTTP constant
	\Quars\Quars::createUrlRelative();
	
}
