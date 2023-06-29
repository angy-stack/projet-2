<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>

<div class="container">
    <h2>Résultats de la recherche</h2>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EtudiantDB";

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM ReleveNote WHERE nom = '".$nom."' AND prenom = '".$prenom."'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<table class="table">';
      echo '<thead><tr><th>Nom</th><th>Prénom</th><th>Matière</th><th>Note 1</th><th>Note 2</th><th>Moyenne</th></tr></thead>';
      echo '<tbody>';
      // données de sortie de chaque ligne
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nom"]. "</td><td>" . $row["prenom"]. "</td><td>" . $row["matiere"]. "</td><td>" . $row["note1"]. "</td><td>" . $row["note2"]. "</td><td>" . $row["moyenne"]. "</td>";
        echo "</tr>";
      }
      echo '</tbody>';
      echo '</table>';
    } else {
      echo '<p class="alert alert-warning">Aucun résultat trouvé.</p>';
    }
    $conn->close();
    ?>

</div>

</body>
</html>

