<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (array_key_exists("status",$_GET)) {
    if ($_GET["status"] == "faild") {
        echo " <div>
        password or username is wrong
    </div>";
    }
}
    ?>

    <form action="login.post.php" method="post">
        <input type="text" name="username" id="username" placeholder="username">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="" id="" value="login">
    </form>
</body>

</html>