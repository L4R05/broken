<?php
    session_start();

    $user = $_SESSION['user'];
    
    if(!isset($user)){
        header("Location: index.php");
    }
    
    if(isset($_POST['exit'])) {
        if($_POST['exit'] == 'Salir') {
            session_destroy();
            header("Location: /");
        }  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cpanel</title>
    <link rel="stylesheet" href="styles/cpanel.css">

</head>
<body>
    <div class="wrapper">
        <nav class="right" id="sidebar">
            <div class="top">
                <div class="card">
                    <div class="image">
                        <img src="images/profile.jpg">
                    </div>
                    <div class="text">
                        <span class="name">Admin</span>
                    </div>
                </div>
            </div>

            <div class="container-menu">
                <ul class="menu">
                    <li>
                        <a href="#" class="nav-link"><i class="bi bi-collection"></i>Subir Archivo</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link" data-toggle="dropdown" data-menu="dashboard"><i class="bi bi-grid-1x2"></i>Dashboard</a>
                        <div id="dashboard" class="dropdown-content">
                            <a href="#">Configuration</a>
                            <a href="#">Categories</a>
                            <a href="#">Notifications</a>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="nav-link"><i class="bi bi-collection"></i>Widgets</a>
                    </li>

                    <li>
                        <a href="#"><i class="bi bi-layers"></i>Pages</a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link" data-toggle="dropdown" data-menu="components"><i class="bi bi-box"></i>Components</a>
                        <div id="components" class="dropdown-content">
                            <a href="#">Blocks</a>
                            <a href="#">Categories</a>
                            <a href="#">Notifications</a>
                        </div>
                    </li>
                </ul>
            </div>
        
            <div class="bottom">
                <span>Dashboard</span>
            </div>
        </nav>
    
        <div id="content">
            <nav class="top" id="content-nav">
                <div>
                    <a href="#" class="btn primary" id="btn-sidebar"></a>
                </div>
                <div id="title">
                    <p>CONGRESO INTERNACIONAL DE SEGURIDAD DE LA INFORMACION</p>
                </div>
                <div>
                    <form method="post">
                        <input type="submit" name="exit" value="Salir" id="exit">
                    </form>
                </div>
            </nav>
                <div class="flag">
                        <h2>CI5I{th3_fl4g}</h2>
                </div>
            </nav>
        </div>
    </div>

    <script src="./scripts/cpanel.js"></script>
</body>
</html>