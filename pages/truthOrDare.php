<?php
    include_once("../php/head.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php
            print $headinfo;
        ?>
    </head>
    <body>
        <div class="center">
            <h1>Willkommen zu Wahrheit oder Pflicht</h1>
            <p>
                Vor dem Beginn, noch eine kleine Anleitung:<br/>
                <ol>
                    <li>Beginnen wird die älteste Person der Runde.</li>
                    <li>Der Spieler der dran ist wählt dann aus, ob sie Eine Wahrheit erzählt oder eine Pflicht vollfüllt und wählt den entsprechenden Button.</li>
                    <li>Die Person die dran war, wählt den nächsten Spieler aus.</li>
                    <li>Jeder Spieler hat drei Joker, welche an beliebigen Stellen eingesetzt werden können, um eine Wahrheit oder eine Pflicht zu überspringen.</li>
                </ol>
                Sowohl die fragen, als auch die Pflichten sind zufällig aus einem Pool ausgewählt. Seid also nachsichtig, wenn eine Frage, oder eine Pflicht doppelt vorhanden ist.
                Viel Spass beim Spielen!
            </p>
            <form method="post" action='<?php echo $_SERVER['PHP_SELF'] ?>'>
                <input class="btn btn-primary" type="submit" value="Wahrheit" name="Wahrheit">
                <input class="btn btn-info" type="submit" value="Pflicht" name="Pflicht">
            </form>

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=truthordare;charset=utf8", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                catch(PDOException $e)
                    {
                    echo "Connection failed: " . $e->getMessage();
                    }

                if(isset($_POST['Wahrheit'])){
                    $query = $conn->prepare("SELECT COUNT(Question) FROM questions");
                    $query->execute();
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    foreach($result as $key => $value){
                        $amountOfQuestion = $value;
                    }
                    $questionNumber = rand(1, $amountOfQuestion);
    
                    $query = $conn->query('SELECT Question From questions WHERE questionID = ' . $questionNumber);
                    $query ->execute();
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    foreach($result as $key => $value){
                        echo $value;
                    }
                }
                
                if(isset($_POST['Pflicht'])){
                    $query = $conn->prepare("SELECT COUNT(Pflicht) FROM dares");
                    $query->execute();
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    foreach($result as $key => $value){
                        $amountOfDares = $value;
                    }
                    $dareNumber = rand(1, $amountOfDares);
    
                    $query = $conn->query('SELECT Pflicht From dares WHERE DareID = ' . $dareNumber);
                    $query ->execute();
                    $result = $query->fetch(PDO::FETCH_ASSOC);
                    foreach($result as $key => $value){
                        echo $value;
                    }
                }
            ?>
        </div>
    </body>
</html>
