<?php
    include "configure.php";
    
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    $marko = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $marko[] = $row;
    }
    foreach($marko as $user)
    {

    }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <h2>User Data</h2>

    <table>
        <thead>


            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Contact number</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($marko as $user)
            {
                ?>
                <tr>
                    <td>
                        <?php echo $user['name']; ?>
                    </td>
                    <td>
                        <?php echo $user['email']; ?>
                    </td>
                    <td>
                        <?php echo $user['password']; ?>
                    </td>
                    
                    <td>
                        <?php echo $user['address']; ?>
                    </td>
                    
                    <td>
                        <?php echo $user['contact']; ?>
                    </td>
    
                    <td>
                        <a href="<?php echo 'edit.php?id='.$user['id']; ?>">Edit</a>
                        <a href="<?php echo 'delete.php?id='.$user['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </tbody>

    </table>

</body>

</html>