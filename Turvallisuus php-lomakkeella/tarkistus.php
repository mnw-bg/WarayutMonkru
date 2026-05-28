
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarkistus</title>
</head>
<body>
    <div class="form">
    <?php
    function tarkistaSyote($nimi, $sahkoposti, $viesti) {
        //puhdistetaan syöte mahdollista HTML-erikoismerkkia
        $nimi = htmlspecialchars(trim($nimi));
        $sahkoposti = htmlspecialchars(trim($sahkoposti));
        $viesti = htmlspecialchars(trim($viesti));

        if (strlen($nimi) > 100) return "Nimi on liian pitkä";
        if (!preg_match("/^[a-zA-ZäöåÄÖÅ\s-]+$/u", $nimi)) return "Virheellinen nimi!";
        if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) return "Virheellinen sähköposti";
        if (strlen($sahkoposti) > 255) return "Sähköposti on liian pitkä";

        $domain = explode('@', $sahkoposti)[1] ?? '';
        if (!checkdnsrr($domain, 'MX')) return "sähköpostin domain ei ole toimiva!";
        
        return [
            'nimi' => $nimi,
            'sahkoposti' => $sahkoposti,
            'viesti' => $viesti
        ];
    }

    $tulos = tarkistaSyote($_POST['nimi'], $_POST['sahkoposti'], $_POST['viesti']);

    if (is_array($tulos)) {
        $rivi = date("Y-m-d H:i:s") . " | Nimi: {$tulos['nimi']} | Sähköposti: {$tulos['sahkoposti']} 
| Viesti:
 {$tulos['viesti']}" . PHP_EOL;
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
    ?><br>
    <input type="submit" value="GET BACK">
    </div>
</body>
</html>