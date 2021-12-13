<html lang="en">

<?php
include "../utils/index.php";
session_start();
?>
<?php if (isset($_SESSION['_login'])) : ?>

    <head>
        <?php include "./_layout/head.php" ?>

        <title>Admin</title>
    </head>

    <body>
        <?php include "./_layout/header.php" ?>
        <div class="w-100 d-flex flex-column justify-content-center align-items-center p-3">
            <h1>به ادمین خوش آمدید</h1>
            <h5>طراحی شده توسط <a href="https://mohsenpoureiny.info/" target="_blank">محسن پورعینی</a></h5>
            <?php include "./_layout/footer.php" ?>

        </div>

    </body>

<?php else :
    Redirect('login.get.php?status=faild', false);
?>

<?php endif ?>

</html>