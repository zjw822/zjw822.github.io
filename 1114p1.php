<?php
$a = 2;
$b = 2;
$c = 26;
$d = $b * $b - 4 * $a * $c;
if($d>0){
    $ans_plus = (-$b+sqrt($d))/2*$a;
    $ans_minus = (-$b-sqrt($d))/2*$a;
    echo "方程式有兩相異實數解：" . $ans_plus . " 和 " . $ans_minus;
}
else if ($d==0){
    $ans = (-$b)/(2*$a);
    echo "方程式有重根：" . $ans;
}
else {
    echo "方程式有兩相異虛根";
}
?>