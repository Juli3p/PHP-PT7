<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Exercice 8</title>
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Exercice 8 - PHP</h1>
                    <h3>Partie 7</h3>
                    <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
                        existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
                    <a href="../index.php" class="btn btn-primary">Retour</a>
                </div>
            </div>

            <?php
             // On récupère le chemin du fichier avec le pathinfo()
                $path = pathinfo($_POST['file']);
                // On récupère le nom du fichier
                $filename = $path['filename'];
                // On récupère l'extension
            $extension = $path['extension'];
            //Si les varialbles sont renseigner, et qu'elle ne sont pas vide 
            if (empty($_POST['gender']) || empty($_POST['lastname']) || empty($_POST['firstname'])) {
                ?>
                <!--Sinon on affiche le formulaire-->
                <form method="POST" action="index.php">
                    <p>
                        <label>civilité
                            <select name="gender">
                                <option value="homme">Mr</option>
                                <option value="femme">Mmm</option>
                            </select>
                        </label>
                        <label>nom : <input type="text" name="lastname"></label>
                        <label>prénom : <input type="text" name="firstname"></label>
                        <input type="submit" value="valider"
                    </p>
                    <div>
                        <label>Document : </label>
                        <input type="file" name="file" />
                    </div>
                </form>
                <?php
            } elseif ($extension != 'pdf') {
            echo "Veuillez sélectionner un fichier au format .pdf svp !";
            } else { ?>
                <div>
                    <!--On affiche : -->
                    <p>Les données saisie sont :<b><?= $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] ?></b></p>
                    <P>Le document est :<?= $filename.' '.$extension?></p>
                    <p><a href="index.php">Retour</a></p>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
