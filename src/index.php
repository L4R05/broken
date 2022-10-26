<?php
            require('db.php');
            session_start();
            if(isset($_POST['submit'])) {
                $user = $_POST['username']; 
                $passwd = $_POST['password']; 

                $user_sanitized = mysqli_real_escape_string($conn, $user);
                $passwd_sanitized = mysqli_real_escape_string($conn, $passwd);
                
                $query = mysqli_query($conn,"SELECT username,passwd FROM users WHERE username='" . $user_sanitized . "' AND passwd='" . $passwd_sanitized . "'");
                $nums = mysqli_num_rows($query);


                if($nums == 1) {
                    $_SESSION['user'] = $user;
                    header("Location: cpanel.php");
                } else {
                    $message = "<p>usuario o contraseña incorrectos</p>";
                }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISI</title>

    <link rel="stylesheet" href="styles/style.css">    
</head>
<body id="index">
    
    <form method="post" id="form">
        <h2>INICIA SESION</h2>
        <input type="text" name="username" id="username" placeholder="Username" required >
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Entrar">
        <?php
            if(!empty($message)) { 
                echo $message; 
            }
        ?>
    </form>
    
</body>
</html>