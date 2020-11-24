
<?php




$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";



$idd = $_GET['idd'];
        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        
if (mysqli_connect_error())
{
    
    die (' db connection error');
}

 


else {
    
    $tr = 0;

    
    $sql = "
    
  DELETE FROM trainee WHERE school_id = '$idd'";
    
      if($conn->query($sql))
      
      { 
          
        header ('location:user.php');
         
         // echo $idd;
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     }

      $conn->close();
      

?>
