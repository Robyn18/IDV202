<?php
 $username="root";
     $password="root";
     $database="images";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");


$id = $_REQUEST['id'];

$image = mysql_query("SELECT * FROM image WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];


header("Content-type: image/jpeg");

echo $image;

?>