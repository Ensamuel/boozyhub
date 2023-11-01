<?php session_start();

if (!isset($_SESSION["username"])) {
    header("login.php");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="landing.css">

    <script src="jquery-3.6.0.min.js"></script>

    <title>Profile</title>

</head>

<body class='container'>
    <div class='d-flex justify-content-between'>
        <h1>Welcome <?php
                    echo $_SESSION['username'];
                    ?>
        </h1>

        <h1>
            <a href="logout.php"> logout</a>


        </h1>

    </div>



    <div>
        <select name="course" id="course">
            <option value="0">select</option>
            <option value="1">Web Development</option>
            <option value="2">Devops</option>

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
                    <div class='web-body'>
                        <h6>Web Development</h6>
                        <p>Course Title: Frontend Web Development Bootcamp Course (JavaScript, HTML, CSS)</p>
                        <p>Channel: FreecodeCamp</p>
                        <p>Platform: YouTube </p>
                        <p>link: <a href="https://youtu.be/zJSY8tbf_ys?si=_Q4KwOLjVszexoOD">Click here</a></p>
                        <p>Price: Free </p>
                    </div>

                    <div class='web-body'>
                        <h6>Web Development</h6>
                        <p>Course Title: Web Development Complete Course [30 Hours] | Learn Full Stack Web Development From Basic</p>
                        <p>Channel: Ws Cube Tech</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/HVjjoMvutj4?si=4VoBgVPlnxeN3tz_">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div class='web-body'>
                        <h6>Web Development</h6>
                        <p>Course Title:Web Development In 2023 - A Practical Guide</p>
                        <p>Channel: Traversy Media</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/u72H_zZzkcw?si=Kc65-Ayhlymdbg1r">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                    <div class='web-body'>
                        <h6>Web Development</h6>
                        <p>Course Title: JavaScript Full Course for Beginners | Complete All-in-One Tutorial | 8 Hours</p>
                        <p>Channel: Dave Gray</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/EfAl9bwzVZk?si=WEVtpG7tbEHh5ZrD">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>

                </div>

                <div id="devops">
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Python Full Course for free </p>
                        <p>Channel: Bro Code</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/XKHEtdqhLK8?si=JhSCs0KmU8h8tTTE">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Introduction to Linux Full Course for Beginners</p>
                        <p>Channel: Freecodecamp</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/sWbUDq4S6Y8?si=e3vv6vR7Nl_uS0db">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Git & GitHub Full Course in 5 Hours | Git GitHub Tutorial for Beginners | DevOps Training | Edureka</p>
                        <p>Channel: Edureka!</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://www.youtube.com/live/KMOmw19ZCGs?si=aHqxP6x_R6kda9_W">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: AWS Certified Cloud Practitioner Certification Course (CLF-C01) - Pass the Exam!</p>
                        <p>Channel: freecodecamp</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/SOTamWNgDKc?si=5AMkfY9T_dBuQTn7">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Docker Containers and Kubernetes Fundamentals Full Hands-On Course</p>
                        <p>Channel: freecodecamp</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/kTp5xUtcalw?si=jrbXaQpgBWzvmAoF">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Docker Containers and Kubernetes Fundamentals – Full Hands-On Course</p>
                        <p>Channel: freecodecamp</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/kTp5xUtcalw?si=xhFcR8ge2zIYUyHN">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                    <div class='devops-body'>
                        <h3>Devops</h3>
                        <p>Course Title: Kubernetes Beginner To Expert Level In One Video | Ultimate Kubernetes Guide | #kubernetes #k8s</p>
                        <p>Channel: Abhishek.Veeramalla</p>
                        <p>Platform: YouTube </p>
                        <p>link:
                            <a href="https://youtu.be/JoHUi9KvnOA?si=_CUJBuPJDW3ATge_">Click here</a>
                        </p>
                        <p>Price: Free </p>
                    </div>
                </div>


            </div>

            <div id="component2" class="tab-pane fade">
                <div id='web-dev'>

                    <h3>REQUIRED TECHNOLOGIES</h3>
                    <p>HTML</p>
                    <p>CSS</p>
                    <p>JavaScript</p>
                    <p>React/Angular/Vue</p>
                    <p>Git/Github</p>
                    <p>PHP/Nodejs/C#/Java</p>
                    <p>Laravel/Express/.NET/Springboot</p>
                </div>

                <div id='dev-ops'>

                    <h3>REQUIRED TECHNOLOGIES</h3>
                    <p>Python/Golang</p>
                    <p>Operating system</p>
                    <p>Version Control</p>
                    <p>Cloud Computing</p>
                    <p>Docker</p>
                    <p>Kubernates</p>
                </div>

            </div>


        </div>


    </div>

    <?php
        include_once('footer.php');
    ?>


    <script src="profile.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>