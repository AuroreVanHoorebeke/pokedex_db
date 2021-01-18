<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Pokédex</title>
</head>
<body>
<button class="mdc-button foo-button">
    <div class="mdc-button__ripple"></div>
    <span class="mdc-button__label">Button</span>
</button>

<?php

try{
    include 'include/connexion.php';
    $request = $dbh->prepare('SELECT * FROM pokemons /*INNER JOIN pokemon_has_type ON pokemon_has_type.FK_id_pokémon = pokemons.id*/');
    $request->execute();
    while($data = $request->fetch()){
    echo '<p>#' . $data['NUMBER'] . ' - ' . $data['NAME'] . '</p>';
    echo '<p>Type:' . $data['TYPE1'] . ' ' . $data['TYPE2'] . '</p>';
    }
} catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
?>




<script type="text/javascript">mdc.ripple.MDCRipple.attachTo(document.querySelector('.foo-button'));</script>
</body>

<footer>Database based on simsketch's <a href="https://gist.github
.com/simsketch/1a029a8d7fca1e4c142cbfd043a68f19">Pokédex csv</a></footer>
</html>