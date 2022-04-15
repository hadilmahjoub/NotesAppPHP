<?php
session_start();
if (!isset($_SESSION["todos"])) {
    $_SESSION['todos'] = array();
}
// var_dump($_SESSION);
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
    <title>Home</title>
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
        <header>
            <h1>Enter a note to pin!</h1>
        </header>
        <div class="noteinput">
            <form action="note.php" method="post" class="myform">

                <input type="text" name="title" id="title" placeholder="Title" class="form-control"><br>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Note..." class="form-control"></textarea>

                <button type="submit" name="submit" id="sub"><i class="fa-solid fa-thumbtack"></i></button>
            </form>
        </div>
    </div>
</body>

</html>