<?php
                    $message_sent = false;
                    if (isset($_POST['email']) && $_POST['email'] != ''){
                                        if (filter_var($POST['email'], FILTER_VALIDATE_EMAIL)){
                                                            $userName = $_POST['name'];
                                                            $userEmail = $_POST['email'];
                                                            $messageSubject = $_POST['subject'];
                                                            $message = $_POST['message'];
                                                            $to = "angieali@umich.edu";
                                                            $body = "";
                                                            $body .= "From: ".$userName."\r\n";
                                                            $body .= "Email: ".$userEmail."\r\n";
                                                            $body .= "Message: ".$message."\r\n";
                                                            $message = true;
                                        }                  
                    }
?>
<html lang="en">
                    <head>
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
                                        <link rel="stylesheet" type="text/css" href="css/html5reset.css">
                                        <link rel="stylesheet" type="text/css" href="css/style.css">
                                        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"/>
                                        <link rel="shortcut icon" type="image/png" href="images/logodesign.png"/>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    </head>
                    <body>

                                        <nav>
                                                            <ul class="nav_links">
                                                                                <li class="nav_item"><a href="index.html">Home</a></li>
                                                                                <li class="nav_item"><a href="work.html">Work</a></li>
                                                                                <li class="nav_item"><a href="aboutme.html">About Me</a></li>
                                                                                <li class="nav_item"><a href="resume.html">Contact</a></li>
                                                            </ul>
                                        </nav>
                    <header>
                                        <h1 class="header">Angela Li</h1>
                    </header>
                    <main class="resume" id="resumephoto" tabindex="0">
                                        <div class="containers">  
                                                            <h1 class="sayhello">Contact Angela</h1>
                                                            <h2 class="resumecontact">Please contact me for a copy of my resume!</h1>
                                        </div>
                                        <?php
                                        if($message_sent):
                                        ?>
                                                            <h3> Thanks, we'll be in touch!</h3>
                                        <?php
                                        else:
                                        ?>
                                        <div class="container">
                                                            <form action="contactform.php" method="POST" class="form">
                                                                                <div class="form-group">
                                                                                                    <label for="name" class="form-label">Your Name</label>
                                                                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                                    <label for="email" class="form-label">Your Email</label>
                                                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                                    <label for="subject" class="form-label">Subject</label>
                                                                                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                                    <label for="message" class="form-label">Message</label>
                                                                                                    <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                                                                                </div>
                                                                                <div>
                                                                                                    <button type="submit" class="btn">Send Message!</button>
                                                                                </div>
                                                            </form>
                                        </div>
                                        <?php
                                        endif;
                                        ?>
                    </main>
                                        <footer>
                                                            <h2 id = "contact">Let's grab coffee &#x2615; over Zoom!</h2>
                                                            <p>angieali@umich.edu</p>
                                        </footer>
                    <script src="main.js"></script>
                    </body>
</html>
