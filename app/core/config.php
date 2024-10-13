<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT','http://localhost/PHP_MVC-FRAMEWORK/public');
}else{
    define('ROOT','https://www.yourwebsite.com');
}
