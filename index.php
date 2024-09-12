<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Bignell Portfolio</title>
    <link rel="stylesheet" href="css/application.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1ba3c938d.js" crossorigin="anonymous"></script>
    <script defer src="javascript/form-validation.js"></script>
</head>


<body>
<?php
$filename = 'php/preheader.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>
<header class="container">
    <div class="banner" id="banner">
        <div class="hamburger-menu">
            <div class="ham-bar bar-top"></div>
            <div class="ham-bar bar-mid"></div>
            <div class="ham-bar bar-bottom"></div>
        </div>
        <h1>My Name is <span class="text-container">Jake Bignell</span></h1>
        <p>I'm a Game Developer</p>
        <a href="#myprojects"><em>To My Projects</em><small><i class="fa-solid fa-angle-down" style="color: #ffffff;"></i></small></a>
    </div>
</header>
<!--------------------------PROJECTS-------------------------PROJECTS-----------------------PROJECTS-----------------------PROJECTS----------------------PROJECTS----------------------PROJECTS----------------->
<main>
<section class="light-bg">
    <div  class="container">
    <div class="myprojects" id="myprojects">
    <h2>My Projects</h2>

 <div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/spinnyknightssurvival.png" alt="Netmatter Homepage">
    <div class="project-card-footer">
        <h3>Spinny Knights Survival</h3>
        <p>4 day project of week 5 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/d85b7efd-597c-4ce0-b6b6-2b64f493d462/spinny-knights-survival" target="_blank">View Project</a>
    </div>
    </div>
</div>

<div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/Z&H.png" alt="Placeholder image">
    <div class="project-card-footer">
        <h3>Zombies & Hookers</h3>
        <p>4 day project of week 2 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/4b40aeac-35d6-4f6d-8bd8-11faf3b6992a/zombies-and-ladies-of-the-night">View Project</a>
    </div>
    </div>
</div>

<div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/BatAZombie.png" alt="Placeholder image">
    <div class="project-card-footer">
        <h3>Splat A Zombie</h3>
        <p>4 day project of week 6 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/7fd0d37b-9c9e-4337-9736-afb416146e7b/splat-a-zombie">View Project</a>
    </div>
    </div>
</div>

<div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/spiders.png" alt="Placeholder image">
    <div class="project-card-footer">
        <h3>Why Did It Have To Be Spiders</h3>
        <p>4 day project of week 3 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/5aafa0b1-a1ad-4855-9719-5aeebb66ab81/why-did-it-have-to-be-spiders">View Project</a>
    </div>
    </div>
</div>

<div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/penguinpachinko.png" alt="Placeholder image">
    <div class="project-card-footer">
        <h3>Penguin Pachinko</h3>
        <p>4 day project of week 1 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/ce7d8821-b71b-49dd-aba5-2885f84d2b60/penguin-pachinko">View Project</a>
    </div>
    </div>
</div>

<div class="container-card">
    <div class="project-card">
        <img class="project-image" src="images/projects/spinnyknight.png" alt="Placeholder image">
    <div class="project-card-footer">
        <h3>Spinny Knights</h3>
        <p>4 day project of week 4 Tech Educators</p>
        <a class="button" href="https://play.unity.com/en/games/c4e6cf9a-384a-4217-979a-c83184b8186c/spinny-knights">View Project</a>
    </div>
    </div>
</div>


</div>
</div>
</section>
<!--------------------------FORM--------------------------FORM-------------------------FORM-------------------------FORM-------------------------FORM---------------------------FORM-------------------->
<section>
    <div class="container">
    <h2>Get In Touch</h2>
    <div class="contact-me" id="contact-me">
        <div class="container-mini">
            <div class="contact-info">
                
                <strong>Want to discuss a project?</strong>
                <p>You're welcome to ask me anything.</p>
                <p>If you would like to find out more, don't hesitate to get in touch.</p>
                <p>Please use the contact form, send me an email or call.</p>
                <p>I look forward to hearing from you.</p>
                <phone>07807890386</phone>
                <email><a href="mailto:jake.bignell@netmatters-scs.com? subject=subject text">jake.bignell@virginmedia.com</a></email>
            </div>
                </div>
                <div class="container-mini2">
                    <form id="form" action="/">
                        <div class="input-control name fname">
                            <input class="firstname" type="text" name="first_name" placeholder="First name">
                            <div class="error"></div>
                        </div>
                        <div class="input-control name">
                            <input class="lastname" type="text" name="last_name" placeholder="Last name">
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <input class="email" type="email" name="email_address" placeholder="Email address">
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <input class="subject" type="Select" name="subject" placeholder="Subject">
                            <div class="error"></div>
                        </div>
                        <div class="input-control">
                            <textarea class="messagearea" type="text" maxlength="300" name="message" placeholder="Message..."></textarea>
                            <div class="error"></div>
                        </div>
                            <button class="submit" type="submit" name="Submit">Submit</button>
                    </form>
                </div> 
    </div>
</div>
</section>

</main>
<?php
$filename = 'php/footer.php';
if (file_exists($filename)) {
    include $filename;
} else {
    // Handle error (e.g., log or display an error message)
    echo "Error: '$filename' could not be found please hang tight site may be undergoing maintenance";
}
?>
</div>
<script src="javascript/hamburger.js"></script>
<script src="javascript/banner-animation-home.js"></script>
</body>
</html>