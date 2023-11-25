<?php
$ICON = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/1024px-Flat_tick_icon.svg.png";
$WATER_CSS = "https://cdn.jsdelivr.net/npm/water.css@2/out/light.css";
$CUSTOM_CSS = file_get_contents("./src/public/custom.css");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_TITLE; ?></title>
    <link rel="icon" href="<?php echo $ICON; ?>">
    <link rel="stylesheet" href="<?php echo $WATER_CSS; ?>">
    <style><?php echo $CUSTOM_CSS; ?></style>
    <script src="./src/public/custom.js"></script>
</head>
<body>

<script>



</script>