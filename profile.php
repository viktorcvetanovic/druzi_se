<html>
<head>
    <title>Druzi se</title>
    <link rel="stylesheet" href="css/global_css.css">
    <link rel="stylesheet" href="css/profile_css.css">
</head>
<body>
<div class="center_all_profile">
    <div class="photo">
        <img src="img/avatar.png">
    </div>
    <div class="content">
        <?php
        include ("includes/crud/DataBase.php");
        session_start();
        $user=DataBase::readUserById($_SESSION["id"]);
        echo "Id korisnika";
        echo "<br>";
        echo $user->getId();
        echo "<br>";
        echo "<br>";
        echo "Username korisnika";
        echo "<br>";
        echo $user->getUsername();
        echo "<br>";
        echo "<br>";
        echo "Email korisnika";
        echo "<br>";
        echo $user->getEmail();
        echo "<br>";
        echo "<br>";
        echo "Svi tvoji komentari:";
        echo "<br>";
        echo "<br>";
        foreach (DataBase::readAllCommentsByUserId($_SESSION['id']) as $item){
         if($item instanceof CommentUserDTO){
             echo $item->getCommentBody();
             echo "<br>";
         }


        }
        ?>


    </div>
</div>
</body>

</html>
