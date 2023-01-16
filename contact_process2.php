<?php

    $to = "rockybd1995@gmail.com";
    $from = $_REQUEST['yourname2'];
    $name = $_REQUEST['youremail2'];
    $headers = "From: $from";
    $subject = "You have a message from your Laptina.";

    $fields = array();
    $fields{"yourname2"} = "name2";
    $fields{"youremail2"} = "email2";
    $fields{"subject2"} = "subject2";
    $fields{"phone2"} = "phone2";
    $fields{"message2"} = "message2";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>