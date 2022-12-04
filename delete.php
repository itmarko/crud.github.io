<?php
include"configure.php";

if(!empty($_GET['id']));{
    $id = $_GET['id'];
    $sql = "delete from user where id = $id";
    $result = $conn->query($sql);
    if($result)
        echo '<script>alert("Record Deleted Sucessfull.......")</script>';

    header('Refresh:0; URL=index.php');
    


}

?>