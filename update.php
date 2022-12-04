<?php
include"configure.php";

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['pass'];
    $contact  = $_POST['contact'];
    $addr     = $_POST['address'];

    
    $sql = "UPDATE user SET id = $id, name = '$name', email = '$email', password = '$password', contact = '$contact', address = '$addr' where id = $id";
    $result = $conn->query($sql);
    if($result)
    echo '<script>alert("Update Sucessfull.......")</script>';
    
    header('Refresh:0; URL=index.php');
    }


?>