<?php

global /* @var {String} */ $get_the_title;
// TODO randomize words
$get_the_title = 'Auf gut Glück'; // TODO words joined by en dash
include_once('includes/header.php') ?>
<h1>Auf gut Glücke</h1>
<p>Auf Gut Glück ist eine Seite, deren Inhalt sich imer verändert. Lade sie neu uns lass dich überraschen.</p>
<h2><?php echo $get_the_title ?></h2>
<!-- TODO random image -->
    <img alt="Fotografie eines Bahnhofs" src="img/rail_station_from_train_color.jpg" width="960" height="540"/></img>
    <br>
<?php include_once('includes/footer.php') ?>