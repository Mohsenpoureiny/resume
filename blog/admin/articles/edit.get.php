<?php
include "../../db/index.php";
include "../../utils/index.php";


session_start();
$item =  SelectNewPostArticlesPosts($_GET["id"])->fetch_assoc();
?>
<?php if (isset($_SESSION['_login'])) : ?>
    <html lang="en">

    <head>
        <?php include "../_layout/head.php" ?>
        <title>ویرایش</title>
    </head>

    <body>
        <?php include "../_layout/header.php" ?>
        <form method="POST" action='edit.post.php' class="w-100 d-flex flex-column justify-content-center align-items-center p-3">
            <?php
            echo ' 
            <input hidden  name="oldImage" type="text" value="' . $item["image"] . '">
            <input hidden  name="id" type="text" value="' . $_GET["id"] . '">

            <input class="form-control m-1" name="title" type="text" placeholder="عنوان" value="' . $item["title"] . '">
            <textarea class="form-control m-1" name="short_description" placeholder="توضیحات کوتاه" >' . $item["short_description"] . '</textarea>
            <textarea class="form-control m-1" name="description" placeholder="توضیحات" >' . $item["description"] . '</textarea>
            <img class="w-25" src="/blog' . $item["image"] . '" />
            
            <input type="file" name="image">
            ';
            ?>

            <button type="submit" class='btn btn-primary'>ویرایش</button>
            <?php include "../_layout/footer.php" ?>
        </form>

    </body>

    </html>
<?php else :
    Redirect('/blog/admin/login.get.php?status=faild', false);
?>

<?php endif ?>