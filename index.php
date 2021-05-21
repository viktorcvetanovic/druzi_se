<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druzi se</title>
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/index_css.css">
    <link rel="icon" href="img/logo.png">
    <script src="js/index.js"></script>
</head>
<body>
    <?php
    include('header.php');
    ?>
<div class="wrapper_main">
    <div class="wrapper_content">
        <div class="wrapper_logo">
            <img src="img/logo.png" class="logo">
        </div>
        <div class="wrapper_parallel">
            <div class="flex_left">
                <h1>Trazite zajednicu gejmera ?</h1>
                <p>Na pravom ste mestu!</p>
                <p>Ova stranica za cilj ima da ujedini sve gejmere,</p>
                <p>sirom Balkana i da napravi mrezu kojom ce oni moci da komuniciraju.</p>
                <div class="chose_register_or_login">
                    <button><a href="login.php">Prijavi se</a></button>
                    <button><a href="signup.php">Registruj se</a></button>  
                </div>
            </div>   
            <div class="flex_right">
                <div class="slideShow">
                    <video width="750" height="500" controls autoplay class="mySlides">
                        <source src="img/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_photos">
        <div class="photo_war2">
            <img src="img/war2.png">
        </div>
    </div>
 
</div>

    <?php
    include('footer.php');
    ?>
</body>

</html>


   