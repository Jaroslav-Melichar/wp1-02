<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $firstname = "Jaroslav";
  $avatar = "JaroslavMelichar.jpg";
  $lastname = "Melichar";
  $age = "15";
  $profession = "Student";
  $city = "Kolín";
?>
    <h1> Výpis profilu </h1>
    <img src="<?php echo $avatar; ?>" alt="Avatar uživatele">
    <ul>
    <li>Jméno: <?php echo $firstname; ?></li>
    <li>Příjmení: <?php echo $lastname; ?></li>
    <li>Věk: <?php echo $age; ?></li>
    <li>Profese: <?php echo $profession; ?></li>
    <li>Město: <?php echo $city; ?></li>
    <li>Další položky k výpisu</li>


    </ul>

</body>
</html>