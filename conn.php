
<?php
/*
$dbhost = 'remotemysql.com:3306';
$dbuser = 'BS1CwOyLI0';
$dbpass = 'S9h6V3fRuz';
$dbname = 'BS1CwOyLI0';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($conn);


$host = 'remotemysql.com:3306';
$user = 'BS1CwOyLI0';
$password = 'S9h6V3fRuz';
$db = 'BS1CwOyLI0';
$charset = 'utf8mb4';

$host = '127.0.0.1';
$db ='clg_db';
$password = '';
$user = 'root';
$charset = 'utf8mb4';

$dsn = "mysql: host = $host; dbname = $db; charset = $charset";


    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
        throw new PDOException($e->getMessage());
    
    }

    

*/
//PHP Code - getdb.php
  $utext = $_REQUEST["user"];
   $ptext = $_REQUEST["pass"];
   $flag = false;
 
   //$hostname = "localhost";
   //$username = "root";
   //$password = "";
 
   $con = mysqli_connect('remotemysql.com', 'BS1CwOyLI0', 'S9h6V3fRuz') or die(mysql_error());
   mysqli_select_db($con, "BS1CwOyLI0") or die(mysql_error());
   $result = mysqli_query($con, "select * from myUsers") or die(mysql_error());
 
   while($x = mysqli_fetch_array($result))
   {
      if($utext == $x["first_name"] && $ptext == $x["passwd"])
         $flag = true;
   }
 
   if($flag)
      echo "Valid user!";
   else
      echo "Invalid username or password!";

?>
