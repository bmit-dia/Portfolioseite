<?php
    include_once("/php/head.php");
    include_once("/php/navbar.php");
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
            <h1>Alessandro Di Maria</h1>
            <h4>Privat</h5>
            <p>
                Mein Name lautet Alessandro Di Maria. Ich wurde am 9. Januar 1996 geboren und bin heute 24 Jahre alt.
                Meine Hobbies belaufen sich auf das Spielen von Videospielen, Musik hören und mit Freunden etwas unternehmen.
                Ich bin ein geselliger Typ und kann bei diversen Themen mitreden. Ich bilde mich gerne weiter, da ich der Ansicht bin,
                dass ein grosses Wissen essentiel im Leben ist. Mein Traum ist es, etwas in der Welt zu hinterlassen, 
                wofür man sich an mich erinnert. Ich lebe momentan in einer betreuten WG beim Kreuzplatz in Zürich. 
            </p>
            <h4>Beruflich</h5>
            <p>
                Momentan bin ich im 2. Lehrjahr meiner Ausbildung zum Informatiker mit Fachrichtung Applikationsentwicklung.
                Meine Stärken liegen in den Websprachen <a href="https://de.wikipedia.org/wiki/Hypertext_Markup_Language">HTML</a>, 
                <a href="https://de.wikipedia.org/wiki/Cascading_Style_Sheets">CSS</a>, <a href="https://de.wikipedia.org/wiki/JavaScript">JS</a>, 
                <a href="https://de.wikipedia.org/wiki/PHP">PHP</a>, aber auch mit <a href="https://de.wikipedia.org/wiki/SQL">SQL</a>-Datenbanken kenne ich mich aus.
                Momentan lerne ich <a href="https://de.wikipedia.org/wiki/Spring_(Framework)">Springboot</a> (Java Framework) 
                und hoffe, dort meine Webkenntnisse verbessern zu können. Ich kann mit Codeverwaltungssoftware wie 
                <a href="https://de.wikipedia.org/wiki/Git">Git</a> umgehen und finde mich sowohl über die Bash, wie
                auch ein GUI zurecht. Ein schönes Beispiel hierfür ist diese Website. Ich habe Visual Studio Code für
                die Entwicklung verwendet, mit <a href="https://desktop.github.com/">Github Desktop</a> auf ein 
                Remote-Repository gepusht und ich lasse es von dort mittels eines <a href="https://de.wikipedia.org/wiki/WebHooks">Webhooks</a>
                auf Metanet (Host der Seite) hochladen.<br/>
                Ich habe mich dazu entschlossen die Seite mit Bootstrap aufzubauen, da heute immer seltener eigene Stylesheets
                erstellt werden und ich mich dem Framework-Train anschliesse und mich mit Bootstrap befasse. Ich durfte für 
                einen Auftrag auch schon Erfahrung mit dem CMS Wordpress machen und habe damit auch schon unsere abteilungsinterne
                Bibliothek erweitern, indem ich den Passwortreseter und den Spamschutz implementierte.<br/>
                Meine momentanen Projekte sind ein VBA-Scribt, welches die Überstunden des gesamten Firmenkaders aus deren Excelfiles
                zusammenzählt und in eine Exceltabelle einträgt. Am zweiten Projekt arbeite ich schon ein wenig länger. Es handelt
                sich um ein System, welches mittels E-Paper Displays die nächsten 3 Termine des jeweiligen Sitzungszimmers anzeigt.
                Bei weiterem Interesse zu den Projekten, kann man über das Menü oder durch einen Klick <a href="./pages/projekte.php">hier</a> zur Seite wechseln.
            </p>
        </div>
    </body>
</html>