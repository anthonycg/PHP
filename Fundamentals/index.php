<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Test</title>
</head>

<body>
<?php
$str = "I am learning the new and improved PHP.";

$array = explode(' ', $str);

foreach($array as $word) {
  echo $word;
};

$lowercase = strtolower($str);
echo $lowercase;

?>

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