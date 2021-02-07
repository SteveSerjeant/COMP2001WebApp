<!DOCTYPE html>
<html lang = en>
<head>
    <title>COMP2001 WebApp Age Data</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

    <div class = "dataHeader" >

        <h1>Plymouth Libraries: Raw Data</h1>
    </div>


<?php

echo "<html><body><table>\n\n";
$file = fopen("../resources/LibraryAgeInfo.csv", "r");
while (($data = fgetcsv($file)) !== false) {
    echo "<tr>";
    foreach ($data as $i) {
        echo "<td>" . htmlspecialchars($i) . "</td>";
    }
    echo "</tr>\n";
}
fclose($file);
echo "\n</table></body></html>";

?>

