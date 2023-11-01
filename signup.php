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
    echo 'not signup yet';
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



</body>

</html>


<?php
include_once("footer.php");
?>