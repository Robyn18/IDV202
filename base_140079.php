<!-- To allow the page to connect to the database -->

<?php
session_start();

$dbhost = "eu-cdbr-west-01.cleardb.com";
$dbname = "heroku_847c903dd247bae";
$dbuser = "bff144a2e95ed7";
$dbpass = "278f25c9";

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

?>


<!--   http://code.tutsplus.com/tutorials/user-membership-with-php--net-1523    -->

<html>
<head>
   <link rel="stylesheet" type="text/css" href="home.css"/>    

    <title>Upload an image</title>
    </head>

<body>
    
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"> <input type="submit" value="Upload">
    
</form>
  
    
    <?php
include "get.php";
//connect to database
    $username="root";
     $password="root";
     $database="images";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");


//file properties
 $file = $_FILES['image']['tmp_name'];

if (!isset($file))
    echo "<h2>Pleasae select an image</h2>";
else
{
    $image = $_FILES['image']['tmp_name']; 
    $image_name = $_FILES['image']['name'];
    $image_size = getimagesize($_FILES['image']['tmp_name']);


if ($image_size==FALSE)
    echo "thats not an image";
else{

if(!$insert = mysql_query("INSERT INTO image VALUES('','$image_name','$image')"))
    echo "Problem uplaoding image";
else{
    
    $lastid =mysql_insert_id();
     echo "<h2>Image uploaded.<p/>Your image:<p/><img src=get.php?id=$lastid></h2>";
    
    }
}
}
    ?>
    
    </body>
</html>         ?php include "base.php"; ?              -->

 mysql://bff144a2e95ed7:278f25c9@eu-cdbr-west-01.cleardb.com/heroku_847c903dd247bae?reconnect=true