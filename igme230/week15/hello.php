<!DOCTYPE html>
<html lang="en">
<head>
    <title>Basic PHP</title>
</head>

<?php
echo "<p>This page is hosted on the ";
echo $_SERVER['SERVER_NAME'];
echo " server.</p>";
echo "<p>It's currently ";
echo date("g:ia, l, F jS, Y");
echo "</p>";
?>

<body>
    <h1>Basic PHP</h1>
 
 </body>
</html>