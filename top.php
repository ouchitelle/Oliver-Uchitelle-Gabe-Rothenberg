<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NBA Playoffs</title>
    <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" href="css/layout-desktop.css?version=<?php print time(); ?>" type="text/css">
    <link href = "css/layout-tablet.css?version=<?php print time(); ?>" media = "(max-width: 820px)" rel = "stylesheet" type = "text/css">
    <link href = "css/layout-phone.css?version=<?php print time(); ?>" media = "(max-width: 430px)" rel = "stylesheet" type = "text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oliver Uchitelle">
    <meta name="description" content="Website exploring NBA playoff matchups and the MVP race">
    <!--We want to discuss the NBA playoffs, reegular season awards, and what we think will happen. -->
</head>

<?php
print '<body class="' . $pathParts['filename'] . '">';

include 'database-connect.php';
include 'header php';
    include 'nav.php';
    ?>
