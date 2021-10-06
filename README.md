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

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHP Library PHPAuth-Effortless to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
PHP SPL SP4 PHP Loader | PHPTeam | PHPGroup
</h5>

__Please kindly read license and agreement under by MIT__

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br />

__For suggestion and donation/sponsors you can send via GCash : +639650332900__ <br /> __Also you can send via Paypal account: syncdevprojects@gmail.com__ 
<br /><br /> Thanks and good luck! 

