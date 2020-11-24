
<?php



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

    






$name = $_POST['name'];

$surname = $_POST['surname'];
$id = $_POST['id'];

$mail= $_POST['email'];



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        
if (mysqli_connect_error())
{
    
    die (' db connection error');
}

 



else {
    
    

    
    $sql = "INSERT INTO trainer ( work_id, name,surname,email) values ('$id','$name','$surname','$mail')";
    
      if($conn->query($sql))
      
      { 
           header ('location:user.php');
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     }

      $conn->close();
      

?>
