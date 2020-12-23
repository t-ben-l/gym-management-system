<?php



session_start();
 
// Storing session data
$_SESSION["username"] = $_POST['username'];
$_SESSION["user_id"] = $_POST['password'];
$_SESSION["error"] = 2;
$id2 = $_SESSION["user_id"];
  $name =$_SESSION["username"] ;      
       $count = 0 ;
        $c =0;
$identify = "tem";

    $id = array() ;

while($count<strlen($id2))
{
    if ($count<3)
    {
    $identify[$count] = $id2[$count];
    }
    
    
    else
    {
           
    $id[$c++] = $id2[$count];
    }
    
    $count++;
}
 $id = implode("",$id);
   
$_SESSION["id"]   = $id;





$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="fit";

        
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);


        $sql = "SELECT * FROM adminn  where admin_id = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);




if ($numrows > 0 && $identify == "adm" && strlen($id) == 5)
{
    
    //header("location:admin.php");
//echo ' num rows = '.$numrows.'<br>  identify = '.$identify.' <br> id = '.$id.' <br> name = '.$name.' <br> id length = '.strlen($id);
    header("location:user.php");





}



else
{




        $sql = "SELECT * FROM trainer  where work_id = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);



                if ($numrows > 0 && $identify == "ins"  && strlen($id) == 5)
                {



                    header("location:trainer.php");





                }



                else
                {


                                    $sql = "SELECT * FROM trainee where school_id = '$id' and name  = '$name'";
                                    $result = mysqli_query ($conn,$sql);

                            $numrows = mysqli_num_rows($result);



                            if ($numrows > 0 && $identify == "std" )
                            {

                                header("location:trainee.php");





                            }
                    else
                    {
                       // echo ' num rows = '.$numrows.'<br>  identify = '.$identify.' <br> id = '.$id.' <br> name = '.$name.' <br> id length = '.strlen($id);
 
                              header("location:indexx.php");
                    
                    
                    }



                }



}

?>