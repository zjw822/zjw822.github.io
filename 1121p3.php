<html><head></head>
<body bgcolor="#ccccff">

<form action="1121p3.php" method="post">
    <input type="text" name="a">

    <?php
    $a = $_POST['a'];
    for($i=0;$i<$a+1;$i++){
        echo $i;
    }
    ?>

    <input type="submit">
    
</form>

</body></html>