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
    

    <title>Signup</title>

    
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

    


   
</body>

</html>


<?php
include_once("footer.php");
?>