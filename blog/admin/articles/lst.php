<?php

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
session_start();
include "../../db/index.php";
$result = getAllArticlesPosts();
$conn->close();

?>
<?php if (isset($_SESSION['_login'])) : ?>
    <html lang="en">

    <head>
        <?php include "../_layout/head.php" ?>
        <title>articles</title>
    </head>

    <body>
        <?php include "../_layout/header.php" ?>
        <div class="w-100 d-flex flex-column justify-content-center align-items-center p-3">
            <?php
            if (array_key_exists("status", $_GET)) {
                if ($_GET["status"] == "success") {
                    if ($_GET["action"] == "delete") {
                        echo '<div class="alert alert-success" role="alert">
                    آیتم ' . $_GET["itemId"] . ' با موفقیت حذف شد
                  </div>';
                    } elseif ($_GET["action"] == "create") {
                        echo '<div class="alert alert-success" role="alert">
                       آیتم با موفقیت ایجاد شد
                      </div>';
                    } elseif ($_GET["action"] == "edit") {
                        echo '<div class="alert alert-success" role="alert">
                       آیتم با موفقیت ویرایش شد
                      </div>';
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    عملیات نا موفق
                  </div>';
                }
            }
            if ($result->num_rows > 0) {
                echo "  <table class='table table-striped w-50'>
            <thead>
            <tr>
                <td>
                    آیدی
                </td>
                <td>
                تصویر اصلی
                </td>
                <td>
                    عنوان
                </td>
                <td>
                    توضیحات کوتاه
                </td>
                <td>
                    توضیحات کامل
                </td>
                <td>
                عملیات
            </td>
            </tr>
            </thead>
            <tbody>";

                while ($row = $result->fetch_assoc()) {
                    echo " <tr>
                <td>
                    " . $row["id"] . "
                </td>
                <td>
               <img class='w-50' src='/blog" . $row["image"] . "' />
            </td>
                <td>
                    " . $row["title"] . "
                </td>
                <td>
                    " . $row["short_description"] . "
                </td>
                <td>
                    " . $row["description"] . "
                </td>
                <td>
                <a class='btn btn-danger btn-sm' href='delete.php?id=" . $row["id"] . "'>حذف</a>
                <a class='btn btn-info btn-sm' href='edit.get.php?id=" . $row["id"] . "'>ویرایش</a>
                </td>
            </tr>";
                }
                echo "
            </tbody>
        </table>";
            } else {
                echo "0 results";
            }
            ?>
            <a class='btn btn-primary' href='create.get.php'>ایجاد جدید</a>

            <?php include "../_layout/footer.php" ?>

        </div>


    </body>

    </html>
<?php else :
    Redirect('/blog/admin/login.get.php?status=faild', false);
?>

<?php endif ?>