<?php include("connection.php");
error_reporting(0);
session_start();


if(isset($_POST['submit'])){

if(!empty($_POST['userid'] && !empty($_POST['password']))){

    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $q_info = "SELECT * FROM INFO WHERE USERID = '$userid'";
    $result = mysqli_query($conn, $q_info);
    $data = mysqli_num_rows($result);
    $name = mysqli_fetch_assoc($result);

    if($data == 1 && $password == $name['password'])
    {
        $_SESSION["user_id"] = $name['userid'];
        header('Location: logged.php');
    }
    else if($data == 1 && $password != $name['password'])
    {
        ?>
        <h6 class="red-text" style=" position: absolute; left: 40%; top: 12;">Enter correct password</h6>

        <?php
    }
    else if($data == 0){

        ?>
        <h6 class="red-text" style=" position: absolute; left: 46%; top: 12;">No user found!</h6>

        <?php
    }

    
}

else{
    ?>
        <h6 class="red-text" style=" position: absolute; left: 40%; top: 12;">Enter yout User ID and Password!</h6>

        <?php
}

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
        <ul class = "right">
            <li><a class="waves-effect" href="index.php">Home</a></li> 
            <li><a class="waves-effect" href="login.php">Login</a></li> 
            <li><a class="waves-effect" href="signin.php">Register</a></li>
        </ul>
    </nav>

    <h1 class = "white-text log_in center">Log In</h1>

    <div class="row">
        <div class="col l4"></div>
        <div class="col l4">
    <form action="" method="POST">
        <div class="input-field white-text">
            <i class="material-icons prefix">account_circle</i>
            <input class="white-text" type="text" name="userid" id="1">
            <label for = "1">Enter your user id</label>
        </div>
        <div class="input-field white-text">
        <i class="material-icons prefix">lock</i>
            <input class="white-text" type="password" name="password" id="2">
            <label for = "2">Enter your password</label>
            <button type="submit" name = "submit" class="btn waves-effect">Login</button>
        </div>
    </form>
</div>
    </div>
    <div class="col l4"></div>
</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>