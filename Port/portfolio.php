<?php
session_start();
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="Me">
            <a href="#profiili">PORTFOLIO</a>
        </div>
        <ul class="nav-links">
            <li><a href="#profiili">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#adjective">Adjective</a></li>
            <li><a href="#tyota">Projects</a></li>
            <li><a href="#YH">Contact</a></li>
            
        </ul>
    </nav>
    <section id="profiili" class="profiili_section">
            <div class="profiili-content">
                <h1>Warayut Monkru</h1>
                <p>18 vuotias</p>
                <p>Opiskelija</p>

                <a href="#tyota" class="btn">Katso työni</a>
            </div>
            <div class="profiili-img">
  
                <img src="../Port/assets/img/profiili.jpeg" alt="profiili kuva">
            </div>
    </section>
    <section id="about" class="about_section">
            <h2>Minusta</h2>
            <div class="about-container">
                <p>
                    Olen ensimmäisen vuoden ICT-opiskelija Savon ammattiopistossa
                    ja olen kiinnostunut verkkokehityksestä sekä pelinkehityksestä. 
                    Haluan kehittää ohjelmointitaitojani ja oppia uusia teknologioita.
                </p>
            </div>
    </section>
    <section id="skills" class="skills_section">
            <h2>Taitoni</h2>
            <div class="skills">

                <div class="taito">
                    <h3>HTML</h3>
                    <p>HTML - Verkkosivujen rakenteen tekeminen ja sisällön rakentaminen.</p>
                </div>

                <div class="taito">
                    <h3>C#</h3>
                    <p>
                        C# - winsforms ohjelmoinnin perusteet ja sovelluslogiikan harjoittelu.
                    </p>
                </div>

                <div class="taito">
                    <h3>CSS</h3>
                    <p>CSS - Verkkosivujen ulkoasun, 
                        värien ja responsiivisen suunnittelun 
                        tekeminen.
                    </p>
                </div>

                <div class="taito">
                    <h3>PHP</h3>
                    <p>PHP - PHP-ohjelmoinnin perusteiden opiskelu verkkokehitystä varten.
                    </p>
                </div>
                <div class="taito">
                    <h3>VS code</h3>
                    <p>
                        Monipuolinen koodieditori, jota käytän päivittäin HTML-,
                         CSS- ja PHP-projektien kehittämiseen
                    </p>
                </div>

                <div class="taito">
                    <h3>Visual Studio</h3>
                    <p>
                        monipuolinen kehitysympäristö (IDE), 
                        jota käytän C#-ohjelmoinnissa 
                        ja Windows Forms ohjelmoinissa.
                    </p>
                </div>
            </div>
    </section>

        <section id="adjective" class="skills_section">
            <h2>Vahvuus</h2>
            <div class="skills">

                <div class="taito">
                    <h3>Tavoitteellinen</h3>
                    <p>Ahkera</p>
                    <p>Sinnikäs</p>
                    <p>Utelias</p>
                </div>

                <div class="taito">
                    <h3>Huono</h3>
                    <p>kärsimätön</p>
                    <p>itsepäinen</p>
                    <p>yliajatteleva</p>
                </div>
            </div>
    </section>
    
    <section class="tyo-section" id="tyota">
        
            <div class="slide">
                <div class="tyo-kuva">
                    <img src="../Port/assets/img/pizza.png" alt="pizza-projecti">
                </div>

                <div class="tyo-tiedot">
                    <h2>C# harjoitustyö</h2>
                    <p>c# winsforms</p>
                    <p>
                        Tämä on ravintolan tilaus- ja kassajärjestelmä, jonka avulla voi valita pizzoja, 
                        lisätä täytteitä ja laskea loppusumman automaattisesti. 
                        Se on tähänastisista harjoitustöistäni suurin ja onnistunein projekti.
                        Projekti opetti minulle paljon monimutkaisen logiikan hallinnasta ja käyttöliittymän suunnittelusta, 
                        jotta ohjelmaa olisi mahdollisimman helppo ja sujuva käyttää.
                        
                    </p>
                    <a href="../Port/lataus/työt/ProjeckPizza.zip" class="btn">lataa</a>
                </div>
            </div>
            <hr><br>
            <div class="slide">

                <div class="tyo-kuva">
                    <img src="../Port/assets/img/html1.png" alt="html työkuva">
                    <img src="../Port/assets/img/html2.png" alt="html työkuva">
                    <img src="../Port/assets/img/html3.png" alt="html työkuva">
                </div>

                <div class="tyo-tiedot">
                    <h2>Boostrap</h2>
                    <p>Nettisivu</p>
                    <p>
                        Bandai-yrityksen esittelysivu, joka on tehty Bootstrapilla. 
                        Sivustoon kuuluu kolme osiota: Etusivu (Koti), Pelit ja Tuotteet (Tuote). 
                        Ulkoasussa on käytetty Bootstrapin valmiita muotoiluja, 
                        jotta tekstit, kuvat ja videot sopivat nätisti sivulle. 
                        Ylhäällä on selkeä valikko ja alhaalla yhteystiedot.
                        
                        
                    </p>
                        <a href="../Port/lataus/työt/Boostrap.zip" class="btn">Lataa</a>
                </div>
            </div>
            <hr><br>
            <div class="slide">
                <div class="tyo-kuva">
                    <img src="../Port/assets/img/CSS1.png" alt="css työkuva">
                    <img src="../Port/assets/img/CSS2.png" alt="css työkuva">
                    <img src="../Port/assets/img/CSS3.png" alt="css työkuva">
                    <img src="../Port/assets/img/CSS4.png" alt="css työkuva">
                </div>

                <div class="tyo-tiedot">
                    <h2>CSS</h2>
                    <p>CSS</p>
                    <p>
                        Tämä CSS-koodi hoitaa sivuston ulkoasun, värit ja asettelun. 
                        Koodissa on käytetty Flexboxia ja Gridiä, jotta tekstit ja kuvat saadaan oikeille paikoilleen. 
                        Työ-osiossa on mukana myös automaattinen skrollaus (Scroll Snap), 
                        joka lukitsee näkymän kohdalleen, kun sivua rullaa alaspäin.
                        
                    </p>
                        <a href="style.css" class="btn">Katso</a>
                </div>
            </div>
            <hr><br>
            <div class="slide">
                <div class="tyo-kuva">
                    <img src="../Port/assets/img/PHP1.png" alt="PHP työkuva">
                    <img src="../Port/assets/img/PHP2.png" alt="PHP työkuva">
                </div>
                
                <div class="tyo-tiedot">
                    <h2>PHP</h2>
                    <p>Perus PHP</p>
                    <p>
                    Tämä on koulussa tehty harjoitustyö, jossa opeteltiin PHP-ohjelmoinnin perusteita. 
                    Ohjelmassa käyttäjä voi syöttää lomakkeelle haluamansa rivi- ja sarakemäärät sekä valita taustavärin, 
                    jonka jälkeen järjestelmä luo taulukon annettujen tietojen mukaan.
                    
                    </p>
                    <a href="../Port/lataus/työt/taulukkoohjelmallisesti.zip" class="btn">Lataa</a>
                    
                </div>
            </div>
    </section>

    <!-- <section id="YH" class="yhteystiedot-section">
            <h2>YHTEYSTIEDOT</h2>
            <div class="yhteystiedot-linki">
                <a href="mailto:warayut100720@gmail.com">&#9993;Sähköposti</a>
                <a href="https://github.com/mnw-bg" target="_blank">&#128049;GitHub</a>
                <a href="tel:+358413155419">&#9742;puhelin</a>
                <a href="https://wa.me/358413155419" target="_blank">&#128172;whatsapp</a>
            </div>
    </section> -->

    <section id="YH" class="yh-section">
    <h2 class="yh">OTA YHTEYTTÄ</h2>
    <div class="yh-container">
        <div class="yh-tiedot">
            <div class="yh-rivi">
                <span class="yh-label">SÄHKÖPOSTI</span>
                <a href="mailto:warayut100720@gmail.com">warayut100720@gmail.com</a>
            </div>
            <div class="yh-rivi">
                <span class="yh-label">PUHELIN</span>
                <a href="tel:+358413155419">+358 41 3155419</a>
            </div>
            <div class="yh-rivi">
                <span class="yh-label">SIJAINTI</span>
                <a href="https://maps.app.goo.gl/dMqadSZ1ECQD4A1L6">Kuopio, Suomi</a>
            </div>
            <div class="yh-rivi">
                <span class="yh-label">GITHUB</span>
                <a href="https://github.com/mnw-bg" target="_blank">github.com/mnw-bg</a>
            </div>
        </div>
        <div class="yh-tiedot">
            <form action="../Turvallisuus php-lomakkeella/tarkistus.php" method="POST">
                <label for="nimi" class="yh-label">Nimi:</label><br>
                <input type="text" name="nimi" class="lmk" size="30" required><br>

                <label for="sahkoposti" class="yh-label">Sähköposti:</label><br>
                <input type="email" name="sahkoposti" class="lmk" size="30" required><br>

                <label for="texti" class="yh-label">Viesti:</label><br>
                <textarea name="viesti" class="lmk" rows="10" cols="32.5" required></textarea></textarea><br><br>

                <!-- CSRF-token -->
                <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

                <input type="submit" value="SEND MESSAGE" class="lmk">
            </form>
        </div>
    </div>
</section>

    <footer class="footer">
        <p>&copy; 2026 MyPortfolio.</p>
    </footer>

</body>
</html>