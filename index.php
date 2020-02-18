<?php
$name = "martin Lédl";
$age = "věk 17let 2002 20.srpen";
$gender = "pohlaví - muž";
$job = "profese - student";
$race = "Rasa - Bílá - Trpaslík";
$email = "martin.ledl@student.ossp.cz";
$telephone = "123456789";
$hobbies = "koníčky - psaní patetických a špatných fanfikcí s mojí ubohou romantičností, též hraní videoher a analýza uměleckého story tellingu a game designu - to je můj fetish";
?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Mortarion the Martin L3dl</title>
</head>
<body>
 <h1><?php echo $name; ?></h1>
 <ul>
 <li><?php echo $age; ?></li> 
 <li><?php echo $gender; ?></li>
 <li><?php echo $job; ?></li>
 <li><?php echo $race; ?></li>
 <li><?php echo $email; ?></li>
 <li>Phone : <?php echo $telephone; ?></li>
<li><?php echo $hobbies; ?></li>

</ul>
</body>
</html>