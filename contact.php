<?php
    include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="contact.css">

    <title>Contact Us</title>

  <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
 
    <form>
        <div class="container">
            <h1>Contact Us</h1>
            <div class="form-container">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="user-name" id="user-name" placeholder="Name">
                   
                        <input type="text" name="email" id="email" placeholder="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="number" name="phone-number" id="phone-number" placeholder="phone number">
                        <input type="text" name="Subject" id="Subject" placeholder="Enter Subject">
                </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12">
                       <textarea name="Message" id="Message" placeholder="type in your message" style="resize: none;"></textarea>
                    </div>
                </div>
                <button type="submit"> Send A Message</button>
            </div>
        </div>
    </form>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h4>Boozy!</h4>
              <p>25, Orona Street, Oshodi, Lagos State, Nigeria</p>
            </div>
            <div class="col-sm-4">
              <h4>Information</h4>
              <p>About Us</p>
              <p>Courses</p>
            
            </div>
            <div class="col-sm-4 social-media">
              <h4>Social Media Links</h4>
              <p><img src="images/facebook.png" alt="">Facebook</p>
              <p><img src="images/twitter.png" alt="">Twitter</p>
              <p><img src="images/instagram.png" alt="">Instagram</p>
             <p> <img src="images/youtube.png" alt="">YouTube</p>
            </div>
            
          </div>
        </div>
      </footer>
 <script>
  document.querySelector('button').addEventListener('click', ()=>{alert("We'll get back to you ASAP")})
 </script>   
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>

<?php
    include_once("footer.php");
?>