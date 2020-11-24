
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
    
    

    
    $sql = "INSERT INTO trainee ( school_id, name,surname,email) values ('$id','$name','$surname','$mail')";
    
      if($conn->query($sql))
      
      {  
    $sql1 = "CREATE TABLE sched_$id ( id int, m int, t int, w int, th int, f int )";
    
      if($conn->query($sql1))
      
      {  
    $sql2 = "INSERT INTO sched_$id (id) values (910)";
    
      $conn->query($sql2);
    $sql2 = "INSERT INTO sched_$id (id) values (1011)";
    
      $conn->query($sql2);
    $sql2 = "INSERT INTO sched_$id (id) values (45)";
    
      $conn->query($sql2);
    $sql2 = "INSERT INTO sched_$id (id) values (56)";
    
      $conn->query($sql2);
          
            

           header ('location:user.php');
     
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
    //-------------
    
    

   
      
      
      
     
     }





      $conn->close();
      

?>
