<?php 
//ajout des variables path
include_once $_SERVER['DOCUMENT_ROOT'] . '/Projet-covoit/bdd/include/path.php';
//$menu_nom = 'truite';
?>
<select name="menu" onChange="location.href=''+this.options[this.selectedIndex].value;">
          <option>
          Mon compte
          </option>

          <option <?php echo 'value="' . $controler_http . 'reservation.php' . '"';?>>
          Reservations
          </option>

          <option <?php echo 'value="' . $controler_http . 'trajetMembre.php' . '"';?>>
          Trajets publiées
          </option>

          <?php if(isset($_SESSION['admin']) && $_SESSION['admin']) : ?>

          <option <?php echo 'value="' . $controler_http . 'trajetType.php' . '"';?>>
          Trajets type
          </option>

          <option <?php echo 'value="' . $controler_http . 'gererCompte.php' . '"';?>>
          Gerer les comptes
          </option>

          <option <?php echo 'value="' . $controler_http . 'statistique.php' . '"';?>>
          Statistiques
          </option>

          <?php endif; ?>

          <option <?php echo 'value="' . $controler_http . 'deconnexion.php' . '"';?>>
          Se déconnecter
          </option>  
</select>