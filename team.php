<?php
require("assets/templates/vars.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DigitalTeal - Team</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/team" />
        <meta name="description" content="<?php echo $digitalTealConfig["metaDescription"]; ?>"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#008080">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <?php include("assets/templates/analyticsCode.html"); ?>
    </head>
    <body>
        <?php include("assets/templates/navbar.html"); ?>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/subtoemail">Subscribe to email marketing</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-sm-4">
                    <h1>DigitalTeal Team</h1>
                    <p>This page contains a list of DigitalTeal's group members.</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#leadership" id="defaultOpen" onclick="openTab(event, 'leadership');">Production, marketing, and leadership team</a>
                            <a class="nav-link" href="#art" onclick="openTab(event, 'art');">Art/audio team</a>
                            <a class="nav-link" href="#coding" onclick="openTab(event, 'coding');">Programming team</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none" />
                </div>

                <div class="tabcontent col-sm-8" id="leadership" style="display: flex;">
                    <noscript>JavaScript is required for this page to display properly.</noscript>
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Profile picture of NameIsA, a DigitalTeal staff member" title="Profile picture of NameIsA a DigitalTeal staff member" border="0" style="width: 50%;" />
                        <p class="title">Owner, Producer, Social Media Manager, Game Concept & Level Design</p>
                        <p>NameIsA</p>
                    </div>
                    <br />
                    <div class="card">
                        <img src="https://i.ibb.co/rx68RW2/Screenshot-10.png" alt="Profile picture of Pineapplecake14, a DigitalTeal staff member" title="Profile picture of Pineapplecake14 a DigitalTeal staff member" border="0" style="width: 50%;" />
                        <p class="title">Co-Owner, Co-Producer</p>
                        <p>Pineapplecake41</p>
                    </div>
                    <br/>
                    <div class="card">
                        Video game story design has been a project done by all members of the DigitalTeal team.
                    </div>
                </div>

                <div class="tabcontent col-sm-8" id="coding" style="display: none;">
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Profile picture of NameIsA, a DigitalTeal staff member" title="Profile picture of NameIsA a DigitalTeal staff member" border="0" style="width: 50%;" />
                        <p class="title">Owner, Producer, Social Media Manager, Game Concept & Level Design</p>
                        <p>NameIsA</p>
                    </div>
                </div>

                <div class="tabcontent col-sm-8" id="art" style="display: none;">
                    <div class="card">
                        <p class="title">Icon artist, pixel artist</p>
                        <p>Tree</p>
                    </div>
                    <br />
                    <div class="card">
                        <p>Various members of the DigitalTeal team and various websites/artists have supplied 3D models for JumpBound.</p>
                    </div>
                    <br />
                    <div class="card">
                        <p class="title">Audio & Music Producer</p>
                        <p>Magisukiyo</p>
                    </div>
                    <br />
                    <div class="card">
                        <p class="title">Concept Artist</p>
                        <p>Solo789</p>
                    </div>
                    <br/>
                    <div class="card" style="display: inline-block;">The credit for a large amount of the UI goes to opengameart.org, especially <a href="https://opengameart.org/users/buch">Michele Bucelli</a>.</div>
                </div>
            </div>
        </div>

        <?php include("assets/templates/footer.html"); ?>

        <script>
            // code based on https://w3schools.com/howto/tryit.asp?filename=tryhow_js_vertical_tabs
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");

                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.querySelectorAll(".nav-pills > li.nav-item > a");

                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                document.getElementById(tabName).style.display = "flex";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>
