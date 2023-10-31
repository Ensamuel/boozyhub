<?php session_start();

if (!isset($_SESSION["username"])) {
    header("login.php");
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

    <link rel="stylesheet" href="profile.css">

    <title>Signup</title>

    <script src="jquery-3.6.0.min.js"></script>

    <script src="profile.js"></script>
</head>

<body>

    <h1>Welcome <?php
                echo $_SESSION['username'];
                ?>
    </h1>


    <div>
        <select name="course" id="course">
            <option>select</option>
            <option value="1">Web Development</option>
            <option value="2">UX Design</option>
            <option value="3">Devops</option>
            <option value="4">Cloud Engineering</option>
        </select>
    </div>

    <div>
        <h3>Recommended Learning Resources</h3>
        <div id="course-content">
            <div class= 'web-development'>
                <h4>Web Development</h4>
                <p>Course Title: Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)</p>
                <p>Teacher: FreecodeCamp</p>
                <p>Platform: YouTube </p>
                <p>link: <a href="https://youtu.be/zJSY8tbf_ys?si=_Q4KwOLjVszexoOD"></a></p>
                <p>Price: Free </p>
            </div>

            <div class= 'course-content'>
                <h4>Web Development</h4>
                <p>Course Title: Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic</p>
                <p>Teacher: Ws Cube Tech</p>
                <p>Platform: YouTube </p>
                <p>link: 
                    <a href="https://youtu.be/HVjjoMvutj4?si=4VoBgVPlnxeN3tz_"></a></p>
                <p>Price: Free </p>
            </div>

            <div class= 'course-content'>
                <h4>Web Development</h4>
                <p>Course Title:Web Development In 2023 - A Practical Guide</p>
                <p>Teacher: Traversy Media</p>
                <p>Platform: YouTube </p>
                <p>link: 
                    <a href="https://youtu.be/u72H_zZzkcw?si=Kc65-Ayhlymdbg1r"></a></p>
                <p>Price: Free </p>
            </div>

            <div class= 'course-content'>
                <h4>Web Development</h4>
                <p>Course Title: JavaScript Full Course for Beginners | Complete All-in-One Tutorial | 8 Hours</p>
                <p>Teacher: Dave Gray</p>
                <p>Platform: YouTube </p>
                <p>link: 
                    <a href="https://youtu.be/EfAl9bwzVZk?si=WEVtpG7tbEHh5ZrD"></a></p>
                <p>Price: Free </p>
            </div>
            
        </div>



    </div>

    

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>

</html>


<?php
include_once("footer.php");
?>