<?php require __DIR__ . '/library/PHPAutoloader/PHPAutoloader.php';

use \PHPAutoloader\Classes\RequestClass;
use \PHPAutoloader\Classes\system\PHPClass;
use \PHPAutoloader\Classes\system\DataClass;?>

<?php 

// Parent Folder
$RequestClass = new RequestClass();
echo "<br />";
echo  $RequestClass->getRequestClass();

// Sub folder
echo "<br />";
echo PHPClass::PHPAutoloader();

// Sub folder
$DataClass    = new DataClass();
echo "<br />"; 
echo $DataClass->getRequest();




