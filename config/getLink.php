<?php

namespace config\getlink;

require_once 'database.php';

class GetCurrentLink {


function getCurrentLink() {

// Détermine si HTTPS est activé
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Récupère le nom de domaine (host)
$host = $_SERVER['HTTP_HOST'];

// Récupère le chemin et la chaîne de requête (URI)
$uri = $_SERVER['REQUEST_URI'];

// Concatène les différentes parties pour former l'URL complète
$current_url = $protocol . $host . $uri;

return $current_url;

}
}
?>