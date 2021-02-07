<!DOCTYPE html>
<html lang = en>
<head>
    <title>COMP2001 WebApp</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<div class = "header">
    <h1>Libraries in Plymouth</h1>
    <img src ="../resources/library.jpg" alt = "library photo" width="584" height = "381">
</div>

    <div class="btn-group">
        <button onclick="document.location='data.php'">View Data</button>
        <button onclick="document.location='displayJSON.php'">JSON</button>
    </div>


<div class = "dataHeader" >
    <h1>Plymouth Active Library Users By Age</h1>
</div>
<div></div>
<iframe width="900" height="400"  src="https://plymouth.thedata.place/dataset/active-library-users-by-age/resource/dde47275-1a23-402a-a40d-bba7d7c50955/view/1ced7fda-db93-4d9a-99f2-d695ffb759cc" frameBorder="0"></iframe>

<?php
