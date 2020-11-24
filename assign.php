
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

    
    
    $sql = " UPDATE trainee SET trainer = 1 where school_id = ".$_POST['get_id']."  ";
    
         if($conn->query($sql))
    
    $sql = " UPDATE trainee SET trainer_id = ".$idd." where school_id = ".$_POST['get_id']."  ";
    
         if($conn->query($sql))
      
      { 
             
             
               $sqlt = "SELECT trainee1_id, trainee2_id, trainee3_id FROM trainer where work_id =  ".$idd." ";
        $result = mysqli_query ($conn,$sqlt);
        $row = mysqli_fetch_array($result);
             
             if ($row['trainee1_id'] == NULL )
                 
             {
                 
                 
                 $sql_1 = " UPDATE trainer SET trainee1_id = ".$_POST['get_id']. " where work_id = $idd ";
    
      if($conn->query($sql_1))
      
      { 
           header ('location:user.php');
         //echo " UPDATE trainee SET trainer= ".$tr. " where school_id= $idd";
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
                 
             }
        
                 else 
                     
                 {
                     
                     if (  $row['trainee2_id'] == NULL )
                     
                 {
                     
                 $sql_2 = " UPDATE trainer SET trainee2_id = ".$_POST['get_id']. "  where work_id = $idd ";
    
      if($conn->query($sql_2))
      
      { 
           header ('location:user.php');
         //echo " UPDATE trainee SET trainer= ".$tr. " where school_id= $idd";
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
                     
                 }
                     
                     else 
                         
                         
                     {
                            
                     if (  $row['trainee3_id'] == NULL )
                     
                 {
                     
                 $sql_3 = " UPDATE trainer SET trainee3_id = ".$_POST['get_id']. "  where work_id = $idd ";
    
      if($conn->query($sql_3))
      
      { 
           header ('location:user.php');
         //echo " UPDATE trainee SET trainer= ".$tr. " where school_id= $idd";
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
              
                         
                         
                     }
                     
                 
             
                 
             }
          
             
             //////////--------------
    
    
      
        
        
}
}
 
}
    /*  if($conn->query($sql))
      
      { 
           header ('location:user.php');
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     }
*/
      $conn->close();
      

?>