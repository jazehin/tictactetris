<?php
    /*
    header_remove("Location");
    if(isset($_COOKIE["name"])) {
        header("Location: ./sites/signup.php");
    }
    else
        echo "it's set";
    */

    $link = "";
    if(!isset($_COOKIE["name"])) {
        $link = "./loggedout.php";
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bence Kiss">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>TicTacTetris :: Main page</title>
</head>
<body>
    <iframe src="<?php echo $link; ?>"></iframe>
</body>
</html>