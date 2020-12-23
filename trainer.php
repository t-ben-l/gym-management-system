

<?php
session_start();



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";
        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM trainer  where work_id = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);


echo $id ." - ". $name;

if ($numrows == 0 )
{
        
    

    header("location:index.php");

    
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
     
      <link href="style.css" rel="stylesheet"> 
      
      
  </head>
    <style>
        #tb2, #tb3
        {
            display: none;
        }
    </style>
    <script>
         
        function change(y)
                         
                         {
                                 
                                         for (var x = 1; x<4 ; x++)
                                             {
                                                 
                                           
                                         if (y==x)
                                             
                                  {
                                      
                                  document.getElementById('l'+x).style.display='block' ; 
                                      
                                  }
                                                 
                                                 else 
                                                     {
                                                         
                                                     
                                    document.getElementById('l'+x).style.display='none' ;
                                     }
                         
                                             }
                         
                         }
        
        function tb(y)
                         
                         {
                                 
                                         for (var x = 1; x<4 ; x++)
                                             {
                                                 
                                           
                                         if (y==x)
                                             
                                  {
                                      
                                  document.getElementById('tb'+x).style.display='block' ; 
                                      
                                  }
                                                 
                                                 else 
                                                     {
                                                         
                                                     
                                    document.getElementById('tb'+x).style.display='none' ;
                                     }
                         
                                             }
                         
                         }
        
        
        
        
    </script>
  <body>
      
      
      <div class = "pic" style = "border: 1px solid white;"> <img src="user2.png"> </div>
      <div class="pic" id ="upvid">
          
          
          <?php
          
          echo '
          <form action="upload_file.php?id='.$id.'" method="post"   enctype="multipart/form-data"> ';
          
          ?>
          
          
              
              
              
              upload todays video here 
              
              
              <input type="file" name="vid" >  <button name="submit"> upload </button> </form> 
      
      
      
      </div>
     
      
    

      <div class = "center" >
      
           <div id = "ident" >  <?php 
echo $id ." - ". $name; ?><div class="spinner-grow text-success" role="status">
  <span class="sr-only"> </span>
</div> </div>
      
          
          <div id = "options"> 
          <style>
              .box_opt
              {
                  background-color:   #395F38;
              }
              </style>
          
    <button class = "box_opt" id = "b1" onclick="change(1)"  >

Edit my profile
 </button>      
         
                  <button class = "box_opt" id = "b2" onclick="change(2)" >
schedule

         <div id = "select" class = "options2" >    </div>
 </button>      
             <button class = "box_opt" id = "b3"  onclick="change(3)">
submit anouncement 

 </button>      
          </div>
          
          <div class="options2" id = "l1">
         
          <form method="post" action="editrainee.php">
  <div class="form-group">
   
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "name" placeholder="name">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" id="exampleInputPassword1" name = "surname" placeholder="surname">
  </div>
 
        
                     <div class="form-group">
    
    <input type="email" class="form-control" id="exampleInputPassword1" name = "email"  placeholder="email">
  </div>
              
  <button type="submit" class="btn btn-primary">edit</button>
</form>
          </div>
          
          
          
           <div class="options2" id = "l2">
               
      
      
                  
               
               
               <?php


               {


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        $idd = 910;
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
$idt = $id;
        $sql = "SELECT * FROM trainer where work_id = $idt ";
        $result = mysqli_query ($conn,$sql);
      
                $row = mysqli_fetch_array($result);
                   
                   
                   
            $id =$row['trainee1_id'];
       if ($id != null)
      {
          
           $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);

                 $sql33 = "SELECT school_id  FROM trainee where school_id = $id ";
        $result33 = mysqli_query ($conn,$sql33);
       $row33 = mysqli_fetch_array($result33);
            $name = $row33['school_id'];


echo '  






         
          <table class="table table-dark" id ="tb1" >
  <thead>
    <tr>
      <th scope="col " style="color:yellow">'.$name.'   <button   onclick="tb(2)" > next b </button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
  <tbody>



    <tr>
      <th scope="row">9-10</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      
      
       //--------------------------------
      $idd = 1011;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">10-11</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 45;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">4-5</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 56;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">5-6</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>
                
                
                      
  </tbody>
</table>
                ';
          
        }  
      
        
          
      }
      
                   else 
                       
                   {
                       
                     //  echo ' <div class ="popp"  id  = "ident"  style = "height: 30%;" > no studet assigned <button   onclick="tb(2)" > check another slot here </button>  </div>'  ;                    
                   }
                   
                          $sql = "SELECT * FROM trainer where work_id = $idt ";
        $result = mysqli_query ($conn,$sql);
      
                $row = mysqli_fetch_array($result);
                   
                   
                   
            $id =$row['trainee2_id'];
      if ($id != null)
      {
          
           $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);

                 $sql33 = "SELECT school_id  FROM trainee where school_id = $id ";
        $result33 = mysqli_query ($conn,$sql33);
       $row33 = mysqli_fetch_array($result33);
            $name = $row33['school_id'];


