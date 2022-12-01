<?php
$day = date('h');

if ($day >= 20) {
$greet = "Good Night";
} elseif ($day > 16) {
$greet = "Good Evening";
} elseif ($day > 12) {
$greet= "Good Afternoon";
} elseif ($day < 12) {
$greet = "Good Morning";
}
echo $greet;


?>
