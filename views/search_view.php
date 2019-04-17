<!doctype html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>

<body>
    <?php include_once 'views/includes/header.php'?>
    
    <div class='search'>
    <h3> Recherche film : </h3>
        Recherche par année : 
            <form action="?page=results" method="post">
            <p>
                <input type="str" name="annee" />
                <input type="submit" value="Valider" />
            </p>
            </form>
        Recherche par genre : 
            <form action="?page=results" method="post">
            <p>
                <input type="str" name="genre" />
                <input type="submit" value="Valider" />
            </p>
            </form>
        Recherche par durée inférieur à (en min):
            <form action="?page=results" method="post">
            <p>
                <input type="str" name="duree" />
                <input type="submit" value="Valider" />
            </p>
            </form>
</div>
    <?php include_once 'views/includes/footer.php'?>

</body>
</html>
