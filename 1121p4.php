<html><head></head>
<body bgcolor="#ccccff">
<form action="1121p4.php" method="post">
    <input type="text" name="a">
    <select name=s>
        <?php
                echo "<option>".'+'."<option>";
                echo "<option>".'-'."<option>";
                echo "<option>".'*'."<option>";
                echo "<option>".'/'."<option>";
        ?>
    </select>
    <input type="text" name="b">
    <input type="submit">
    <?php
    if( isset($_POST['s']) && $_POST['s'] == '+' ){
        echo (int)$_POST['a'] + (int)$_POST['b'];
    }
    else if(isset($_POST['s'])&& $_POST['s'] == '-'){
        echo (int)$_POST['a'] - (int)$_POST['b'];
    }
    else if(isset($_POST['s'])&& $_POST['s'] == '*'){
        echo (int)$_POST['a'] * (int)$_POST['b'];
    }
    else if(isset($_POST['s'])&& $_POST['s'] == '/'){
        echo (int)$_POST['a'] / (int)$_POST['b'];
    }

?>
</form>


</body></html>