echo '  






         
          <table class="table table-dark" style="display: block"  id ="tb2" >
  <thead>
    <tr>
      <th scope="col " style="color:yellow">'.$name.'    <button  onclick="tb(3)" > next</button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
  <tbody>



    <tr>
      <th scope="row">9-10</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      
      
       //--------------------------------
      $idd = 1011;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">10-11</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 45;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">4-5</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 56;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">5-6</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>
                
                
                      
  </tbody>
</table>
                ';
          
        }  
      
        
          
      }
      
                   else 
                       
                   {
                       
                       
                    //   echo ' <div class ="popp" id  = "ident" style = "height: 30%;"  > no studet assigned <button style="z-index: 1;"  onclick="tb(3)" > check another slot here </button>  </div>'  ;  
                       
                   }
                   
                          $sql = "SELECT * FROM trainer where work_id = $idt ";
        $result = mysqli_query ($conn,$sql);
      
                $row = mysqli_fetch_array($result);
                   
                   
                   
            $id =$row['trainee3_id'];
      if ($id != null)
      {
          
           $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);

                 $sql33 = "SELECT school_id  FROM trainee where school_id = $id ";
        $result33 = mysqli_query ($conn,$sql33);
       $row33 = mysqli_fetch_array($result33);
            $name = $row33['school_id'];


echo '  






         
          <table class="table table-dark"  style="display: block"  id ="tb3" >
  <thead>
    <tr>
      <th scope="col " style="color:yellow">'.$name.'    <button  onclick="tb(1)" > next</button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
  <tbody>



    <tr>
      <th scope="row">9-10</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      
      
       //--------------------------------
      $idd = 1011;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">10-11</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 45;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">4-5</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 56;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">5-6</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>
                
                
                      
  </tbody>
</table>
                ';
          
        }  
      
        
          
      }
      
                   else 
                       
                   {
                       
                       
                   //    echo ' <div class ="popp" id  = "ident"  style = "height: 30%;" > no studet assigned <button   onclick="tb(1)" > check another slot here </button>  </div>'  ;  
                       
                   }
               }
               
               
            
      ?>
      

             <?php

 /*   
               {


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        $idd = 910;
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM trainer where work_id = $id ";
        $result = mysqli_query ($conn,$sql);
       $row = mysqli_fetch_array($result);
            $id =$row['trainee2_id'];
      
      
        $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);

                 $sql33 = "SELECT school_id  FROM trainee where school_id = $id ";
        $result33 = mysqli_query ($conn,$sql33);
       $row33 = mysqli_fetch_array($result33);
            $name = $row33['school_id'];


echo '  






         
          <table class="table table-dark" id ="tb2"  style = "display:none;">
  <thead>
    <tr>
      <th scope="col " style="color:yellow">'.$name.'    <button onclick = "tables(2)" > next</button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
  <tbody>



    <tr>
      <th scope="row">9-10</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      
      
       //--------------------------------
      $idd = 1011;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">10-11</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 45;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">4-5</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 56;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">5-6</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>
                
                
                      
  </tbody>
</table>
                ';
          
        }  
      
               }
     */ ?>
           
                       <?php

