<?php
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
$username = "root";
$password = "6460662E217C7A9F899208DD70A2C28ABDEA42F128666A9B78E6C0C064846493";

session_start();
$inputPasswordHashed = hash("sha256",  $_POST["password"], false);
if ($_POST["username"] == $username && strcmp($inputPasswordHashed, $password)) {
    $_SESSION["_login"] = $username;
    echo "200";
    // Redirect('/', false);
} else {
    echo "403";
    // Redirect('login.get.php?status=faild', false);
}
