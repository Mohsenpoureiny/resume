<?php

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
session_start();

?>
<?php if (isset($_SESSION['_login'])) : ?>
    <html lang="en">

    <head>
        <?php include "../_layout/head.php" ?>
        <title>ایجاد</title>
    </head>

    <body>
        <?php include "../_layout/header.php" ?>
        <form method="POST" action='create.post.php' class="w-100 d-flex flex-column justify-content-center align-items-center p-3" enctype="multipart/form-data">
            <input class="form-control m-1" name="title" type="text" placeholder="عنوان">
            <textarea class="form-control m-1" name="short_description" placeholder="توضیحات کوتاه"></textarea>
            <textarea class="form-control m-1"  name="description" placeholder="توضیحات"></textarea>
            <input type="file" name="image">

            <button type="submit" class='btn btn-primary' >ایجاد جدید</button>
            <?php include "../_layout/footer.php" ?>
        </form>


    </body>

    </html>
<?php else :
    Redirect('/blog/admin/login.get.php?status=faild', false);
?>

<?php endif ?>