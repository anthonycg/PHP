<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Test</title>
</head>

<body>
<form action='process.php' method='post'>
    First-name:<input type='text' name='first_name'>
    Last-name: <input type='text' name='last_name'>
    Email address: <input type='text' name='email'>
    <input type='submit' value='add user!'>
</form>


<?php
$sample = array(10, 3, 5, 8, 4, 2, 1, 333); 
$total = 0;
$divide = count($sample);
foreach($sample as $sam) {
$total = $total + $sam;
};
echo $total/$divide;
?>



</body>
</html> 