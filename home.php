<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c096537dfc.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <nav class="navbar">
        <a href="home.php">HOME</a>
        <a href="note.php">NOTES</a>
    </nav>

    <div class="container">
        <header>
            <h1>Enter a note to pin!</h1>
        </header>
        <div class="noteinput">
            <form action="note.php" method="post">
                <input type="text" name="title" id="title" placeholder="Title"><br>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Note..."></textarea>
                <button type="submit"><i class="fa-solid fa-thumbtack"></i></button>

            </form>
        </div>
    </div>
</body>

</html>