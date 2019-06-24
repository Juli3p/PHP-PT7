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
        <h1 class="display-3">Exercice 6 - PHP</h1>
        <h3>Partie 7</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
        existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
   
      <?php
      //Si les varialbles sont renseigner, et qu'elle ne sont pas vide 
      if(isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname'])
              && $_POST['gender']!='' && $_POST['lastname']!='' && $_POST['firstname']!=''){
      ?>
      <div>
       <!--On affiche : -->
          <p>Les données saisie sont :<b><?= $_POST['gender'].' '.$_POST['firstname'].' '.$_POST['lastname']?></b></p>
          <p><a href="index.php">Retour</a></p>
      </div>
      <?php 
      }else{
          // Sinon on affiche le formulaire
      ?>
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
          </p></form>
      <?php 
      }
      ?>
  </div>
</body>
</html>
