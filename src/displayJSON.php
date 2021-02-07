<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="../css/stylesheet">

<div class="smallHeader">
    <h1>Active Library Users in Plymouth: JSON Format</h1>
</div>



<?php

$myfile = fopen("../resources/LibraryUsers.json", "r");

while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
