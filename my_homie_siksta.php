
<?php
// php - $ = začátek názvu skriptu ; = parametr; zakončit semicolenem. parametry v "" se mohou měnit - přepíše se obsah
$firstname = "Šimon";
$lastname = "Siksta";
$age = "věk 16let 2003 10. 7.";
$gender = "pohlaví - biological male - prefer Helicoktéra";
$job = "profese - student";
$race = "Rasa - europoidní (aryan)";
$email = "simon.siksta@student.ossp.cz";
$telephone = "čislo neznám nejsem stalker";
$hobbies = "hraní videoher, cestování, zvířata";
?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šímon Siksta</title>
</head>
<body>
 <h1><?= $firstname; ?> <?= $lastname; ?></h1>
 <ul>
 <li>Příjmení - <?= $lastname; ?></li>
 <li>Křesné - <?= $firstname; ?></li>
 <li><?= $age; ?></li> 
 <li><?= $gender; ?></li>
 <li><?= $job; ?></li>
 <li><?= $race; ?></li>
 <li><?= $email; ?></li>
 <li>Phone : <?= $telephone; ?></li>
<li>koníčky : <?= $hobbies; ?></li>

</ul>
</body>
</html>