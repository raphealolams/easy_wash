<?php

 // //  $db = mysqli_connect('localhost','root','','easy_wash')
 // // or die('Error connecting to MySQL server.');
 //
 //  define('DB_SERVER', 'localhost');
 //  define('DB_USERNAME', 'root');
 //  define('DB_PASSWORD', '');
 //  define('DB_DATABASE', 'easy_wash');
 //  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'easy_wash';

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
