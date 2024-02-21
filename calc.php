<?php
if(isset($_POST['sum']))
{
    $n1 = $_POST['t1'];
    $n2 = $_POST['t2'];
    $c = $n1 + $n2;
    echo "sum is $c";
}
else if(isset($_POST['sub'])){
    $n1 = $_POST['t1'];
    $n2 = $_POST['t2'];
    $d = $n1 - $n2;
    echo "sub is $d";
}
else if(isset($_POST['mul'])){
    $n1 = $_POST['t1'];
    $n2 = $_POST['t2'];
    $e = $n1 * $n2;
    echo "mul is $e";
}
else if(isset($_POST['div'])){
    $n1 = $_POST['t1'];
    $n2 = $_POST['t2'];
    $f = $n1 / $n2;
    echo "div is $f";
}


?>
<html>
<body>
<form method="post">
    N1:<input type="number" name="t1" required>
    N2:<input type="number" name="t2" required>
    <input type="submit" name="sum" value="addition">
    <input type="submit" name="sub" value="subtraction">
    <input type="submit" name="mul" value="multiplication">
    <input type="submit" name="div" value="division">
</from>
</body>
</html>
