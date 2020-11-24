
<?php





$subject = $_POST['subject'];

$an = $_POST['an'];
$from = $_POST['fromm'];



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
    
    

    
    $sql = "INSERT INTO announcements ( subject, announcment, fromm ) values ('$subject','$an','$from')";
    
      if($conn->query($sql))
      
    
      
      {  

          if ($from == "admin")

          header ('location:user.php');
          
          else 
              
          header ('location:trainer.php');
     
    
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
    //-------------
    
    

   
      
      
      
     
     }





      $conn->close();
      

?>
