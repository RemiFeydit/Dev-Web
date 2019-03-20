<!DOCTYPE html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>
<div id='results'>
<?php

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
        $req = $db->prepare('SELECT * FROM movies WHERE genre ='."$genre");
        $req->execute(array($_POST["genre"]));
        $results = $req->fetchAll();        

    }else{
        die('pas ouf');
    }

    

    foreach ($results as $result) {
        echo $result['nom'] . "<br>" ;
}?>
</div>
    <?php include_once 'views/includes/footer.php'?>
</body>
</html>