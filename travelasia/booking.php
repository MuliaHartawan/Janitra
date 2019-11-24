<?php
    $to = 'demo@spondonit.com';
    $from = $_POST["from"];
    $to= $_POST["to"];
    $text= $_POST["start"];
    $text= $_POST["return"];
    $text= $_POST["adults"];
    $text= $_POST["child"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $from . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$from.'  '.$to.'</td>
        </tr>
        <tr><td>Email: '.$start.'</td></tr>
        <tr><td>Email: '.$return.'</td></tr>
        <tr><td>Email: '.$adults.'</td></tr>
        <tr><td>Email: '.$child.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