/*
               {


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        $idd = 910;
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM trainer where work_id = $id ";
        $result = mysqli_query ($conn,$sql);
       $row = mysqli_fetch_array($result);
            $id =$row['trainee1_id'];
      
      
        $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);

                 $sql33 = "SELECT school_id  FROM trainee where school_id = $id ";
        $result33 = mysqli_query ($conn,$sql33);
       $row33 = mysqli_fetch_array($result33);
            $name = $row33['school_id'];


echo '  






         
          <table class="table table-dark" id ="tb3"  style = "display:none;" >
  <thead>
    <tr>
      <th scope="col " style="color:yellow">'.$name.'    <button onclick = "tables(3)" > next</button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
  <tbody>



    <tr>
      <th scope="row">9-10</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      
      
       //--------------------------------
      $idd = 1011;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">10-11</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 45;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">4-5</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
       
      //--------------------------------
      $idd = 56;
            $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
    <tr>
      <th scope="row">5-6</th>

';


        while ( $row = mysqli_fetch_array($result) )
        
        {  if ($row['m'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
          
                
                
            if ($row['t'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked </td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
       
            if ($row['w'] == 1)
            
            
                echo ' <td style = "background-color:green; " > booked</td> ';
      else 
                echo ' <td style = "" > not booked </td> ';
      
      
            if ($row['th'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked</td> ';
      else 
                echo ' <td style = "" > not booked</td> ';
      
            if ($row['f'] == 1)
            
            
                echo ' <td style = "background-color:green; " >booked </td> ';
      else 
                echo ' <td style = "" > not booked </td>  </tr>
                
                
                      
  </tbody>
</table>
                ';
          
        }  
      
               }
               
                */
      ?>
      
              
          </div>
          
 
          
           <div class="options2" id = "l3">
          
        <div id = "submit_an" >
               
        <form action="announce.php" method="post" >
  <div class="form-group">
    <label for="exampleFormControlInput1"  class=" text-white">Subject</label>
    <input name = "subject" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Gym closed for public holiday">
  </div>

 <div class="form-group" style="display: none;">
    <textarea name = "fromm" value = "trainer"></textarea>
  </div>
            
            
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class=" text-white">Announcement</label>
    <textarea name = "an" class="form-control border border-primary" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
              
              <button type="submit" class="btn btn-primary mb-2">announce</button>
</form>
          
               </div>
          </div>
          
          
          
             
          
           <div class="options2" id = "l4"  >
               <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      
          </div>
          
          
          
           <div class="options2" id = "l5">
               
          </div>
      </div>
      
      
      <div class ="right"  style="overflow-y:scroll;">
      <div id = "ident"  style="background-color:#303952 ; color:white ;"> Anouncements </div>
      
          
          
          <?php
          
          



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM announcements ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
            
            
            echo '
            
            
              <!-- ==============   -->
          <div id = "anounce"> 
          
          
      <div id = "ident" style="background-color:white ; color: black; height: 24px; top: 3%;" > '.$row['subject'].'  </div>
          <div id = "textbox">
             <p> '.$row['announcment'].'</p> 
              
              </div>
          </div>
          
          
          
          <!-- ==============   -->
            
            ';
            
            
        }
          
          
          
          ?>
          
          
          
          
          
        
          
      </div>
      
         <div class  = "vidz_div">
     
      
      <div id = "ident"  style="background-color:#303952 ; color:white ; "> Your videos </div>
             
             <?php 
             
             
             



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
             
$id = $_SESSION['id'];


        $sql = "SELECT * FROM video where ins_id = $id  ORDER BY id DESC ";
        $result = mysqli_query ($conn,$sql);

$re = 1;


        while ( $row = mysqli_fetch_array($result) )
        { 
         echo '  
             <div id  = "vid"> <a href="upload/'.$row['name'].'"> video '.$re++.' mm</a>  </div> ';
                
        
        }
         
             ?>
             
             
             
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

   // session_destroy();
?>