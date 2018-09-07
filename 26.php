<form action="" method="post">
    <input type="text" name="number">
    <button type="submit">SUBMIT</button>
</form>

<?php
$day= $_POST['number'];

/*if ($day>=1 && $day<=5) {
    echo "ETO RABOCHIY DEN";
}

elseif ($day>=6 && $day<=7) {
    echo "ETO VIHODNOY DEN";
}
else
{
    echo "NEIZVESTNIY DEN";
}*/
switch ($day) {
    case 1: echo "ETO RABOCHIY DEN"; break;
    case 2: echo "ETO RABOCHIY DEN"; break;
    case 3: echo "ETO RABOCHIY DEN"; break;
    case 4: echo "ETO RABOCHIY DEN"; break;
    case 5: echo "ETO RABOCHIY DEN"; break;
    case 6: echo "ETO VIHODNOY DEN"; break;
    case 7: echo "ETO VIHODNOY DEN"; break;
    default : echo "Neizvestniy Den"; break;

}
