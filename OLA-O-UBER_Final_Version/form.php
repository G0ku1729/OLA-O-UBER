<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $car_type = $_POST['car_type'];
        $pickup_loc = $_POST['pickup_loc'];
        $drop_loc = $_POST['drop_loc'];
        $pick = $_POST['pickup_loc'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
    }
    
    // // database details
    // $host = "localhost";
    // $username = "root";
    // $password = "Shubham846385!";
    // $dbname = "ola";

    // creating a connection

    $conn = new mysqli ("localhost", "root", "","ola"); 
    if ($conn->connect_error){ die('Connetion Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO get_taxi (name, car_type, pickup_loc, drop_loc, email, phoneno) VALUES (?,?,?,?,?,?)");
        $stmt-> bind_param("sssssi",$name, $car_type, $pickup_loc, $drop_loc, $email, $phoneno);
        $stmt -> execute();
        header('Location: http://localhost/ola/request_sent.html') ;
        $stmt-> close();
        $conn->close();
    }

    // // to ensure that the connection is made
    // if (!$mysqli)
    // {
    //     die("Connection failed!" . mysqli_connect_error());
    // }

    // // using sql to create a data entry query
    // $sql = "INSERT INTO get_taxi (name, car_type, pickup_loc, drop_loc, email, phoneno) VALUES ('$name', '$car_type', '$pickup_loc', '$drop_loc', '$email', '$phoneno')";
  
    // // send query to the database to add values and confirm if successful
   
    // $rs = mysqli_query($mysqli, $sql);
    // if($rs)
    // {
    //     echo "Entries added!";
    // }
  
    // // close connection
    // mysqli_close($mysqli);

?>
 <!-- VALUES ('$name', '$car_type', '$pickup_loc', '$drop_loc', '$email', '$phoneno')"; -->
