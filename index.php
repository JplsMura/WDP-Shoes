<?php
define("BASE", "https://localhost/wdp/wdp-project");
define("THEME", "WdpShoes");
define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
define("THEME_LINK", BASE . "/Themes/" . THEME);

$configBase = BASE;
$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "WdpShoes";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2020-04-20T07:03:21-03:00+171174">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=0">

    <title>WdpShoes | Home</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="Assets/Styles/Icons.css"/>
    <link rel="stylesheet" href="Assets/Styles/Boot.css"/>
    <link rel="stylesheet" href="Themes/WdpShoes/Style.css"/>
    <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png"/>

    <script src="Assets/jquery.js"></script>
    <script src="Assets/scripts.js"></script>

</head>

<body>

    <?php
        require "./Themes/WdpShoes/header.php";
        require "./Themes/WdpShoes/index.php";
        require "./Themes/WdpShoes/footer.php";
    ?>

</body>

</html>
