
<?php

/*  connection to database    */
session_start();

$user='root';
$host='localhost';
$pass='';
$db='portfolioproject';
$connect= mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){

echo '  erreur connect to database  ';
}

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/DASRI/PortfolioProject/');
define('SITE_PATH','http://localhost/DASRI/PortfolioProject/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/');


define('PRODUCT_CV_SERVER_PATH',SERVER_PATH.'media/');
define('PRODUCT_CV_SITE_PATH',SITE_PATH.'media/');



?>


