<html>
<head>
    <link href='https://css.gg/play-list-remove.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/post_css.css">
</head>
<body>
<?php

function createPost($id, $user, $header, $body, $picture, $price, $date)
{

    $user_id=$_SESSION["id"];
    echo "

        <div style='background-color: rgb(35, 37, 38); ' class='main_div_post'>
        <div class='wrapper_for_user' style='display: flex;margin-bottom: 1rem;justify-content: space-between'>
        <div>
        <h3 class='user_h3'><span style='color: rgb(168, 111, 142)'>Korisnik:</span>  $user</ho3>
        </div>
        <div>
        <h3 class='date_h3'><span style='color: rgb(168, 111, 142)'>Datum:</span>  $date</h3>
       </div> 
        </div >
        <div class='header_with_icon'>
        <h1>$header</h1> 
        <br>
        </div>
        <div class='for_photo'>
        <img src='includes/$picture'>
        </div>
        <div class='for_text'>
        <p>$body</p>
        <p style='text-align: right;margin: 1rem'>
        <span style='color: rgb(168, 111, 142)'>Cena:</span>  
        $price
        </p>
        </div>
        <div class='comments'>
        <form action='includes/create_comment.inc.php' method='post'>
        <input value='$id' hidden name='post_id'>
        <input value='$user_id' hidden name='user_id'>
        <label>Unesi komentar</label><br>
        <input name='commentar_value'> <br>
        <button type='submit' class='button_for_comment'>Dodaj</button>
        </form>";
    echo "<div class='show_comments'>";
    foreach (DataBase::readAllCommentsByPostId($id) as $item) {
        if ($item instanceof CommentUserDTO)
            echo $item->getUsername();
        echo ":  ";
            echo $item->getCommentBody();
            echo "<br>";
    }
    echo "   </div></div> </div>";
}
?>
</body>
</html>