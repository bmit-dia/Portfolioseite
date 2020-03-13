<?php
    include_once("../php/head.php");
    include_once("../php/navbar.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php
            print $headinfo;
        ?>
    </head>
    <body>
        <?php
            print $navbar;
        ?>
        <div class="center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- A069K -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/project/Kalenderbild.png" alt="Sitzungszimmer Displays">
                        <div class="d-md-block">
                            <h5>Sitzungszimmer Displays</h5>
                            <p>
                                An diesem Projekt arbeite ich schon ein wenig länger. Es handelt sich um ein 
                                System, welches mittels E-Paper Displays die nächsten 3 Termine des jeweiligen 
                                Sitzungszimmers anzeigt. Das ganze ist so aufgebaut, dass jedes Sitzungszimmer
                                einen <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">Raspberry Pi 3</a> erhält, welcher aus dem Outlookkalenders des Zimmers die
                                Termine runterlädt, die Daten herauslädt und in ein vorbereitetes Pythonskript
                                einfügt, welches dann die Darstelung auf dem <a href="https://www.waveshare.com/5.83inch-e-paper.htm">E-Ink</a> Display der Marke Waveshare
                                anzeigt.
                            </p>
                        </div>
                    </div>
                    <!-- A076K -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/project/Exceldateien.png" alt="Excelfiles">
                        <div class="d-md-block">
                            <h5>Zeiterfassungsaufaddierer</h5>
                            <p>
                                Dieses Projekt ist eine eher kleine Aufgabe. Die Buchhaltung der ESPAS möchte 
                                eine Möglichkeit, alle Gleitzeitsaldos aller Kadermitglieder in einer Datei 
                                zusammengefasst haben. Dazu nutze schreibe ich ein <a href="https://de.wikipedia.org/wiki/Visual_Basic_for_Applications">VBA</a> Script mit welchem ich
                                ein Dateisystem absuche und die dort vorhandenen Exceldateien nach diesen Feldern absuche.
                            </p>
                        </div>
                    </div>
                    <!-- A013K -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/project/Badgingwebsite.png" alt="Excelfiles">
                        <div class="d-md-block">
                            <h5>Badging</h5>
                            <p>
                                Das Sorgenkind in unserer Abteilung und dazu das wahrscheinlich grösste Projekt 
                                der Abteilung. Das Badgingsystem soll mittels eines Raspberry Pi's die 
                                Zeiterfassung aller Lernenden und Gruppenleiter der Abteilung übernehmen. Meine
                                Arbeit in diesem Projekt bestand in der Aufnahme der Badges in die Datenbank, 
                                Zuweisung an Lernende und Mitarbeiter und die Entwicklung eines neuen Frontends.
                                Das Badgingsystem ist eines von zwei Projekten, bei denen ich nicht von
                                Anfang an dabei war.
                            </p>
                        </div>
                    </div>
                    <!-- A027K -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/project/Library.png" alt="Libraryseite">
                        <div class="d-md-block">
                            <h5>Library</h5>
                            <p>
                                Die Libraryseite ist eines von zwei Projekten, welches ich nicht von Anfang an 
                                begleitet habe. Meine Aufgabe in diesem Projekt war administrativer Natur. Ich
                                habe alle Bücher und Magazine in die DB eingetragen mittels eines kleinen SQL-Scripts
                                was automatisch alle benötigten Eigenschaften übernommen hat, auch an die ISBN 
                                bei den Büchern wurde gedacht. Mir kam während dieses Prozesses noch die Idee, ältere
                                Zeitschriften (älter als 2 Jahre) zu entsorgen, da ein Grossteil der Themen zu
                                diesem Zeitpunkt bereits outdated war. Ich durfte auch bei Designentscheidungen 
                                der Website beitragen.
                            </p>
                        </div>
                    </div>
                    <!-- Verkabelungsauftrag KV GL Büro -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/project/Verkabelung.jpg" alt="Excelfiles">
                        <div class="d-md-block">
                            <h5>Verkabelungsauftrag KV Gruppenleiterbüro</h5>
                            <p>
                                Verkabelungen gehören zwar nicht zwangsläufig zu meinem Fachgebiet, aber trotzdem
                                bin ich froh, dass ich einen solchen Auftrag erledigen zu durfte. Der Auftrag bestand darin
                                3 PCs in einem Büro komplett neu zu verkabeln, da es zuvor nach ziemlichem "IT-Gore"
                                aussah. Ich habe diesen Auftrag zusammen mit 2 weiteren Lernenden erledigt und
                                schneller als verlangt.
                            </p>
                        </div>
                    </div>
                    <!-- Ode an die Liebe -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/project/VLC_media_player.PNG" alt="VLC Media Player">
                        <div class="d-md-block">
                            <h5>Cd brennen</h5>
                            <p>
                                Mein allererster Auftrag in der ESPAS. Ein Kadermitglied brauchte ein Snippet diverser
                                Liebeslieder als CD und ich meldete mich freiwillig, da ich bereits Erfahrung im Brennen
                                von CDs mit meinem Vatzer gesammelt habe. Am Ende waren neben dem Snippet auch alle
                                im Snippet vorhanden Songs auf der CD und das Kadermitglied war sehr zufrieden mit meiner Arbeit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class ="no-display">
                    <!-- Slidewechselbuttons -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Slideshow Jumpmarks -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                </ol>
            </div>
        </div>
    </body>
</html>