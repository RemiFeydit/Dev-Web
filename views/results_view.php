<!DOCTYPE html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>
<section class="search">
<table>
    <tr>
    <?php
        $noValue = false;
        if(isset($_POST['annee']) && !empty($_POST['annee']))
        {
            
            $annee = str_secur($_POST['annee']);
            $req = $db->prepare('SELECT * FROM movies WHERE anneeSortie = '.$annee);
            $req->execute(array($_POST["annee"]));
            $results = $req->fetchAll();

        }else if(isset($_POST['duree']) && !empty($_POST['duree'])){

            
            $duree = str_secur($_POST['duree']);
            $req = $db->prepare('SELECT * FROM movies WHERE duree < '.$duree);
            $req->execute(array($_POST["duree"]));
            $results = $req->fetchAll();

        }else if(isset($_POST['genre']) && !empty($_POST['genre'])){


            $genre = str_secur($_POST['genre']);
            $req = $db->prepare('SELECT * FROM movies WHERE genre = "'.$genre.'"');
            $req->execute(array($_POST["genre"]));
            $results = $req->fetchAll();        

        }else{
            echo('<h2>Veuillez rentrer des valeurs</h2>');
            echo "<form><input type='button' value='Retour' onClick='history.back()'></form>";
            $noValue = true;
        }
        if ($noValue == false){
            foreach ($results as $result) {
            echo "<tr><th>" . $result['nom'] . "</th></tr>" ;
            }
        }
    ?>
    </tr>
</table>
    </section>
    <footer>
        <?php include_once 'views/includes/footer.php'?>
    </footer>
</body>
</html>