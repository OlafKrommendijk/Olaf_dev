<!DOCTYPE html>
<html>
<head>
    <title>VeRDI site</title>
</head>
<body>
<form id="form" method="GET">

    <label for="name">Name</label><input type="text" name="name">
    <label for="color">Color</label><input type="text" name="color"><label for="color">Color</label>
    <input type="submit" name="submit" id="submit" value="submit" href="" />

</form>
</body>
</html>

<?php

if (isset($_GET["submit"])) {
    $name = htmlspecialchars($_GET["name"]);
    $color = htmlspecialchars($_GET["color"]);

    echo "Uw naam is " . $name . ", Uw kleur is " . $color;
};
?>