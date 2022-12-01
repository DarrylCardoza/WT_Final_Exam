<?php
$file = fopen("myData.txt", "w") or die("Unable to open file!");
$content = "Hi, I am Darryl Cardoza, Roll no:A006, from batch B1 & currently pursuing MCA from MPSTME";
fwrite($file, $content);
fclose($file);
?>
