<!DOCTYPE html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>
    <?php
        if((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['genre']) && !empty($_POST['genre']))
        && (isset($_POST['duree']) && !empty($_POST['duree'])) && (isset($_POST['annee']) && !empty($_POST['annee'])))
        {
            $nom = str_secur($_POST['nom']);
            $genre = str_secur($_POST['genre']);
            $duree = str_secur($_POST['duree']);
            $annee = str_secur($_POST['annee']);
            $reponse = $db->query('SELECT nom FROM movies');
            $results = $reponse->fetchall();
            foreach ($results as $result) {
                if ($result['nom'] == $nom){
                    die ('Le film existe déjà');
                }
            }
            $req = $db->prepare('INSERT INTO movies (nom, genre, duree, anneeSortie) VALUES ("'.$nom.'", "'.$genre.'", ' .$duree.', '.$annee.')');
            $req->execute();
            echo 'Vos infos ont été ajoutés';
        }else{
            echo "Un champ n'est pas rempli";
    }
    ?>
    <?php include_once 'views/includes/footer.php'?>
</body>
</html>
