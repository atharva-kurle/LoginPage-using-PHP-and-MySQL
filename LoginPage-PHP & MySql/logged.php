<?php include("connection.php");
session_start();
$s = $_SESSION["user_id"];

if($s == true)
{
}
else{
    header('location:login.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav-wraper transparent z-depth-1">
    <ul class="brand-logo " style = "margin-left: 60px;">Welcome, <?php echo $_SESSION["user_id"]; ?></ul>
        
        <ul class = "right">
            <li><a class="waves-effect" href="logout.php">Logout</a></li> 
        </ul>
    </nav>

    <h4 class = "container white-text center-align" style = "margin-top : 80px;">
        This is a simple website made using PHP and MySQL database. To view more projects like these, please click on the link below: <a href="https://github.com/contfrelnc?tab=repositories">https://github.com/contfrelnc?tab=repositories</a>
    </h4>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>