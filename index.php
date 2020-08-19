<?php
require "database/connection.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>JustCode.com</title>
  </head>
  <body >
      <div class="container-fluid bg-dark">
          <div class="row">
              <div class="col-md-2 ">
                  <a class="text-danger h3 font-weight-bolder  mt-3" href="sample.php" >JustCode.com</a>
              </div><div class="col-md-10">
                  <span class="text-info text-left"><--wants to visit website click here</span>
              </div>
            </div></div>
      <center><a href="index1.php" class="text-success  h3">Join Us</a><a href="index.php" class="text-primary ml-2 h2">Login</a></center>
      <div class="container">
          <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  <form   action="join.php" method="POST"  class="form">
                      <div class="form-group">
                          <label for="inputname">Username</label>
                          <input type="text" class="form-control" name="u1" id="u1" placeholder="Username"> <P id="wa" >Warning! caps lock is on</P>  <span id="s1" style="color: red;font: weight 5;"></span>
                      </div>
                      <div class="form-group">
                          <label for="inputpassword">password</label>
                          <input type="password" class="form-control" name="p1" id="p1" placeholder="Password"> <span id="s2" style="color: red;font: weight 5;"></span>
                      </div>
                      
                        <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"><span id="s3" class="text-danger"></span>
                            </div>
                      <div class="form-group">
                            <label class="form-check-label"><input type="checkbox"> Remember me</label>
                      <button type="submit" class="btn btn-primary" name="login" id="btn">Login</button>
                  </form>
              </div>
              <div class="col-md-2"></div>
          </div>
      </div>

  </body>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
            var input = document.getElementById("u1");
            var text = document.getElementById("wa");
            input.addEventListener("keyup", function(event) {
            
            if (event.getModifierState("CapsLock")) {
                text.style.display = "block";
              } else {
                text.style.display = "none"
              }
            });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="login.js" type="text/javascript">
    </script>
  </body>
</html>