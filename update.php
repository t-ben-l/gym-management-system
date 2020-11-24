<?php



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

$id = $_GET['id'];
        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
        
if (mysqli_connect_error())
{
    
    die (' db connection error');
}

 



else {
    




    
    if ($_POST['q910m'] == true)
        $a = 1;
        else 
            $a = 0;
            
       if ($_POST['q910t'] == true)
        $b = 1;
        else 
            $b = 0;   if ($_POST['q910w'] == true)
        $c = 1;
        else 
            $c = 0; 
    if ($_POST['q910th'] == true)
        $d = 1;
        else 
            $d = 0;   
    
    if ($_POST['q910f'] == true)
        $e = 1;
        else 
            $e = 0;
    
    $idd = 910;
   
        
 
    
    
                 $sql = " UPDATE sched_$id SET m = $a, t = $b, w = $c, th = $d, f = $e  where id = $idd ";
           
      $conn->query($sql);
      
      //-------------------------
    
    

    
    if ($_POST['1011m'] == true)
        $a = 1;
        else 
            $a = 0;
            
       if ($_POST['1011t'] == true)
        $b = 1;
        else 
            $b = 0;   if ($_POST['1011w'] == true)
        $c = 1;
        else 
            $c = 0; 
    if ($_POST['1011th'] == true)
        $d = 1;
        else 
            $d = 0;   
    
    if ($_POST['1011f'] == true)
        $e = 1;
        else 
            $e = 0;
    
    $idd = 1011;
   
        
 
    
    
                 $sql = " UPDATE sched_$id SET m = $a, t = $b, w = $c, th = $d, f = $e  where id = $idd ";
           
      $conn->query($sql);
    
    

    
    if ($_POST['45m'] == true)
        $a = 1;
        else 
            $a = 0;
            
       if ($_POST['45t'] == true)
        $b = 1;
        else 
            $b = 0;   if ($_POST['45w'] == true)
        $c = 1;
        else 
            $c = 0; 
    if ($_POST['45th'] == true)
        $d = 1;
        else 
            $d = 0;   
    
    if ($_POST['45f'] == true)
        $e = 1;
        else 
            $e = 0;
    
    $idd = 45;
   
        
 
    
    
                 $sql = " UPDATE sched_$id SET m = $a, t = $b, w = $c, th = $d, f = $e  where id = $idd ";
           
      $conn->query($sql);
    
    
    

    
    if ($_POST['56m'] == true)
        $a = 1;
        else 
            $a = 0;
            
       if ($_POST['56t'] == true)
        $b = 1;
        else 
            $b = 0;   if ($_POST['56w'] == true)
        $c = 1;
        else 
            $c = 0; 
    if ($_POST['56th'] == true)
        $d = 1;
        else 
            $d = 0;   
    
    if ($_POST['56f'] == true)
        $e = 1;
        else 
            $e = 0;
    
    $idd = 56;
   
        
 
    
    
                 $sql = " UPDATE sched_$id SET m = $a, t = $b, w = $c, th = $d, f = $e  where id = $idd ";
           
      $conn->query($sql);
    
    
}

    
           header ('location:trainee.php');


?>