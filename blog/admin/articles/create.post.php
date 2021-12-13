<?php
include "../../db/index.php";
include "../../utils/index.php";
include "../../utils/upload.php";

if (CreateNewPostArticlesPosts($_POST["title"], $_POST["short_description"], $_POST["description"], $target_file) == 1) {
    Redirect('lst.php?status=success&action=create', false);
} else {
    Redirect('lst.php?status=faild', false);
}
