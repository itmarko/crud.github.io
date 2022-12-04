<?php
include"configure.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['pass'];
    $contact  = $_POST['contact'];
    $addr     = $_POST['address'];

    

    $stmt = $conn -> prepare("insert into user(name, email, password, address, contact)
                values(?,?,?,?,?)");
                $stmt ->bind_param("sssss",$name, $email, $password, $addr, $contact);
    
                $stmt ->execute();
                echo '<script>alert("Registration Sucessfull.......")</script>';
                $stmt ->close();
            $conn ->close();
            header('Refresh:0; URL=index.php');


}

?>