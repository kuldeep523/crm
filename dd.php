<?php
    $msg =
    "<h1>First line of text</h1>\nSecond line of text"
    ;
    
    // use wordwrap() if lines are longer than 70 characters
    
    $msg = wordwrap($msg,
    70
    );
    
    // send email
    
    mail(
    "harsh.vaishnav@crmlanding.in"
    ,
    "My subject"
    ,$msg);
?>