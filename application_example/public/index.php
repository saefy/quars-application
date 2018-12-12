<?php
/**
 * Quars - Framework
 *
 * @package  Quars
 * @author   Miguel Mendoza <mmendoza000@gmail.com>
 */

require __DIR__ . '/load.php';

/*
|--------------------------------------------------------------------------
| Start the app
|--------------------------------------------------------------------------
|
| All app files will be auto loaded from /app/ directory
|
*/

$HttpRoutes = SYSTEM_PATH_QRS.'app/Routes/HttpRoutes.php';
if (file_exists($HttpRoutes)) {  require(SYSTEM_PATH_QRS.'app/Routes/HttpRoutes.php'); }

Global $RouteMode;

if ($RouteMode==='ROUTER'){
	// Dispatch routes
	\Quars\Request::serve();	
}else{
	// Accept all
	\Quars\Quars::Run();
}
