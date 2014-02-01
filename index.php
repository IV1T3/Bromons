<?php
include_once '../private/config.php';
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>
<html>
    <head>
        <title>Startseite - Bromons</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <img src="images/pokeMonMap2.png" width="600" height="400" alt="theMap" usemap="#map">
        <map name="map">
            <area shape="rect" coords="55,65,190,173" href="#home" alt="home" title="My Home">
            <area shape="rect" coords="0,0,600,60" href="#wilderness" alt="wilderness" title="The wilderness">
            <area shape="rect" coords="410,69,483,160" href="#shop" alt="shop" title="The shop">
            <area shape="rect" coords="20,254,220,380" href="#hospital" alt="hospital" title="The hospital">
            <area shape="rect" coords="355,243,583,365" href="#arena" alt="arena" title="The arena">
            <area shape="rect" coords="223,140,369,254" href="#square" alt="square" title="Bromons Square">
        </map>

        <?php
            foreach ($sites as $site):
        ?>
            <div id="<?= $site[0] ?>" class="popUps">
                <header>
                    <a href="index.php">⬅ Zur&uuml;ck</a>
                    <h2><?= $site[1] ?></h2>
                </header>
                <article>
                    <?php include "sites/" . $site[0] . ".php"; ?>
                </article>
            </div>  
        <?php
            endforeach;
        ?>

    </body>
</html>
