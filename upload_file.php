<?php




$id = $_GET['id'];

$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);



$target = 'upload/'.(basename("_".$id.(addslashes($_FILES['vid']['name']))));


$filetmp = ($_FILES['vid']['tmp_name'] ) ;    


move_uploaded_file($filetmp,$target);

$vid ="_".$id.(addslashes($_FILES['vid']['name']));



if (mysqli_connect_error())
{
    
    die (' db connection error');
}

else { $sql = "INSERT INTO video (ins_id,name) values ('$id','$vid')";
      
     
      if($conn->query($sql))
      
      { 
          //echo "<br> new record is inserted successfully";
          
          header ('location:trainer.php');
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     }

 
      $conn->close();
      

?>


