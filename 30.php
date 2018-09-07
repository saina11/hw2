<form action="" method="post">
    <input type="text" name="s">
    <input type="text" name="t">
    <button type="submit">SUBMIT</button>
</form>
<?php
$s= $_POST['s'];
$t= $_POST['t'];
echo $t*1000/3600;
echo $s/$t;



