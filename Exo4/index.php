<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h3>Partie 6</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
        existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
      <form method="POST" name="Information" action="user.php">
          <input type="text" name="lastname" placeholder="Nom"/>
                 <input type="text" name="firstname" placeholder="Prénom"/>
                 <input type="submit" value="Valider"/>
      </form>
  </div>
</body>
</html>
