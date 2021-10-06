# PHPLoader
PHP Autoloader Classes 

```PHP
<?php 

// On the very top of your header.php file
require_once __DIR__ . '/library/PHPLoader/PHPAutoloader.php';

```

<h6>Class name space</h6>

```PHP

// Primary or root folder
namespace PHPAutoloader\Classes;

// Sub folder
namespace PHPAutoloader\Classes\system;

```

<h6>Primary Folder File</h6>

```PHP

// Instantiate Class uses
use \PHPAutoloader\Classes\RequestClass;

```

<h6>Sub folder Primary Folder File</h6>

```PHP

// Instantiate Class uses
use \PHPAutoloader\Classes\RequestClass\subfolder;

```

<h6>PHP Classes </h6>

```PHP

use \PHPAutoloader\Classes\RequestClass;
use \PHPAutoloader\Classes\system\PHPClass;
use \PHPAutoloader\Classes\system\DataClass; 

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


// Instantiate Default
$PHPLoader = NEW \PHPAutoloader\Classes\system\DataClass(); 

// Instantiate Alias
USE \PHPAutoloader\Classes\system\DataClass AS PHPLoader();
// Calling the classe instantiated
$DataClass    = new DataClass();

```
