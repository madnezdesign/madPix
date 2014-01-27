<?php
error_reporting(-1);
ini_set('display_errors',1);
ini_set('output_buffering',0);
session_name(preg_replace('/[:\.\/-_]/','',__FILE__));
session_start();
$pageTimeGeneration = microtime(true); 
include_once(dirname(__FILE__) . "/common.php"); 