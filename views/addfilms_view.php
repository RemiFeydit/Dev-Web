<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>

<body>
    <?php include_once 'views/includes/header.php'?>
    <div id='test'>
        <h2>Ajout de film : </h2>
            <form action= "?page=results2" method="post">
            <p>
                Nom film :
                <input type="str" name="nom" placeholder="Nom"/>
                Genre du film :
                <input type="str" name="genre" placeholder="Genre">
                Durée du film (en min) :
                <input type="str" name="duree" placeholder="Durée (en min)">
                Année de la sortie du film :
                <input type="str" name="annee" placeholder="Année sortie (en YYYY)">
                <input type="submit" value="Valider" />
            </p>
            </form>
</div>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
