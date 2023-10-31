<?php
require('connection.php');

if (isset($_POST["signup"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];



    $sql = "SELECT * FROM boozy_hub where username = '$username' or email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<h3> This user exists</h3>';
    } else {
        $sql = "INSERT INTO boozy_hub (username, password, firstname, lastname, email)
    
    VALUES('$username','$password', '$firstname', '$lastname', '$email' )";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<h3>success</h3>';
        }else{
            echo 'failed';
        }
    }
} else {
    echo 'not posted';
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
    <form action="signup.php" method="POST" class="form-container">
        <div class="container">
            <br />
            <h1>Sign Up</h1>

            <input type="text" name="firstname" id="user-name" placeholder="first name" required><br />

            <input type="text" name="lastname" id="email" placeholder="lastname" required><br />

            <input type="text" name="username" id="username" placeholder="username" required><br />
           
            <input type="email" name="email" id="email" placeholder="Enter email"><br />


            <input type="password" name="password" id="password" placeholder='password' required><br />

            <input type="submit" value="signup" name="signup">

            <p>have account? <a href="login.php">login</a></p>

        </div>
    </form>


    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>

</html>


<?php
include_once("footer.php");
?>