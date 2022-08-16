<?php 
// session start
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "includes/head.php"
    ?>
</head>
<!-- includes -->
<body class="bg-secondary">
<section>
    <?php include "includes/header.php" ; ?>
</section>
<section class='container'>
    <div class="row">
    <div class="col-3"><a style="width : 250px" class= "btn btn-dark btn-sm" href="index.php?" role="button"> Home </a>

<?php
// POST coté gauche
    if (isset($_SESSION['Table'])){
        include 'includes/ul.php';
    }
?>
</div>
<div class="col-9"><a class="btn btn-dark btn-sm" href="index.php?form" role="button">Ajouter des données</a>
<?php
    // POST côté droit
 if (isset($_GET['form'])){
       include 'includes/form.php';
    };
    
    if (isset($_POST['submit'])){
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['age']) && !empty($_POST['age']) && isset($_POST['taille']) && !empty($_POST['taille']) && isset($_POST['type']) && !empty($_POST['type'])) {
            $_SESSION['Table']=[
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'age' => $_POST['age'],
                'taille' => $_POST['taille'],
                'classe' => $_POST['type']
            ];
            echo '<div class="alert alert-success" role="alert"><strong> Les Données ont bien été enregistrées.</div>';
            // var_dump($_SESSION['Table']);
}   
    }
    // Message d'erreur
    if (isset($_POST['submit'])){
        if (empty($_POST['prenom'])){
            echo '<label for="">Prenom</label>
            <input type="text" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              T\'es qui ?
            </div>';
        }
        if (empty($_POST['nom'])){
            echo '<label for="">Nom</label>
            <input type="text" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              T\'es qui ?
            </div>';
        }
        if (empty($_POST['age'])){
            echo '<label for="">Age</label>
            <input type="number" min="10" max="60" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
              Quel âge as-tu ?
            </div>';
        }
        if (empty($_POST['taille'])){
            echo '<label for="">Taille</label>
            <input type="number" min="1.60" max="2" class="form-control bg-dark text-white is-invalid" id="validation1" aria-describedby="" required>
            <div id="validation1" class="invalid-feedback">
            Taille ?
            </div>';
        }
        if (empty($_POST['type'])){
            echo '  <div class="form-check">
            <input class="form-check-input is-invalid" type="radio" name="type" id="apprenants" value="apprenant">
            <label class="form-check-label" for="apprenants">
              Apprenants
            </label>
          </div>
          
          <div class="form-check">
            <input class="form-check-input is-invalid" type="radio" name="type" id="formateur" value="formateur">
            <label class="form-check-label" for="formateur">
              Formateur
            </label>
            <div  id="invalidCheck3Feedback" class="invalid-feedback">
            Qu\'est-tu ?.
          </div>
          </div>';
        }
        
        echo '<button type="submit" class="btn btn-dark text-align-right" name="submit" >Enregistre les Données</button>';
    }
    
// DEBOGAGE
    if (isset($_SESSION['Table'])){

    if (isset($_GET['debogage'])){
        echo '<br>';
        print_r($_SESSION['Table']);

// CONCATENATION
    }   if (isset($_GET['concatenation'])){
        $nom = $_SESSION['Table']['nom'];
        $prenom = $_SESSION['Table']['prenom'];
        $age = $_SESSION['Table']['age'];
        $taille = $_SESSION['Table']['taille'];
        $classe = $_SESSION['Table']['classe'];
        echo '<br>';
        echo "$prenom $nom";
        echo '<br>' ;
        echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
        echo '<br>';
        echo strtoupper($prenom ) . ' ';
        echo strtoupper($nom);
        echo '<br>';
        echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
        echo '<br>';
        echo strtoupper($prenom ) . ' ';
        echo strtoupper($nom);
        echo '<br>';
        echo str_replace(".",",","j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI");

// BOUCLE
    }   if (isset($_GET['boucle'])){
        $nom = $_SESSION['Table']['nom'];
        $prenom = $_SESSION['Table']['prenom'];
        $age = $_SESSION['Table']['age'];
        $taille = $_SESSION['Table']['taille'];
        $classe = $_SESSION['Table']['classe'];

        $k = 0;
        while ($k < 10) {
            echo '<br>' . "$prenom $nom" . '<br>' . "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
            $k++;
        };

// FONCTION
    }   if (isset($_GET['fonction'])){
        foreach($_SESSION['Table'] as $clef => $valeur){
            echo " <br> Cette ligne correspond à la clé $clef et contient $valeur. <br> ";
        }

// ULTI DE VEIGAR
    }   if (isset($_GET['supprimer'])){
        session_destroy();
    }
};
?>
</div>


</div>
</section>
</body>
<footer>
    <?php
    include "includes/footer.php" ;
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>