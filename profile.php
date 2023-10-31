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


    <link rel="stylesheet" href="profile.css">

    <title>Signup</title>



</head>

<body>

    <h1>Welcome <?php
                echo $_SESSION['username'];
                ?>
    </h1>


    <div>
        <select name="course" id="course">
            <option value="0">select</option>
            <option value="1">Web Development</option>
            <option value="2">UX Design</option>
            <option value="3">Cloud Engineering</option>
        </select>
    </div>

    <div class="container">
        
        <ul class="nav nav-tabs" id="componentTabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#component1">Recommended Learning Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#component2">Roadmap</a>
            </li>
        </ul>
        <div class="tab-content">

            <div id="component1" class="tab-pane fade show active">
                <div id="no-course"> Select Course</div>
                <div id="web-development">
                    <div>
                        <h6>Web Development</h6>
                        <p>Course Title: Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)</p>
                        <p>Teacher: FreecodeCamp</p>
                        <p>Platform: YouTube </p>
                        <p>link: <a href="https://youtu.be/zJSY8tbf_ys?si=_Q4KwOLjVszexoOD">Click here</a></p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Web Development</h6>
                        <p>Course Title: Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic</p>
                        <p>Teacher: Ws Cube Tech</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/HVjjoMvutj4?si=4VoBgVPlnxeN3tz_">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Web Development</h6>
                        <p>Course Title:Web Development In 2023 - A Practical Guide</p>
                        <p>Teacher: Traversy Media</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/u72H_zZzkcw?si=Kc65-Ayhlymdbg1r">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Web Development</h6>
                        <p>Course Title: JavaScript Full Course for Beginners | Complete All-in-One Tutorial | 8 Hours</p>
                        <p>Teacher: Dave Gray</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/EfAl9bwzVZk?si=WEVtpG7tbEHh5ZrD">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                </div>


                <div id="ux-design">
                    <div>
                        <h6>Ux Design</h6>
                        <p>Course Title: Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)</p>
                        <p>Teacher: FreecodeCamp</p>
                        <p>Platform: YouTube </p>
                        <p>link: <a href="https://youtu.be/zJSY8tbf_ys?si=_Q4KwOLjVszexoOD">Click here</a></p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Ux Design</h6>
                        <p>Course Title: Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic</p>
                        <p>Teacher: Ws Cube Tech</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/HVjjoMvutj4?si=4VoBgVPlnxeN3tz_">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>UX Design</h6>
                        <p>Course Title:Web Development In 2023 - A Practical Guide</p>
                        <p>Teacher: Traversy Media</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/u72H_zZzkcw?si=Kc65-Ayhlymdbg1r">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>UX Design</h6>
                        <p>Course Title: JavaScript Full Course for Beginners | Complete All-in-One Tutorial | 8 Hours</p>
                        <p>Teacher: Dave Gray</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/EfAl9bwzVZk?si=WEVtpG7tbEHh5ZrD">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                </div>


                <div id="cloud-engineering">
                    <div>
                        <h6>Cloud Engineering</h6>
                        <p>Course Title: Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)</p>
                        <p>Teacher: FreecodeCamp</p>
                        <p>Platform: YouTube </p>
                        <p>link: <a href="https://youtu.be/zJSY8tbf_ys?si=_Q4KwOLjVszexoOD">Click here</a></p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Cloud Engineering</h6>
                        <p>Course Title: Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic</p>
                        <p>Teacher: Ws Cube Tech</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/HVjjoMvutj4?si=4VoBgVPlnxeN3tz_">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Cloud Engineering</h6>
                        <p>Course Title:Web Development In 2023 - A Practical Guide</p>
                        <p>Teacher: Traversy Media</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/u72H_zZzkcw?si=Kc65-Ayhlymdbg1r">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div>
                        <h6>Cloud Engineering</h6>
                        <p>Course Title: JavaScript Full Course for Beginners | Complete All-in-One Tutorial | 8 Hours</p>
                        <p>Teacher: Dave Gray</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/EfAl9bwzVZk?si=WEVtpG7tbEHh5ZrD">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                </div>

            </div>

            <div id="component2" class="tab-pane fade">
                <div id='web-dev'>
                    Web Dev
                </div>
                <div id='ux-des'>
                    UX Des
                </div>
            </div>
        </div>
    </div>




    <script src="profile.js"></script>
</body>

</html>