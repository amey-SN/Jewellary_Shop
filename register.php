<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="register.php" method="post">
        <input type="text"  name="name" placeholder="Username">
        <input type="text" name="pass" placeholder="Password" >
        <button type="submit">Login</button>
        
    </form>
    <a href="create.html"><button >Create Account</button></a>
    <!-- Php script for  -->
    <?php
    $usern  =$_POST['name'];
    $pass  =$_POST['pass'];
    
 




    ?>
</body>
</html>