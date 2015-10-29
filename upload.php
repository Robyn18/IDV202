

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
            <h2>Upload an image</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div class="FormElement">
    <input type="file" name="image">
        
        <input type="submit" name="submit" value="Upload">
    </div>
      </div>  
    </form>
    <?php
     
if(isset($_POST['submit']))
{
    $username="root";
     $password="root";
     $database="images";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");
    
    $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
    
    $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp"]));
    
    $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
                            
    if (substr($imageType,0,5) == "image")
      {
         mysql_query("INSERT INTO image VALUES('','$imageName','$imageData')");
          
       
           
    //if( $lastid = mysql_insert_id());
          //  echo "Image Uploaded.<p />Your image:<p /><img src=showimage.php?id=$lastid>";
    
    $query = mysql_query("SELECT * FROM image;");

    while($row =mysql_fetch_assoc($query))
          {
        if ($row['image']==""){
                       echo "<img with='100' height='100' src='uploads:/".$row['image']." alt='uplaoded pic'>";  
           }
        echo "<br>";
    

}
    }
}

?>
   </div>
      
        <div Class="Footer"></div>
  
    </body>




















</html>