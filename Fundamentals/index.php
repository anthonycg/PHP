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
  $first_name = "Anthony";
  $last_name = "Gibson";
  $occupation = "Software Engineer";
  $jobList = array();
  $jobList[] = "civil engineer";
  $jobList[] = "doctor";
  $jobList[] = "pilot";

  echo "My first name is $first_name <br>";
  echo "My last name is $last_name" . ", and" . "I used to be a $jobList[0]. <br>";
  echo "I'm currently a $occupation <br>";
  ?>

  <?php 
  $party_people = array();
  $party_people[] = array("name" => "Mike1", "age" => 21);
  $party_people[] = array("name" => "Mike2", "age" => 21);
  $party_people[] = array("name" => "Mike3", "age" => 234);
  $party_people[] = array("name" => "Mike4", "age" => 210);
  $party_people[] = array("name" => "Mike5", "age" => 21);
  $party_people[] = array("name" => "Mike6", "age" => 20);
  $party_people[] = array("name" => "Mike7", "age" => 21);
  $party_people[] = array("name" => "Mike8", "age" => 20);
  $party_people[] = array("name" => "Mike9", "age" => 21);
  $party_people[] = array("name" => "Mike10", "age" => 21);
  $party_people[] = array("name" => "Mike11", "age" => 20);
  $party_people[] = array("name" => "Mike12", "age" => 21);
  $party_people[] = array("name" => "Mike13", "age" => 20);
  $party_people[] = array("name" => "Mike14", "age" => 21);
  $party_people[] = array("name" => "Mike15", "age" => 21);
  $party_people[] = array("name" => "Mike16", "age" => 21);
  $party_people[] = array("name" => "Mike17", "age" => 21);
  $party_people[] = array("name" => "Mike18", "age" => 21);
  $party_people[] = array("name" => "Mike19", "age" => 20);

  $capacity = 0;
  $party_message = '';
  $number_in_party = 0;
  

  foreach($party_people as $person) {
    if ($party_people[$capacity]["name"] == "Mike3" || $party_people[$capacity]["name"] == "Mike2") {
      $party_message = "Sorry" . $party_people[$capacity]["name"] . "You're not allowed. <br>";
    }
    else if ($party_people[$capacity]["age"] < 21) {
      $party_message = "  You're too young, kid. You're only" . $party_people[$capacity]["age"] . "<br>";
    }
    else if ($number_in_party >= 10) {
      $party_message = "Sorry, the party is full <br>";
    }
    else {
      $party_message = "Welcome." . $party_people[$capacity]["name"] . "<br>";
      $number_in_party++;
    }
    $capacity++;
    echo $party_message;
  };

  ?>

  <?php
  for($i = 0; $i < 100;$i++) {
    echo $i . "<br>";
  };
  ?>

<?php
$numbers = array(1, 2, 5, 10, 255, 3);
$total = 0;
foreach($numbers as $number) {
  $total = $number + $total;
}

$arrayLength = count($numbers);
echo $total/$arrayLength;

?>

</body>
</html> 