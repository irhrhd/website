<?php
require("vars.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DigitalTeal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
  
<div class="alert alert-info" role="alert">This site is under construction.</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <img src="/assets/img/logo.png" alt="DigitalTeal Logo">
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./team">Team</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About</h2>
      <p><?php
            echo $digitalTealConfig["about"];
        ?></p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#info" onclick="document.getElementById('info').style.display = 'block'; document.getElementById('jumpbound').style.display = 'none'; this.className = 'nav-link active'; document.querySelectorAll('.nav-pills > .nav-item > .nav-link')[1].className = 'nav-link';">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#jumpbound" onclick="document.getElementById('jumpbound').style.display = 'block'; document.getElementById('info').style.display = 'none'; this.className = 'nav-link active'; document.querySelectorAll('.nav-pills > .nav-item > .nav-link')[0].className = 'nav-link';">Jumpbound</a>
        </li>
        <!--
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        -->
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8" id="info" style="display: block;">
      <h2>About us</h2>
      <?php
            echo $digitalTealConfig["about"];
      ?>
    </div>
    <div class="col-sm-8" id="jumpbound" style="display: none;">
        <?php
            echo $digitalTealConfig["about"];
        ?>
      <br/><br/>
      The game will be released around April-May 2021.
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Copyright 2021, licensed under Mozilla Publice License 2.0, source code avalilable at <a href="https://github.com/DigitalTeal/website">this GitHub repository</a>.</p>
</div>

</body>
</html>
