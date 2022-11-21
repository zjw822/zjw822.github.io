<html><head></head>
<body bgcolor="#ccccff">

<form action="1121p2.php" method="post">
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="text" name="c">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $b * $b - (4 * $a * $c);
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
    <input type="submit">
    
</form>

</body></html>