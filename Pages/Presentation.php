<?php
try{
$db = new PDO('mysql:host=localhost;dbname=portfolio','root','');
}
 
 catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale-1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@5.0.2/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Font Awesome -->
<script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <title>Presentation</title>
</head>
<body>

<?php
function Recuperation($db) {
// On récupère tout le contenu de la table connexion
$sqlQuery = 'SELECT * FROM Connexion where courriel= :nom';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute(array(
    'nom' => $_GET['email'],
));
    return $usersStatement->fetch();
};

function RecuperationPerform($db) {
// On récupère tout le contenu de la jointure de la table connexion et de la table performance
$sqlQuery = 'SELECT * FROM Connexion natural join performance where courriel= :nom';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute(array(
    'nom' => $_GET['email'],
));
    return $usersStatement->fetch();
};

function RecuperationProject($db) {
// On récupère tout le contenu de la jointure de la table connexion et de la table performance
$sqlQuery = 'SELECT * FROM Connexion natural join projet where courriel= :nom';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute(array(
    'nom' => $_GET['email'],
));
    return $usersStatement->fetchAll();
};

$users = Recuperation($db);
$perform = RecuperationPerform($db);
$project = RecuperationProject($db);

$nom= $users['nom'];
$prenom = $users['prenom'];
if (isset($perform)){
$html = $perform['html5'];
$css = $perform['css3'];
$js = $perform['javascript'];
$php = $perform['php'];
$mysql = $perform['mysql'];
} else {
$html = "0";
$css = "0";
$js = "0";
$php = "0";
$mysql = "0";
}
//echo $html;
?>

<!-- nom et prenom -->
<div class="container">
    <a class="navbar-brand text-uppercase fw-bold" href="">
    <?php echo($nom." ".$prenom); ?>
</a>
</div>

<div class="container">
    Mon expertise
</br> Mes compétences en développement
</div>
<p></p>

<!--Défilement-->
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">

<div id="carouselExampleIndicator" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/caroussel1.jpg" data-bs-interval="60" class="d-block w-100 h-100" alt="Error">
        </div>
        <div class="carousel-item">
            <img src="Images/caroussel2.png" data-bs-interval="60" class="d-block w-100 h-100" alt="Error">
        </div>
        <div class="carousel-item">
            <img src="Images/caroussel3.jpg"  data-bs-interval="60" class="d-block w-100 h-100" alt="Error">
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<p></p>
<!-- competences en developpement-->

<div class="container">
    HTML5
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?php echo($html).'%'?>" aria-valuenow="<?php echo($html)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p></p>

    CSS3
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?php echo($css).'%'?>" aria-valuenow="<?php echo($css)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p></p>

    JAVASCRIPT
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?php echo($js).'%'?>" aria-valuenow="<?php echo($js)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p></p>

    PHP
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?php echo($php).'%'?>" aria-valuenow="<?php echo($php)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p></p>

MYSQL
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: <?php echo($mysql)?>" aria-valuenow="<?php echo($mysql).'%'?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p></p>

</div>

<!-- liste des projets -->
<div class="container">
    <div class="row">

        <div class="col">
<div class="card">
    <img src="Images/work3.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 1</h5>
        <p class="card-text">Description</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
        </div>

          <div class="col">
<div class="card">
    <img src="Images/work2.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 2</h5>
        <p class="card-text">Description</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
        </div>

         <div class="col">
<div class="card">
    <img src="Images/work.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 3</h5>
        <p class="card-text">Description</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
        </div>



    </div>
</div>
<p></p>

<div class="container">
    <div class="row">
        <div class="col">
    <footer> <a href="ensavoirplus.html" class="btn btn-secondary">En Savoir Plus</a> </footer>
        </div>

        <div class="col">
            <footer><a href="contacteznous.html" class="btn btn-secondary">Contactez-nous</a> </footer>
        </div>

</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="file.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>