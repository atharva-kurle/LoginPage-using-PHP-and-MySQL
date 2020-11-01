<?php   
session_start();
session_unset();
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
        
        <ul class = "right">
        <li><a class="waves-effect" href="index.php">Home</a></li> 
            <li><a class="waves-effect" href="login.php">Login</a></li> 
            <li><a class="waves-effect" href="signin.php">Register</a></li>
        </ul>
    </nav>

    <h4 class = "container white-text center-align" style = "margin-top : 80px;">
        Logout successful. 
    </h4>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>