




<?php
session_start();


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM adminn  where admin_id = '$id' and name  = '$name'";
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
      <title>Admin</title>
      
      <style>
      
          body 
          {
              
              position: absolute;
              width: 100%;
              height: 100%;
              background-color: #E4E5E5;
          }
          #right {
              position: absolute;
              width: 23%;
              height: 80%;
              left: 70%;
              top: 15%;
              background-color: white;
              border: 1px solid blue;
              border-radius: 5px;
              
          }
          
            .left {
              position: absolute;
              width: 60%;
              height: 80%;
              left: 5%;
              top: 20%;
              background-color: white;
              border: 1px solid blue;
              border-radius: 5px;
                overflow-y: scroll;
              
          }
          #buttons
          {
              position:relative;
              width: 90%;
              height: 15%;
              margin-top: 5px;
              left: 5%;
              background-color:#1391B9;
              text-align: center;
              font-size: 25px;
              font-family: 'Roboto Slab', serif;
              padding-top: 10px;
              color: white;
              
          }
          #buttons:hover
          {
              background-color: black;
              
          }
          
          .patch
          {
              position:relative;
              width: 90%;
              height: 15%;
              margin-top: 5px;
              left: 5%;
              background-color:;
              text-align: center;
              font-size: 25px;
              font-family: 'Roboto Slab', serif;
              padding-top: 10px;
              color:;
              border-left:1px solid  black;
              border-top:1px solid  black;
                            
              
  box-shadow: 5px 10px #888888;
          }
          
          
          

#prof_pic
{
    position: absolute;
    width: 13%;
    height: 100%;
    top: 0;
    left: 0;
}
 #button__
{
    position: absolute;
    width: 20%;
    height: 50%;
    top: 20;
    left: 80%;
    text-align: center;
    color: white
}         
          
          
          #ident {
              
              position: relative;
              width: 80%;
              height: 5%;
              left: 10%;
              text-align: center;
              border: 1px solid red;
              
  box-shadow: 5px 10px #888888;
              margin-bottom: 2%;
          }
      #l6
          {
              border: 1px solid red;
          }
    
      
      
            .pic {
              position: absolute;
              width: 10%;
              height: 18%;
              left: 33%;
              top: 0.1%;
              background-color: white;
              border-radius: 5px;
              
          }
          img
          {
              position: absolute;
              width: 100%;
              height: 100%;
              
          }
      </style>
        
        
  </head>
    
    
    <script>
        
        function change(y)
                         
                         {
                                 
                                         for (var x = 1; x<7 ; x++)
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
        
    </script>
    
  <body>
      
      <div class = "pic" style = "border: 1px solid white;"> <img src="admin.png"> </div>
      <section class="left" id = "l1">
      
           <div id = "ident" > trainees </div>
          
          
          
          
               <?php





$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM trainee ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {$idd = $row['school_id'];
                 
                echo ' 
                
                
                
            <div class = "patch">  <div id ="prof_pic"> <img style= "position:absolute; height:100%; width: 100%;"  src = "proff.png" ></div> '.$row['school_id'].' - '.$row['name'].' - '.$row['surname']. ' <div id = "button__" > 
            
            
            <form action = "deleteTe.php?idd='.$idd.'" method = "post"  >
            <button type="submit" class="btn btn-danger btn-sm">delete</button>  </form>
            
            </div> </div>
                
                
                ';
            
        }

            $conn->close();
                ?>



      
      </section>
    

 <section class="left" id = "l2">
           <div id = "ident" > trainers </div>
                      
               <?php





$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM trainer ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
             echo ' 
                
                
                
            <div class = "patch">  <div id ="prof_pic"> <img style= "position:absolute; height:100%; width: 100%;"  src = "man.png" ></div> '.$row['work_id'].' - '.$row['name'].' - '.$row['surname']. ' <div id = "button__" > <button type="button" class="btn btn-danger btn-sm">delete</button> </div> </div>
                
                
                ';
        }

            $conn->close();
                ?>


      
      </section>
      
      <section class="left" id = "l3">
         <div id = "ident" > add trainee</div>
            
      
          
          <form method="post" action="subtrainee.php">
  <div class="form-group">
    <label for="example">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "name">
  </div>
  <div class="form-group">
    <label for="example">surname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "surname">
  </div>
 
                <div class="form-group">
    <label for="example">ID number</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name = "id">
  </div>
 
                     <div class="form-group">
    <label for="example">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name = "email">
  </div>
              
  <button type="submit" class="btn btn-primary">add</button>
