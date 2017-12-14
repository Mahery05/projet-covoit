<!DOCTYPE html>
<html>
  <head>
    <title>BDD COVOITURAGE</title>
  </head>

  <body>
    <?php
       ini_set('display_errors', 1); error_reporting(E_ALL); //repère les erreurs
       try {
       $dbh = new PDO('mysql:host=venus; dbname=todorico', "todorico", "12345678");

       $query = 'SELECT * FROM etudiant';
       
       $result_query = $db->query($query);

    foreach($dbh->query('SELECT * FROM etudiant') as $key => $row) {

    print_r($row);
    
    
    
    echo "<br/>";
    }
   
    $dbh = null;
    }catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    }
    ?>
  </body>
</html>

