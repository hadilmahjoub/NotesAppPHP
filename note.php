<?php
session_start();

if (isset($_POST["submit"])) {
    if (($_POST["title"]) != "" & ($_POST["text"]) != "") {
        $title = $_POST["title"];
        $text = $_POST["text"];
        $todo = array('title' => $title, 'text' => $text);
        array_push($_SESSION['todos'], $todo);
    }
    header('location:home.php');
}

if (isset($_POST["trash"])) {
    unset($_SESSION["todos"][$_POST["key"]]);
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
        <!--Container-->

        <header>
            <h1>Here you can find your pined notes!</h1>
        </header>

        <?php
        // print_r($_SESSION);
        ?>

        <?php
        if (isset($_SESSION['todos'])) {    // if
            foreach ($_SESSION['todos'] as $key => $value) {    // foreach START
        ?>
                <form method="POST" class="notepost">
                    <!--Form for the delete-->
                    <div class="titlepost"> <b><?= $value['title'] ?></b> </div>
                    <div class="textpost"><?= $value['text'] ?></div>
                    <input type="hidden" name="key" value="<?= $key ?>">
                    <div>
                        <button class="trash" name="trash"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </form>
                <!--Form for the delete END-->

            <?php
            }   // foreach END
        } else {    //else
            ?>
            <div>
                <h1>Empty</h1>
            </div>
        <?php
        }   // ifelse END
        ?>

    </div>
    <!--Container-->

</body>

</html>