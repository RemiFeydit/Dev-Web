<!DOCTYPE html>
<html>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>
<body>
    <?php include_once 'views/includes/header.php'?>
    <table>
    <?php
    $reponse = $db->query('SELECT nom FROM movies;');
    $results = $reponse->fetchall();
    foreach ($results as $result) {
        echo "<tr><th>" . $result['nom'] . "</th></tr>" ;
    }
    ?>
    </table>
    <footer>
        <?php include_once 'views/includes/footer.php'?>
    </footer>
</body>
</html>