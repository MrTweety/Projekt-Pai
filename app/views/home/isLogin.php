<?php
//@TODO tej strony nie ma przekierowanie na ->user (user/index.php)
echo "jestes zalogowany";
//echo $data."\n\n";
$monthI=2;
$a=date('m', strtotime("-1 month"));
echo  (int)date('Y', strtotime("-1 month"))."\n";
echo date('M', strtotime("-".$monthI." month"));
