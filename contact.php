<?php
    include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Contact Us</title>

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


</body>
</html>

<?php
    include_once("footer.php");
?>