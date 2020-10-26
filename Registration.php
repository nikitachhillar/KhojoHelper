<!DOCTYPE html>
 <html>
 <head><title>Storing in database</title>
 </head>
 <body>
 <?php
    
    $Title=$_POST["title"];
    $FName=$_POST["fname"];
    $LName=$_POST["lname"];
    $Gender=$_POST["gen"];
    $Add1=$_POST["add1"];
    $Add2=$_POST["add2"];
    $Pin=$_POST["pin"];
    $State=$_POST["state"];
    $District=$_POST["district1"];
    $City=$_POST["city"];
    $Country=$_POST["country"];
    $MNo=$_POST["phone"];
    $Exp=$_POST["exp"];
    $Category=$_POST["cat"];
    

    //create a connection
    $conn= new mysqli('localhost:3308', 'root','','Khojo_Helper');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}
   
$sql="INSERT   INTO Workers(Title,First_Name,Last_Name,Gender,Address1,Address2,Pincode,State,District,City,Country,Mobile_Number,Experience,Category) VALUES ('$Title','$FName','$LName','$Gender','$Add1','$Add2','$Pin','$State','$District','$City','$Country','$MNo','$Exp','$Category')";

if ($conn->query($sql)==TRUE) {
  echo "New record  created";
}

    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
     header('Location:index.html');

$conn->close();
    
?>

 </body>  
 </html> 
