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
    <link rel="stylesheet" href="css/footer_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
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
<div class="background-hack">
    <div class="max_size">
<div id="about" class="about" >
    <h1>Kontakt</h1>
    <form method="post" action="includes/message.inc.php">
        <label for="fname">Ime:</label><br>
        <input type="text"  name="fname" ><br>
        <label for="lname">Prezime:</label><br>
        <input type="text"  name="lname"><br>
        <label for="fname">Email:</label><br>
        <input type="text"  name="email" ><br>
        <label for="lname">Poruka:</label><br>
        <textarea type="text"  name="message"> </textarea><br><br>
        <button type="submit">Posalji email</button>
    </form>
<div id="map"></div>

</div>
<div class="contact" id="contact">
   <h1>O nama</h1>
    <div style=" text-align: left">
    <img  id="train" src="http://codeskulptor-demos.commondatastorage.googleapis.com/descent/bomb_24_24.png">
    <p style="color: red !important;text-align: left">Click me</p>
    </div>
    <script>
        train.onclick = function() {
            let start = Date.now();

            let timer = setInterval(function() {
                let timePassed = Date.now() - start;

                train.style.left = timePassed + 2 + 'px';
                train.style.border=1+'px'+' solid'+' red';

                if (timePassed > 500) clearInterval(timer);

            }, 19);
        }
    </script>

    <div class="flex_with_picture">
        <div>
            <p>In tristique, nunc ut auctor condimentum, tellus lacus efficitur purus,
                at luctus massa ligula et libero. Phasellus lectus lectus, suscipit sodales
                fringilla nec, tincidunt eu felis. Donec feugiat, nunc eget fringilla tincidunt,
                diam ipsum egestas ligula, vel eleifend lorem turpis sed mi. Phasellus eget placerat augue.
                Aliquam quis luctus arcu. Aliquam vel neque id purus gravida fringilla vel nec tellus.
                Integer non elementum risus, vitae accumsan urna. Morbi consectetur, nisl a rutrum interdum,
                purus lacus auctor lectus, quis condimentum ligula metus eu mi. Fusce in quam at neque dictum
                faucibus non vel urna. . </p>
        </div>
        <div>
            <img src="img/marker.jpg" >
        </div>
    </div>
</div>
</div>
</div>
</body>

</html>


   