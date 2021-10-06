<?php 

/**
 * @copyright (c) 2021 PHP Autoloader v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHP Authentication (effortless) v1.0 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHP Classes autoloader
 * @package    namespace, autoloader, spl
 *            
 *            
 * @author    nielfernandez <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPAuth-Effortless
 * @link      https://github.com/nielsofficeofficial/PHPAuth-Effortless/blob/main/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.0
 *
 */

 require __DIR__ . '/prop.php';

/**
 *
 * Defined Class Loader SPL Begin
 * @since 04.05.21
 * @since v1.0
 * 
 **/ 
spl_autoload_register(function($class) 
{

    // File name space
    $systemFileRequest = AUTH_DIRECTORY_FILE_REQUEST;

    // base directory system file
    $sourceFileRquest  = BASE_DIR_SYSTEM_FILE;
	
    if (strncmp($systemFileRequest, $class, strlen($systemFileRequest)) !== 0) return;

    // Directory system data files
    $dataRequest = $sourceFileRquest . str_replace('\\', '/', substr($class, strlen($systemFileRequest))) . _PHP_;

    // if the file exists, require it
    (file_exists($dataRequest)) ? require $dataRequest : false;

});
