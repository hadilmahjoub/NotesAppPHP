<?php
session_start();


if (!isset($_SESSION["todos"])) {
    $_SESSION['todos']=array();
}

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $text = $_POST["text"];
    $todo = array($title=>'title',$text=>'text');
    array_push($_SESSION['todos'],$todo);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c096537dfc.js" crossorigin="anonymous"></script>
    <title>Notes</title>
</head>

<body>
    <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="note.php">NOTES</a>
    </nav>

    <div class="container">
        <header>
            <h1>Here you can find your pined notes!</h1>
        </header>

        <?php 
            print_r($_SESSION);
        ?>

        <?php   // foreach start
            foreach ($_SESSION['todos'] as $key => $value) {
        ?>        
            <div class="notepost">
                <div class="titlepost"> <b><?= $value['title'] ?></b> </div>
                <div class="textpost"><?= $value['text'] ?></div>
                <div>
                    <button class="trash"><i class="fa-solid fa-trash-can"></i></button>
                </div>
            </div>

        <?php   // foreach end
            }
        ?>
            
        

    </div>
</body>

</html>