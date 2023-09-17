<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
    }
    
    

    $conn = new mysqli ("localhost", "root", "","ola"); 
    if ($conn->connect_error){ die('Connetion Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
        $stmt-> bind_param("s",$email);
        $stmt -> execute();
        echo "Subscribed for newsletter";
        $stmt-> close();
        $conn->close();
    }

    ?>
        