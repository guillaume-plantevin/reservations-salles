<?php
    /*
        Une page d’accueil qui présente votre site (index.php)
    */
    $title = 'Accueil';
?>

<!DOCTYPE html>
<html lang="fr">
<?php require_once('templates/head.php') ?>
<body class="container">
    <?php require_once('templates/header.php') ?>
    <main>
        <h1>Le Laptop & Breakfast</h1>
        <p>Notre espace de co-working propose à toute personne inscrite de faire une réservation de notre salle de conférence.</p>
        <p>Vous pourrez une fois <a href="inscription.php">inscrit</a>, faire votre réservation dans le formulaire prévu à cet effet, ainsi que consulter le planning pour pouvoir voir les disponibilités.</p>
    </main>
    <?php require_once('templates/footer.php') ?>
</body>
</html>