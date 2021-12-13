<?php
include "../../db/index.php";
include "../../utils/index.php";
$target_file = $_POST["oldImage"];
if ($_POST["image"]!="") {
    include "../../utils/upload.php";
}
if (EditNewPostArticlesPosts($_POST["id"], $_POST["title"], $_POST["short_description"], $_POST["description"],$target_file) == 1) {
    Redirect('lst.php?status=success&action=edit', false);
} else {
    Redirect('lst.php?status=faild', false);
}
