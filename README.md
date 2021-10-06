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

```PHP
<h6>Sub folder Primary Folder File</h6>
```PHP
// Instantiate Class uses
use \PHPAutoloader\Classes\RequestClass\subfolder;

```

