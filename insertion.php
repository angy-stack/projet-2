<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>

<div class="container">
    <h2>Résultats de l'insertion</h2>

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

    $moyenne = ($_POST["note1"] + $_POST["note2"]) / 2;

    $sql = "INSERT INTO ReleveNote (nom, prenom, matiere, note1, note2, moyenne)
    VALUES ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["matiere"]."',".$_POST["note1"].",".$_POST["note2"].",".$moyenne.")";

    if ($conn->query($sql) === TRUE) {
      echo '<p class="alert alert-success">Nouvelle note ajoutée avec succès.</p>';
    } else {
      echo '<p class="alert alert-danger">Erreur: ' . $sql . '<br>' . $conn->error . '</p>';
    }

    $conn->close();
    ?>

</div>

</body>
</html>

