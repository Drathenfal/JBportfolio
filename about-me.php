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
    <div class="banner" id="banner-aboutme">
        <div class="hamburger-menu">
            <div class="ham-bar bar-top"></div>
            <div class="ham-bar bar-mid"></div>
            <div class="ham-bar bar-bottom"></div>
        </div>
        <h1><span class="text-container">About Me</span></h1>
        <p>Junior Web Developer</p>
        <a href="#who-am-i"><em>To find out more</em><small><i class="fa-solid fa-angle-down" style="color: #ffffff;"></i></small></a>
    </div>
</header>

<main class="about-me-section">

    <div class="light-bg">
    <div class="container">
        <h2 id="who-am-i">Who Am I?</h2>
<div class="container-article">
    <div class="container-image-aboutme">   <img src="images/other/profile-pic2.png" alt="A picture of me"></div>
    <div class="container-mini-article">
    <h3>This is me, Jake Bignell</h3>
    <em>Location: East Anglia, Suffolk, Ipswich</em>
    <p>I have a background in customer service, hospitality and youth work. With a history of working under pressure, deadlines and attention to detail were a big part of the environment.</p>
    </div>
</div>
</div>
</div>


    <div class="container">
<div class="container-article" id="article2">
        <div class="container-image-aboutme"><img src="images/other/blue-code.png" alt="Blue Code"></div>
        <div class="container-mini-article">
        <h3>Why Code? Why Now?</h3>
        <p>I thought it was about time I took the plunge and jumped into the ever evolving world of code and Development. With it being such a new industry I find the fact its evolving so rapidly fascinating, there is always some new technology/technique to expand your knowledge on.</p>
    </div>
    </div>
</div>

<div class="light-bg">
<div class="container">
<div class="container-article">
    <div class="container-image-aboutme"><img src="images/other/prof-image.png" alt="Image of pen & paper"></div>
    <div class="container-mini-article">
    <h3>Earlier Professional Years</h3>
    <p>My first proper career path was within the catering industry, starting with an apprenticeship in customer service which quickly developed into an apprenticeship in professional cookery. After completion I worked my way up over the span of 5 years to Sous Chef.</p>
</div>
</div>
    </div>
</div>
</div>
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
<script src="javascript/banner-animation-aboutme.js"></script>
</body>
</html>