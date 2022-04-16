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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c096537dfc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Notes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="note.php" class="nav-link active">NOTES</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!--Container-->

        <header>
            <h1>Here you can find your pined notes!</h1>
        </header>

        <?php
        // print_r($_SESSION);
        ?>
        <div class="row align-items-start">
            <!--row-->
            <?php
            if (isset($_SESSION['todos'])) {    // if
                foreach ($_SESSION['todos'] as $key => $value) {    // foreach START
            ?>
                    <div class="col-sm-12 col-md-4 col-lg-3 cols" >
                        <!--col-->
                        <form method="POST" class="notepost" style="display: inline-block">
                            <!--Form for the delete-->
                            <div class="card" style="width: 18rem; display: inline-block">
                                <div class="card-body">
                                    <div class="wrapper">
                                        <div class="card-title"> <b><?= $value['title'] ?></b> </div>
                                        <button class="trash" name="trash" id="tra"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                    <hr>
                                    <div class="card-text"><?= $value['text'] ?></div>
                                    <input type="hidden" name="key" value="<?= $key ?>">

                                </div>
                            </div>


                        </form>
                        <!--Form for the delete END-->
                    </div>
                    <!--col-->


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
        <!--row-->


    </div>
    <!--Container-->

</body>

</html>