</form>
            
            <div class = "patch"> member  </div>
      
      </section> <section class="left" id  = "l4">
            <div id = "ident" > add trainer</div>
            
      
          
          <form method="post" action="subtrainer.php">
  <div class="form-group">
    <label for="example">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "name">
  </div>
  <div class="form-group">
    <label for="example">surname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "surname">
  </div>
 
                <div class="form-group">
    <label for="example">ID number</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name = "id">
  </div>
 
                     <div class="form-group">
    <label for="example">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name = "email">
  </div>
              
  <button type="submit" class="btn btn-primary">add</button>
</form>
            <div class = "patch"> member  </div>
      
      </section>
      
      
      <section class="left" id ="l5">
            
               <?php





$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

        $sql = "SELECT * FROM trainee ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
                 
              
            $idd =$row['school_id'];  echo ' 
                
                
                
            <div class = "patch">  <div id ="prof_pic"> <img style= "position:absolute; height:100%; width: 100%;"  src = "proff.png" ></div> '.$row['school_id'].' - '.$row['name'].' - '.$row['surname']. ' <div id = "button__" >
            ';
            
            
            
            // drop down instructors 
            if ($row['trainer'] == 0)
            {
                
                
            
            echo '
            
            
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Assign
  </button>
  <div class="dropdown-menu">
    ';
            $sql2 = "SELECT * FROM trainer ORDER BY id DESC";
        $result2 = mysqli_query ($conn,$sql2);






        while ( $row2 = mysqli_fetch_array($result2) )
        {
            
            if ($row2['trainee1_id'] != null && $row2['trainee2_id'] != null && $row2['trainee3_id'] != null )
            {
                
                       
            echo'
    <a class="dropdown-item" href="#"> 
    
    

    <button style = "background-color: red; color: white;">
    '.$row2['name'].' - fully booked
    </button>
    
   
    
    </a> 
 
           
                
                
                ';
                
            }
            
            else 
                
            echo'
    <a class="dropdown-item" href="#"> 
    
    
    <form method= "post" action = "assign.php?idd='.$row2['work_id'].'">
    
    <input name = "get_id" value = '.$idd.' style = "display:none;" > 
    
    
    <button type ="submit" style = "background-color: green; color: white;">
    '.$row2['name'].'
    </button>
    
    </form>
    
    </a> 
 
           
                
                
                ';
            
        }
            
            echo '     
  </div>
            
            </div></div>
            </div>';}
            
            
            else 
            {
                echo '
            <form action = "unasign.php?idd='.$idd.'" method = "post" >
            <button type="submit" class="btn btn-danger btn-sm">un asign</button>  </form>
            
            </div> </div>
                
                
                ';  
                
            }
            
        
            }

            $conn->close();
                ?>
          
            <div class = "patch"> assign  </div>
      
      </section>
      
      <section class="left" id ="l6">
     
           <div id = "ident" > announce </div>
          
          
            
            <div class = "patch"> make an announcement</div>
          
          
          <form action="announce.php" method="post" >
              
              <div class="form-group" style="display: none;">
    <textarea name = "fromm" value = "admin"></textarea>
  </div>
           
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input name = "subject" type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Gym closed for public holiday">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Announcement</label>
    <textarea name = "an" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
              
              <button type="submit" class="btn btn-primary mb-2">announce</button>
</form>
          
      </section>

      <section id="right">
         <button onclick="change(1)"  id = "buttons" > view all trainees </button> 
         <button onclick="change(2)"  id = "buttons"> view all instructors  </button> 
         <button onclick="change(3)"  id = "buttons"> add new trainee  </button> 
         <button onclick="change(4)"  id = "buttons"> add new trainer  </button> 
        <button onclick="change(5)"  id = "buttons"> assign   </button>       
        <button onclick="change(6)" id = "buttons"> announcement </button> 
      </section>



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