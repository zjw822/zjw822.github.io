<?php
$ppzip = array(2022, 11, 14,"monday","2022.11.14");
for( $i = 0 ; $i < count($ppzip) ; $i++ ){
    echo $i."-th element of \$ppzip: ".$ppzip[$i]."<br>";
}
echo '跑完迴圈後的 $i: '.$i;
?>