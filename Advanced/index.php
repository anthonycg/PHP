<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter'] += 1;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Counter</h1>
    <h2>
    <?php 
    echo $_SESSION['counter']
    ?>
    </h2>
    
</body>
</html>