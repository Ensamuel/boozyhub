<?php
    include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 id="boozy"><a href="index.html">Boozy!</a></h1>

<form>

    <div class="container">
        <h2>Send In Your Application!</h2>

        <div class="form-container">

            <div class="row">
                <div class="col-lg-12">
                    <input type="text" name="firstName" id="firstName" placeholder="your name">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12"> 
                    <input type="email" name="email" id="email" placeholder="email">
                </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <label for="list">Choose Your Course
                </label><br>
                <select name="list" id="list">
                    <option value="web development">Web Development</option>
                    <option value="ui/ux">UI/UX design</option>
                    <option value="App Development">App Development</option>
                </select>
              </div>
          </div>

            <button type="submit" onclick="">Apply!</button>
        </div>
</form>

<script>
    document.querySelector('button').addEventListener('click', function(){
        alert('Application Received Successfuly')
    })
</script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>


<?php
    include_once("footer.php");
?>