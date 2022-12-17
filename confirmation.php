<?php
    $firstname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pnumber = $_POST["pnumber"];
    $email = $_POST["email"];
    $counter = 1;
    while (file_exists($counter.".txt"))
    {
        $counter++ ;
    }
    $file = fopen($counter.".txt", "w");
    fwrite($file, "First name: ".$firstname."\n"."Last name: ".$lname."\n"."Phone number: ".$pnumber."\n"."Email: ".$email);
    fclose($file);
?>