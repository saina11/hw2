<form action="" method="post">
    <input type="text" name="number">
    <button type="submit">SUBMIT</button>
</form>
<?php
$age= $_POST['number'];
//echo "Меня зовут: Саша";
//
//echo "Мне 20 лет";

if ($age>=18 && $age<=59) {
    echo "VAM RABOTAT AND RABOTAT";
}
elseif ($age>59) {
    echo "VAM PORA NA PENSIU";
}
elseif ($age>=0 && $age<=17) {
    echo "VAM ESCHE RANO RABOTAT";
}
elseif ($age <0 && is_numeric($age) ) {
    echo "NEPRAVILNIY VVOD";
}

