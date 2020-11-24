
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
    
    
    $sqlt = "SELECT trainer_id  FROM trainee where school_id =  ".$idd." ";
        $result = mysqli_query ($conn,$sqlt);
        $row = mysqli_fetch_array($result);
             
           $tid =  $row['trainer_id'];
                 
           
    //-----------------------------------

    
    $sqlreset = " UPDATE trainee SET trainer_id= null where school_id= $idd";
    mysqli_query ($conn,$sqlreset);
    
    
    $sql = " UPDATE trainee SET trainer= ".$tr. " where school_id= $idd";
    
      if($conn->query($sql))
      
      { 
           header ('location:user.php');
         //echo " UPDATE trainee SET trainer= ".$tr. " where school_id= $idd";
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     $sqlt = "SELECT trainee1_id, trainee2_id, trainee3_id FROM trainer where work_id =  ".$tid." ";
        $result = mysqli_query ($conn,$sqlt);
        $row = mysqli_fetch_array($result);
             
             if ( $row['trainee1_id'] == $idd )
                 
             {
                 
                 
                 $sql_1 = " UPDATE trainer SET trainee1_id = null where work_id = $tid ";
    
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
           
                     
             if ($row['trainee2_id'] == $idd )
                 
             {
                 
                 
                 $sql_2 = " UPDATE trainer SET trainee2_id = null where work_id = $tid ";
    
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
              
                            
             if ($row['trainee3_id'] == $idd )
                 
             {
                 
                 
                 $sql_3 = " UPDATE trainer SET trainee3_id = null where work_id = $tid ";
    
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
                
                 
             
                 
             
          
             
             //////////--------------
    
    
      
        
        
}
    
    
     

      $conn->close();
      

?>
