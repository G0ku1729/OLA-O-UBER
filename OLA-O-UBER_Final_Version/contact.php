<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $message = $_POST['message'];
    }
    
    

    $conn = new mysqli ("localhost", "root", "","ola"); 
    if ($conn->connect_error){ die('Connetion Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO contact (name, phoneno, message) VALUES (?,?,?)");
        $stmt-> bind_param("sis",$name, $phoneno, $message);
        $stmt -> execute();
        echo "Comment Accepted";
        $stmt-> close();
        $conn->close();
    }

    ?>
    