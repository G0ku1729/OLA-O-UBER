<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ola";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    // echo "connected";
}


// if (isset($_GET['Roll_No'])) {  
//   $Roll_No = $_GET['Roll_No'];  
//   $Roll_No='211000069'
//   $delete = mysqli_query($conn,"DELETE FROM `student` WHERE Roll_No =  $Roll_No");  
// }


  $sql="SELECT * FROM get_taxi"; 
  $result= mysqli_query($conn,$sql);

  //find the number of records return
  $num= mysqli_num_rows($result);
//   echo "number of entries<br>"; 
  // echo $Roll_No;
  // echo "<br>";
  //
  if($num>0)
  {
    $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo $row['First_Name'].$row['Last_Name'];
    echo "<br>";


    $id= $_GET['id'];
    echo $id;
}


$query="DELETE FROM get_taxi WHERE id = '$id'";
$data=mysqli_query($conn,$query);
if ($data)
{   header("Location: accepted.html");
    echo "Ride Initiated";
    ?>
    <meta http-equiv = "refresh" content=0; url = "http://localhost/ola/login2.php" />
    <?php
}
else
{
    echo "failed To Delete";
}
?>