
<?php
session_start();



$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM trainee  where school_id = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);



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
        
              function c()
                         
                         {
                                 
                                     
                             
                                  document.getElementById('tab2').style.display='block' ; 
                                      
                             
                                                     
                                    document.getElementById('tab1').style.display='none' ;
                                   
                         
                         }
        
        
    </script>
  <body>
      
      
      <div class = "pic" > <img src="user.png"> </div>

      <div class = "center" >
      
          
          <?php 
          
          echo '
          
           <div id = "ident" >'.$id.' - '.$name.'<div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
</div> </div>
      
          ';
          
          
          ?>
       
      
          
          <div id = "options"> 
          
          
    <button class = "box_opt" id = "b1" onclick="change(1)" >

Edit my profile
 </button>      
         
                  <button class = "box_opt" id = "b2" onclick="change(2)" >
trainer and schedule

 </button>      
             <button class = "box_opt" id = "b3"  onclick="change(3)">
make payment

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
               
          <table class="table table-dark"  id = "tab1">
  <thead>
      
      
    <tr>
        <th scope="col " style="color:yellow"> <button onclick = "c()">  update shcedule </button> </th>
      <th scope="col">monday</th>
      <th scope="col">tuesday</th>
      <th scope="col">wednesday</th>
      <th scope="col">thursday</th>
      <th scope="col">friday</th>
    </tr>
  </thead>
              
  <tbody>
                
                         <?php





$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        $idd = 910;
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM sched_$id where id = $idd ";
        $result = mysqli_query ($conn,$sql);



echo '  
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
      $idd = 1011;
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
                echo ' <td style = "" > not booked </td>  </tr>';
          
        }  
      
      
      ?>

      
    
  
  </tbody>
</table>
             
               <!-- START  -->
               
               <?php 
         echo '     <form method = "post" action="update.php?id='.$id.'">   ';
                   
                   ?>
               
          <table class="table table-dark" id = "tab2">
  <thead>
    <tr>
        <th scope="col " style="color:yellow" > <button  type="submit">  update  </button> </th>
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
      <td> 


  <input type="checkbox"  id="customSwitch1" name = "q910m"  value= false>
 

        </td>
      <td>
          
  <input type="checkbox"  id="customSwitch1" name = "q910t" value=false >
        </td>
      <td>
        
        
       
  <input type="checkbox"  id="customSwitch1" name = "q910w" checked="false">
        </td>
      <td>
        
  <input type="checkbox"  id="customSwitch1" name = "q910th" checked="false">
        </td>
      <td>
        
   
  <input type="checkbox"  id="customSwitch1" name = "q910f" checked="false"> </td>
    </tr>
    <tr>
      <th scope="row">10-11</th>
   
      <td> 

  <input type="checkbox"  id="customSwitch1" name = "1011m">
 

        </td>
      <td>
          
  <input type="checkbox"  id="customSwitch1" name = "1011t">
        </td>
      <td>
        
        
       
  <input type="checkbox"  id="customSwitch1" name = "1011w">
        </td>
      <td>
        
  <input type="checkbox"  id="customSwitch1" name = "1011th">
        </td>
      <td>
        
   
  <input type="checkbox"  id="customSwitch1" name = "1011f"> </td>
    </tr>
   
    <tr>
      <th scope="row">4-5</th>
   
        
        
      <td> 

  <input type="checkbox"  id="customSwitch1" name = "45m">
 

        </td>
      <td>
          
  <input type="checkbox"  id="customSwitch1" name = "45t">
        </td>
      <td>
        
        
       
  <input type="checkbox"  id="customSwitch1" name = "45w">
        </td>
      <td>
        
  <input type="checkbox"  id="customSwitch1" name = "45th">
        </td>
      <td>
        
   
  <input type="checkbox"  id="customSwitch1" name = "45f"> </td>
    </tr>
    <tr>
      <th scope="row">5-6</th>

      <td> 

  <input type="checkbox"  id="customSwitch1" name = "56m">
 

        </td>
      <td>
          
  <input type="checkbox"  id="customSwitch1" name = "56t">
        </td>
      <td>
        
        
       
  <input type="checkbox"  id="customSwitch1" name = "56w">
        </td>
      <td>
        
  <input type="checkbox"  id="customSwitch1" name = "56th">
        </td>
      <td>
        
   
  <input type="checkbox"  id="customSwitch1" name = "56f"> </td>
    </tr>
  </tbody>
</table>  
               <?php 
         echo '     </form>   ';
                   
                   ?> 
               
               <!--- FINISH -->
               
               
          </div>
          
           <div class="options2" id = "l3">
          
               <div class = "pay" id  = "cred">
               
                <div id = "ident" style="height:30%;" > paypal </div>
               
                   <div id  = "paycon">
                   <img src ="paypal.png">
                   </div>
                   
               </div>
               
               
               <div class = "pay" id = "paypal">
               
                <div id = "ident" style="height:30%;" > credit card </div>
                <div id  = "paycon">
                   <img src ="visa.png">
                   </div>
               </div>
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