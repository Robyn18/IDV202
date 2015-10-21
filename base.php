<!-- To allow the page to connect to the database -->

<?php
session_start();

$dbhost = "localhost";
$dbname = "";
$dbuser = "username";
$dbpass = "password";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error()));

?>


<!--   http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523    -->