<?php
include "../../db/index.php";
include "../../utils/index.php";

if (DeleteNewPostArticlesPosts($_GET["id"]) == 1) {
    Redirect('lst.php?status=success&action=delete&itemId=' . $_GET["id"], false);
} else {
    Redirect('lst.php?status=faild', false);
}
