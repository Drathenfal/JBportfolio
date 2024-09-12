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
    <div class="banner" id="banner-coding-examples">
        <div class="hamburger-menu">
            <div class="ham-bar bar-top"></div>
            <div class="ham-bar bar-mid"></div>
            <div class="ham-bar bar-bottom"></div>
        </div>
        <h1><span class="text-container">Coding Examples</span></h1>
        <p>Examples of code I've done</p>
        <a href="#mix-in-nav"><em>To Code Examples</em><small><i class="fa-solid fa-angle-down" style="color: #ffffff;"></i></small></a>
    </div>
</header>

<main class="coding-examples-section">
<div class="container">
    <h2 id="mix-in-nav">Sass Mixin for Netmatters rebuild</h2>
    <p>Creating this mixin to style my navigation bar for the Netmatters site. This kept my code really clean, simple and all in one place with any changes needed being made within the mixin itself instead of each class.</p>
    <script src="https://gist.github.com/Drathenfal/9ea0bf2148d13951b28263ef33f6d198.js"></script>
    <h2>Sass Mixin implementation</h2>
    <p>Implementing this mixin was really simple for each seperate navigation part, as all i had to do was change the variable to relate to the color and hover effect.</p>
    <script src="https://gist.github.com/Drathenfal/db62b18aa3728eb8b45d6dc208430506.js"></script>
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
    <script src="javascript/banner-animation-coding-exmaples.js"></script>
</body>
</html>