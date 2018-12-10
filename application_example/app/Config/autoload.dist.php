<?php
/**
 * Quars - Framework
 *
 * @package  Quars
 * @author   Miguel Mendoza <mmendoza000@gmail.com>
 */

/*--------------------------------------------------------------
 / Autoload file to load aditional libraries, variables or files 
 / that needs to be initialized when program starts.
 / -------------------------------------------------------------*/

// Loafing database
global $db;
if (!$db) {  \Quars\Load::database(); }

// Loading utils
//\Quars\Load::library('utils');