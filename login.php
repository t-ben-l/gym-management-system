      
              <?php 
              

$id = $_POST['id'];
$name = $_POST['name'];

$user = $_POST['user'];


$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="data"; 
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);


if (user== 0)
{
    echo ' please select valid user ';
}
else if (user == 1)
{
    
    
    
}

else if (user == 2)
{
    
    
    
}else if (user == 3)
{
    
    
    
}

              $d =1111;
           $sql = "SELECT * FROM takes where ID =$d ";
        $result = mysqli_query ($conn,$sql);





?>