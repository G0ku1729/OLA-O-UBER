<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $licence = $_POST['licence'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    
  
    $conn = new mysqli ("localhost", "root", "","ola"); 
    if ($conn->connect_error){ die('Connetion Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO register (name, gender, phoneno, email, dob, licence, username, password) VALUES (?,?,?,?,?,?,?,?)");
        $stmt-> bind_param("ssisssss",$name, $gender, $phoneno, $email, $dob, $licence, $username, $password);
        $stmt -> execute();
        
        header('Location: http://localhost/ola/register_success.html') ;
        
        $stmt-> close();
        $conn->close();
    }
    
?>
 
 <!-- <input type="text" placeholder="Name" name="name">
              <input type="text" placeholder="gender" name="gender">
              <input type="text" placeholder="Phone_number" name="phoneno">
              <input type="text" placeholder="Email" name="email">
              <input type="text" placeholder="DOB" name="dob">
              <input type="text" placeholder="licence_number" name="licence">
              <input type="text" placeholder="username" name="username">
              <input type="text" placeholder="password" name="password"> -->