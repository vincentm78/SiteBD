<img src="images/Bienvenue.jpg" width="100%" height="100%">
<?php 
require 'entete.html';
include 'navbar.html';
include "db/connect.php";
?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Concevoir un site web pour apprendre ...</h2>
      <h5></h5>
      <img class="img-fluid" src="images\logoBootstrap.png">
            
      <p> HTML CSS Bootstrap et PHP...</p>
      <h3>Liens utiles</h3>
      <p>à consulter pour vous aider</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://www.w3schools.com/bootstrap4">La référence Bootstrap4</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="https://www.grafikart.fr/formation">Tutos Grafikart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="https://www.jquery-az.com/6-templates-bootstrap-4-cards-online-examples/">Exemple de cards</a>
        </li>
       
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
    <article>
      <?php
      $sql = "SELECT * FROM album A inner join genre G on G.num = A.numGenre ORDER BY titre";
        try {
          $resultat = $cnx->query($sql);
          $tabloresultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
          foreach ($tabloresultat as $ligne) {
            echo "<p><h2>".$ligne["titre"]."</h2";
            echo "</br><h3>Tome : ".$ligne["tome"]."</h3>";
            echo "</br><h2>".$ligne["scénariste"]." - ".$ligne["dessinateur"]."</h2>";
            echo "</br><img src ='".$ligne["image"]."' width = 300>";
            echo "</br>".$ligne["resume"];
            echo "</br>Parution : ".$ligne["parution"];
            echo "</br>Genre : ".$ligne["libelle"];
            echo "</br>Editions : ".$ligne["editeur"];
            echo "</br>Collection : ".$ligne["collection"]."</p>";
          }
        } catch (PDOException $e){
          echo "ERREUR PDO ".$e->getMessage();
          
        }
      ?>
    </article>
        
 </div>
</div>
</section>
<?php require 'piedDePage.html';?>
 
</body>
</html>


