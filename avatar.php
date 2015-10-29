<?php session_start();
$_SESSION['username'] = "jaques";

?>
<?php
if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['image']['tmp_name'],"uploads:/".$_FILES['image']['name']); 
        
    
   
     $username="root";
     $password="root";
     $database="profile";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");
    
    $query= mysql_query("UPDATE users SET image = '".$_FILES['image']['name']."'WHERE username = '".$_SESSION['username']."'");
}
?>



<!DOCTYPE html>
<html>
<head>
    <link href="Menu.css" rel="stylesheet" type="text/css"/>
    <link href="Master.css" rel="stylesheet" type="text/css"/>
    
</head>
    <body>
        <div class="container">
        <div class="Header">
        <div class="Menu">
        <div id="Menu">
             <nav>
                <ul class="cssmenu">	
                     <li><a href="home.php">Home</a></li>
                     <li><a href="about%20us.html">About Us</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                     <li><a href="Login.php">Login</a></li>
                </ul>
             </nav>
            </div>
            </div>
        </div>
        <div Class="LeftBody"></div>
        <div Class="RightBody">
         <form action="avatar.php" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="image"> <input type="submit" name="submit" value="Upload">
    <?php

    $username="root";
     $password="root";
     $database="profile";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");
    
$query = mysql_query("SELECT * FROM users");
while($row = mysql_fetch_assoc($query)){
 //echo $row['username'];   
    if ($row['image']==""){
     //echo "<img with='100' height='100' src='uploads:/defult.jpg alt='Defult profile pic'>";   
    }
    else{
        
            echo "<img with='100' height='100' src='uploads:/".$row['image']." alt='profile pic'>";  
    

}
}
?>
    
    </body>




</html>