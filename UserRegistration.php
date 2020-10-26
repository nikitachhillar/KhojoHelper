<?php
session_start();
?>
<!DOCTYPE html>
 <html>
 <head><title>Storing in database</title>
 </head>
 <body>
 <?php
    
 $mail=$_POST["email"];
    $Pass=$_POST["password"];
     $username=$_POST["user"];
    
    //create a connection
    $conn = new mysqli('localhost:3308', 'root','','Khojo_Helper');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}
   
$sql="INSERT   INTO Users(Username,Email,Password) VALUES ('$username','$mail','$Pass')";

if ($conn->query($sql)==TRUE) {
  echo "New record  created";
}

    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
     header('Location:Home.html');

$conn->close();
    
?>

 </body>  
 </html> 
