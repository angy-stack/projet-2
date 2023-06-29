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

// Requête pour obtenir tous les étudiants
$sql = "SELECT DISTINCT nom, prenom FROM ReleveNote ORDER BY nom, prenom";

$result = $conn->query($sql);

// Lien CSS et Bootstrap 
echo '<!DOCTYPE html>
<html>
<head>
<title>Relevé de notes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<center> 
<h2>releve de notes</h2>
 </center>';

if ($result->num_rows > 0) {
    // données de sortie de chaque élève
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['nom'] . " " . $row['prenom'] . "</h2>";
        
        // Requête pour obtenir toutes les notes de l'étudiant
        $sql_grades = "SELECT matiere, note1, note2, moyenne FROM ReleveNote WHERE nom = '".$row["nom"]."' AND prenom = '".$row["prenom"]."'";
        $result_grades = $conn->query($sql_grades);
        
        echo "<table class='table table-striped'>
        <thead>
        <tr>
        <th>Matière</th>
        <th>Note 1</th>
        <th>Note 2</th>
        <th>Moyenne</th>
        </tr>
        </thead>
        <tbody>";
        
        if ($result_grades->num_rows > 0) {
            // données de sortie de chaque ligne
            while($row_grades = $result_grades->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row_grades['matiere'] . "</td>";
                echo "<td>" . $row_grades['note1'] . "</td>";
                echo "<td>" . $row_grades['note2'] . "</td>";
                echo "<td>" . $row_grades['moyenne'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Pas de notes pour cet étudiant.</td></tr>";
        }
        
        echo "</tbody></table>";
    }
} else {
    echo "<p>Pas d'étudiants.</p>";
}

echo '</div></body></html>';

$conn->close();
?>
