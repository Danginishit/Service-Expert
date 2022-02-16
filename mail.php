<?php

$to="danginishit114@gmail.com";
$subject="aa mail ka aavta nathi ela?";
$message="hassh jo tu aa mail tara mobile ma joto hoy to vandho nai";
$headers="From :nishitdangi@.in\r\n";
if(mail($to,$subject,$message,$headers)){
    echo "mail is success";
}
else{
    echo "error";
}

?>