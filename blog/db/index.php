<?php
$servername = "localhost";
$username = "mohsenp4";
// Create connection
$conn = new mysqli($servername, $username, "", "mohsenp4_blogDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getAllArticlesPosts()
{
    $sql = "SELECT * FROM `posts`";
    return  $GLOBALS['conn']->query($sql);
}
function CreateNewPostArticlesPosts($title, $short_description, $description, $image)
{
    $sql = "INSERT INTO `posts`(`title`, `short_description`, `description` , `image`) VALUES ('" . $title . "', '" . $short_description . "', '" . $description . "', '" . $image . "')";
    return  $GLOBALS['conn']->query($sql);
}
function DeleteNewPostArticlesPosts($id)
{
    $sql = "DELETE FROM `posts` WHERE id=" . $id . "";
    return  $GLOBALS['conn']->query($sql);
}
function SelectNewPostArticlesPosts($id)
{
    $sql = "SELECT `image` ,`title`, `short_description`, `description` FROM `posts` WHERE id=" . $id . "";
    return  $GLOBALS['conn']->query($sql);
}
function SelectNLastRecordsNewPostArticlesPosts($n)
{
    $sql = "SELECT * FROM `posts` ORDER BY id DESC LIMIT " . $n . "";
    return  $GLOBALS['conn']->query($sql);
}

function EditNewPostArticlesPosts($id, $title, $short_description, $description, $image)
{
    $sql = "UPDATE `posts` SET `title`='" . $title . "',`short_description`='" . $short_description . "',`description`='" . $description . "',`image`='" . $image . "' WHERE id=" . $id . "";
    return  $GLOBALS['conn']->query($sql);
}
