<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 
<?php

$_test1_ = 3;
$_test2_ = 6;

if($_test1_ == $_test2_) {
    echo "de vergelijking is waar!";
}

elseif ($_test1_ != $_test2_) {
echo "tekst is gelijk";
echo "<br>";
}

if ( $_test1_ <= $_test2_) {
    echo "tekst is identiek";
    echo "<br>";
}

elseif ($_test1_ >= $_test2_) {
    echo "tekst is groter";
    echo "<br>";
}

if ($_test1_ <=> $_test2_) {
    echo "tekst is spaceship";
}

?>

    
</body>
</html>