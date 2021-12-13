<?php
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

    $to      = 'mohsenpoureiny@outlook.com';
    $headers = 'From: mail@mohsenpoureiny.info'       . "\r\n" .
                 'Reply-To: mail@mohsenpoureiny.info' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    if( mail($to, $_POST["subject"], $_POST["name"] . $_POST["message"] . $_POST["email"], $headers)==1){
		Redirect('/?status=success', false);
    }else{
		Redirect('/?status=faild', false);
      
    }
?>