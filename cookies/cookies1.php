<?php

// cookie creaed 

setcookie('name', 'ayeminaung8489798459',time() + (60 * 60 *24 * 365));

echo $_COOKIE['name'];
echo '<br>';
echo 'cookie created!'
?>