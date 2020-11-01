<?php include("connection.php");
error_reporting(0);

if(isset($_POST['submit'])){

if(!empty($_POST['userid'] && !empty($_POST['password'] && !empty($_POST['repass']))))
{
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    $q_id = "SELECT USERID FROM INFO WHERE USERID = '$userid'";
    $run = mysqli_query($conn, $q_id);
    $data = mysqli_num_rows($run);

    if(strlen($userid)>32)
    {   
        ?>
        <h6 class="red-text" style=" position: absolute; left: 44%; top: 12;">Enter userid between 1-30 characters!</h6>

        <?php
    }
    if($data == 1)
        {
            ?>
        <h6 class="red-text" style=" position: absolute; left: 44%; top: 12;">User ID exists. Enter another user ID.</h6>

        <?php
        }

    if(strlen($password)<5)
    {
        ?>
        <h6 class="red-text" style=" position: absolute; left: 44%; top: 12;">Enter password between 5-12 characters!</h6>

        <?php
    }
 
    if($password != $repass){
        ?>
        <h6 class="red-text" style=" position: absolute; left: 44%; top: 12;">Password didnt match. Try again!</h6>

        <?php
    }

    else {
        $q_insert = "INSERT INTO INFO VALUES ('$userid', '$password')";
        $inn = mysqli_query($conn, $q_insert);

        if($inn)
        {
            ?>
        <h6 class="green-text" style=" position: absolute; left: 44%; top: 12;">Registration Successful!</h6>

        <?php
        }
    }

}
else{
    ?>
        <h6 class="red-text" style=" position: absolute; left: 44%; top: 12;">Fill all the details!</h6>

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

    <h1 class = "white-text log_in center">Register</h1>

    <div class="row">
        <div class="col l4"></div>
        <div class="col l4">
    <form action="" method="POST">
        <div class="input-field white-text">
            <i class="material-icons prefix">account_circle</i>
            <input class="white-text" type="text" name="userid" id="1">
            <label for = "1">Enter your user id</label>
            <h5 class="hide">Enter characters between 1-30</h5>
        </div>
        <div class="input-field white-text">
        <i class="material-icons prefix">lock</i>
            <input class="white-text" type="password" name="password" id="2">
            <label for = "2">Enter your password</label>
        </div>
        <div class="input-field white-text">
        <i class="material-icons prefix">lock</i>
            <input class="white-text" type="password" name="repass" id="3">
            <label for = "3">Re-enter your password</label>
        </div>
        <button type="submit" name = "submit" class="btn waves-effect">Register</button>
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

