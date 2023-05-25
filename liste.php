<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Liste</title>
    
</head>
<body>
<div class="container mt-3 titre">    
        <div class="row">
        <h1>Liste des étudiants inscrits</h1>
            <!-- <div class="col mt-3">
                <img src="images\logos.png" alt="" width=100% height=100%>
            </div>
            <div class="col mt-3">
                <h1>Liste des étudiants inscrits</h1> -->
            </div>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Genre</th>
                <th>Admission</th>
                <th>IC</th>
            </tr>
            <?php
            require'connexion.php';
            $requete = "SELECT * FROM ufr_sds";
            $query = mysqli_query($connexion, $requete);

            while($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["naissance"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["admission"] . "</td>";
                echo "<td>" . $row["ic"] . "</td>";
                echo "</tr>";
            }
            
            
            
            
            ?>
        </table>
    </div>

</body>
</html>