<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" > 
    <title>Hello, world!</title>
  </head>
    <script>
       
        function change(y)
                         
                         {
                                 
                                         for (var x = 1; x<6 ; x++)
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
      
      <div  id = "top">
      
      University management system 
    
      </div>
        <div class="d-flex flex-row bd-highlight mb-3">
  <div type = "button"  onclick="change(1)" class="p-2 bd-highlight border border-primary">update personal informationt</div>
  <div type = "button"  onclick="change(2)"  class="p-2 bd-highlight border border-primary">assigned courses</div>
  <div type = "button"  onclick="change(3)"  class="p-2 bd-highlight border border-primary">register student</div>
            
</div>

          <form class = "mid" id = "l1" action="sub.php" method="post">
      UPDATE PERSONAL INFORMATION 
      
      <div class = "box">
          <div id = "label">
          name:
          </div>
       
          <input type="text" name = "name" id = "info_box">
          
          </div>
             <div class = "box">
          <div id = "label">
          total credit:
          </div>
         
          <input type="text" name = "cred" id = "info_box">
          
          </div>
           <div class = "box">
          <div id = "label">
          Department:
          </div>
      
          <input type="text" name = "dpt" id = "info_box">
          
          </div>
          
               <input type="submit" name = "submit_std" class = "box" id = "submit" value="ADD">
        
        
          </form>
     
      
          <div class = "mid" id = "l2">
      Registered courses

              
              <?php 
              
              
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="data"; 
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

              $d =1111;
           $sql = "SELECT * FROM takes where ID =$d ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
$d = $row['course_id'];
        echo '


  <div class = "box">
          <div id = "label">
          ID - '.$d.'
          </div>
        
          <div  style = "color: black;"  id = "info_box">
          '; 
            $dd = $row['course_id'];
           $sql2 = "SELECT * FROM course where course_id = '$d' ";
            
        $result2 = mysqli_query ($conn,$sql2);
                $row2 = mysqli_fetch_array($result2) ;
            
            echo' '.$row2['title'].'
          </div> 
      
      </div>


          ';
        }


              
              
              ?>
    
      
      </div>
      
      
      
          <form class = "mid" id = "l3" action="sub2.php" method="post">
         REGISTER STUDENT 
      <div class = "box">
          <div id = "label">
          select course:
          </div>
          <select name="id" id = "info_box">
              
              
                       <?php 
              
              
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="data"; 
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

              $d =10101;
           $sql = "SELECT * FROM teaches where id =$d ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
            $d = $row['course_id'];
            echo ' 
              
  <option value="'.$d.' ';
  
  $dd = $row['course_id'];
           $sql2 = "SELECT * FROM course where course_id = '$d' ";
            
        $result2 = mysqli_query ($conn,$sql2);
                $row2 = mysqli_fetch_array($result2) ;
            
          
  
   echo ' ">' .$row2['title'].'</option> ';
        }
              
              ?>
              
              
              
              
              
</select>
          
          </div> 
         
        <div class = "box">
          <div id = "label">
          select student:
          </div>
          <select name="s_id" id = "info_box">
              
              
                       <?php 
              
              
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="data"; 
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

              $d =10101;
           $sql = "SELECT * FROM student  ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
            $d = $row['ID'];
            echo ' 
              
  <option value="'.$d.' ';
  
          
  
   echo ' ">' .$row['name'].'</option> ';
        }
              
              ?>
              
              
              
              
              
</select>
          
          </div> 
        
          
            <input type="submit" name = "submit" class = "box" id = "submit" value="ADD">
        
      </form>
       
      
      <div id = "right">
      <img src="im.jpg">
          
      
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>