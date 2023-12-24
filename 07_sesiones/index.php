<?php
    // Initialize the session
    //session_start();
    
    // Check if the user is logged in, if not then redirect him to login page
    /*if(!isset($_SESSION["usuario"])){
        header("location: login.php");
        exit;
    }*/
?>

<h1>¡Welcome!</h1>
<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location: login.php");
        exit;
    }
    echo "Has iniciado sesión como {$_SESSION["usuario"]}";
    
?>

<h4><a href="logout.php">Logout</a></h4>