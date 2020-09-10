<?php
$title = 'Contact';
$error = null;
$succes = null;
require 'header.php';

if (isset($_GET['email']) && isset($_GET['nom']) && isset($_GET['textInput'])) {
    $email = $_GET['email'];
    $nom = $_GET['nom'];
    $message = $_GET['textInput'];
    $succes = "Votre message a été bien envoyé";
}
?>
<h1>Formulaire de contact</h1>
<?php if ($succes) : ?>
    <div class="alert alert-success">
        <?= $succes ?>
        <div><strong> Voici son contenu: </strong></div>
        <div>
            <p>Email: <?= $email ?></p>
            <p>Nom: <?= $nom ?></p>
            <p><small>Message: <?= $message ?></small></p>
        </div>
    </div>
<?php endif ?>
<div class="centre">
    <section>
        <h5>Adresse : <br>
            MaMaison.com <br>
            45 rue du Hochfelden<br>
            67000 Strasbourg</h5>
    </section>
</div>
<form action="/contact.php" method="GET">
    <div class="form_group">
        <label for="emailInput">Votre email</label>
        <input class="form-control" type="text" name="email" id="emailInput" placeholder="adresse@serveur.fr">
    </div>
    <div class="form_group">
        <label for="nomInput">Votre nom</label>
        <input class="form-control" type="text" name="nom" id="nomInput">
    </div>
    <div class="form_group">
        <label for="textInput">Votre message:</label>
    </div>
    <div>
        <textarea class="form-control" name="textInput" id="textInput" cols="30" rows="10" placeholder="Message ..... "></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer le message</button>
    <button type="reset" class="btn btn-warning">Annuler les champs</button>
</form>
<?php
require 'footer.php';
?>