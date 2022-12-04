<?php
    include "configure.php";
    
    if(!empty($_GET['id']));
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user where id = '$id'";
        $result = $conn->query($sql);
        $marko = array();
    
        while($row = mysqli_fetch_assoc($result))
        {
            $marko[] = $row;
        }
        foreach($marko as $user)
        {
    
        }
    }

    ?>
    

<!DOCTYPEhtml>
<html>
<head>
<title>Form in HTML</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <h2>Edit Registration form</h2>
    <form action="update.php" method="post" >
    <input type="text" value="<?php echo !empty($user['id'])?$user['id']:''?>" name="id">
    <fieldset>
        <legend>User personal information</legend>      
        <label>Enter your full name</label><br>
              <input type="text" name="name" value = "<?php echo !empty($id)?$user['name']:''; ?>" ><br> 
        <label>Enter your email</label><br> 
        <input type="email" name="email" value = "<?php echo !empty($id)?$user['email']:''; ?>" ><br> 
        <label>Enter your password</label><br> 
        <input type="password" name="pass" value = "<?php echo !empty($id)?$user['password']:''; ?>"><br> 
        
        <label for="contact" >Contact Number</label><br>
        <input type="tel" name="contact" maxlength="10" value = "<?php echo !empty($id)?$user['contact']:''; ?>">
       <br>Enter our Address:<br>
        <textarea name="address" ><?php echo !empty($id)?$user['address']:''; ?></textarea><br>
        <input type="submit" name="update" value="sign-up">
    </fieldset>
</form>
</body>
</html>
