<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM boozy_hub where username= '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);


    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["username"] = $username;
            header('location:profile.php');
        } else {
            echo 'incorrect credentials';
        }
    } else {
        echo 'not connected';
    }
}
?>




<?php
include_once("header.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Signup</title>

    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="login.php" method="POST" class="form-container">
        <div class="container">
            <br />
            <h1>Login</h1>

            <input type="text" name="username" id="user-name" placeholder="username/email" required><br />

            <input type="password" name="password" id="password" placeholder="password" required><br />

            <br />

            <input type="submit" value="login" name="login">

            <p>no account? <a href="signup.php">Sign Up</a></p>

        </div>
    </form>

    


    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>

</html>


<?php
include_once("footer.php");
?>