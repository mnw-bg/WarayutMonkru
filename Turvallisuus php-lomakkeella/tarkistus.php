<?php
session_start();

if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    unset($_SESSION['csrf_token']);
    die("CSRF-tunniste ei kelpaa!");
}
unset($_SESSION['csrf_token']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarkistus</title>
</head>
<body>
    <?php
    function tarkistaSyote($nimi, $sahkoposti) {
        //puhdistetaan syöte mahdollista HTML-erikoismerkkia
        $nimi = htmlspecialchars(trim($nimi));
        $sahkoposti = htmlspecialchars(trim($sahkoposti));

        if (strlen($nimi) > 100) return "Nimi on liian pitkä";
        if (!preg_match("/^[a-zA-ZäöåÄÖÅ\s-]+$/u", $nimi)) return "Virheellinen nimi!";
        if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) return "Virheellinen sähköposti";
        if (strlen($sahkoposti) > 255) return "Sähköposti on liian pitkä";

        $domain = explode('@', $sahkoposti)[1] ?? '';
        if (!checkdnsrr($domain, 'MX')) return "sähköpostin domain ei ole toimiva!";
        
        return [
            'nimi' => $nimi,
            'sahkoposti' => $sahkoposti
        ];
    }
    
    if (!isset($_POST['csrf_token'], $_SESSION['csrf_token'])|| $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF-tunniste ei kelppa!");
    }

    $tulos = tarkistaSyote($_POST['nimi'], $_POST['sahkoposti']);

    if (is_array($tulos)) {
        $rivi = date("Y-m-d H:i:s") . " | Nimi: {$tulos['nimi']} | Sähköposti: {$tulos['sahkoposti']}" . PHP_EOL;
        $tiedosto = 'tiedot.txt';

        if (file_put_contents($tiedosto, $rivi, FILE_APPEND | LOCK_EX)){
            echo "Tiedot tallennettu tiedostoon!";
        }
        else{
            echo "Tiedoston kirjoittaminen epäonnistui!";
        }
    }
    else{
        echo "virhe: " . $tulos;
    }
    ?>
</body>l
</html>