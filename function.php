<?php
function setTitle($title = ''): string
{
    if (isset($title)) {
        return $title;
    } else return 'Mon site';
}

function nav_item($lien, $titre, $linkClass): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="$classe"><a class="$linkClass" href="$lien">$titre</a></li>
HTML;
}

function nav_menu(string $linkClass = ''): string
{
    return nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/maison.php', 'Nos maisons', $linkClass) .
        nav_item('/contact.php', 'Nous contacter', $linkClass);
}

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function checkbox(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}

function radio(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}
