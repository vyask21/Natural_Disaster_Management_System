<?php
include_once("db_connect.php");
session_start();

// get the q parameter from URL
$q = $_REQUEST["qa"];

                
if (filter_var($q, FILTER_VALIDATE_EMAIL)) {
  
 

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    // foreach($b as $name) {
    //     if (stristr($q, $name)) {
    //         if ($hint === "") {
    //             $hint = "already registered";
    //         }
    //     }
    // }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "<h6 style='color: green;'>Email verified!</h6>" : $hint;

/// ph mail otp
}
else {
    $hint = "<h6 style='color: red;'>Invalid Email</h6>";
 echo $hint ;
}
?>