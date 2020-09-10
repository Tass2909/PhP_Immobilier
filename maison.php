<?php
$title = 'Nos maison';
require 'header.php';
$typeDeLogements = [
    'Maison',
    'Villa',
    'Appartement'
];
$nbrPieces = [
    '1', '2', '3', '4', '5+'
];
$nbrChambres = [
    '1', '2', '3', '4', '5+'
];
$commodites = [
    'Garage',
    'Cave',
    'Box',
    'Alarme',
    'Parking'
];
$cuisines = [
    'Cuisine équipé',
    'Cuisine américaine',
    'Coin cuisine'
];
$tabtypeDeLogements = [];
$tabnbrPieces = [];
$tabnbrChambres = [];
foreach (['typeDeLogement', 'nbrPiece', 'nbrChambre'] as $name) {
    if (isset($_GET[$name])) {
        $liste = $name . 's';
        $choix = $_GET[$name];
        if (is_array($choix)) {
            foreach ($choix as $value) {
                if (isset($value)) {
                    if ($name === 'nbrPiece') {
                        $tabnbrPieces[] = $value;
                    }
                    if ($name === 'typeDeLogement') {
                        $tabtypeDeLogements[] = $value;
                    }
                    if ($name === 'nbrChambre') {
                        $tabnbrChambres[] = $value;
                    }
                }
            }
        }
    }
}
?>
<h1>Nos maisons</h1>
<h5>Vous recherchez votre logement, sélectionner les critères suivants: </h5>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-body">Votre recherche</h5>
            <ul>
                <h6>Type de logement</h6>
                <?php foreach ($tabtypeDeLogements as $tabtypeDeLogement) : ?>
                    <li><?= $tabtypeDeLogement ?></li>
                <?php endforeach ?>
                <h6>Nombre de pièces</h6>
                <?php foreach ($tabnbrPieces as $tabnbrPiece) : ?>
                    <li><?= $tabnbrPiece ?></li>
                <?php endforeach ?>
                <h6>Nombre de chambres</h6>
                <?php foreach ($tabnbrChambres as $tabnbrChambre) : ?>
                    <li><?= $tabnbrChambre ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="col-md-8">
        <form action="/maison.php" method="GET">
            <h5>Type de logement:</h5>
            <?php foreach ($typeDeLogements as $typeDeLogement) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('typeDeLogement', $typeDeLogement, $_GET) ?>
                        <?= $typeDeLogement ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <h5>Nombre de pièces:</h5>
            <?php foreach ($nbrPieces as $nbrPiece) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('nbrPiece', $nbrPiece, $_GET) ?>
                        <?= $nbrPiece ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <h5>Nombre de chambres:</h5>
            <?php foreach ($nbrChambres as $nbrChambre) : ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox('nbrChambre', $nbrChambre, $_GET) ?>
                        <?= $nbrChambre ?>
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Rechercher</button>
    </div>
</div>



<?php
require 'footer.php';
?>