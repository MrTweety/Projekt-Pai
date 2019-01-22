<?php
//@TODO tej strony nie ma przekierowanie na ->user (user/index.php)
echo "jestes zalogowany";
//echo $data."\n\n";
$monthI=2;
$a=date('m', strtotime("-1 month"));
echo  (int)date('Y', strtotime("-1 month"))."\n";
echo date('M', strtotime("-".$monthI." month"));
?>
<div id="ss" style="margin-top: 66px;"></div>

<input id="sddsa" type='radio' name='group' ng-model='mValue' value='first' />First
<input id="sdds" type='radio' name='group' ng-model='mValue' value='second' /> Second


<script>



        $("#sdds").click( function() {
            var element = document.getElementById("sdds");
            element.checked=true;
            if(element.checked){

                document.getElementById("ss").innerText ="aaa";
            }
        });







</script>

