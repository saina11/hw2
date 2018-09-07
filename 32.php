<form action="" method="post">
    <input type="text" name="number">
    <input class="ss" type="text" name="operation">
    <input type="text" name="number2">
    <button type="submit">SUBMIT</button>
</form>
<style> .ss{
        width:20px;
    }</style>
<?php
$a= $_POST['number'];
$b= $_POST['operation'];
$c= $_POST['number2'];
if($b=='+') {
    echo $a + $c;
}
elseif ($b=='-') {
    echo $a - $c;
}
elseif ($b=='*') {
    echo $a * $c;
}
elseif ($b=='/') {
    echo $a / $c;
}
elseif ($b=='^') {
    echo pow($a,$c);
}elseif ($b=='%') {
    echo $a % $c;
}
elseif ($c=='0') {
    echo 'Na 0 delit nelzia ';
}

