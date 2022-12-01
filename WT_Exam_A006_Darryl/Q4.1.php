<!DOCTYPE html>
<?php
if(isset($_POST["Submit"]))
{
    $salary=test_input($_POST["sal"]);
    if($salary<1500)
    {
        $HRA=0.1*$salary;
        $DA=0.9*$salary;
    }

    else if($salary>=1500)
    {
        $HRA=500;
        $DA=0.98*$salary;
    }

    $gsal=$salary+$HRA+$DA;
    echo $gsal;
}
?>