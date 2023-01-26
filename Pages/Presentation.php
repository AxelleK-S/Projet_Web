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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
if (empty($perform)){
    $html = "0";
    $css = "0";
    $js = "0";
    $php = "0";
    $mysql = "0";
} else {
    $html = $perform['html5'];
    $css = $perform['css3'];
    $js = $perform['javascript'];
    $php = $perform['php'];
    $mysql = $perform['mysql'];
}


require_once 'C:\xampp\htdocs\projet\vendor/autoload.php'; //we've assumed that the dompdf directory is in the same directory as your PHP file. If not, adjust your autoload.inc.php i.e. first line of code accordingly.

?>
<div class="portfolio" id="Portfolio">

<!-- nom et prenom -->
    <div class ="container" id="toolbar" style="background-image: linear-gradient(60deg, white, white);

                                color: Black;
                                font-family: sans-serif;
                                position: fixed;
                                left: 65px;
                                top: 0px;
                                z-index: 1000;
                                "
    >
    <a class="navbar-brand text-uppercase fw-bold" style="color: black">
    Portfolio_Maker
</a>

        <a class="btn btn-close-white px-2" href="#expertise" style="color :floralwhite;
                                            font-size: medium;
                                            padding-left: 65px;

                                             " >Mon expertise</a>
        <a class="btn btn-close-white" href="#projet" style="color :floralwhite;
                                            font-size: medium;
                                            padding-left: 65px;
                                            " >Mes projets</a>
        <a class="btn btn-close-white" href="#apropos" style="color :floralwhite;
                                            font-size: medium;
                                            padding-left: 65px;
                                             " >A propos</a>
        <a class="btn btn-close-white px-2" href="#contact" style="color :floralwhite;
                                            font-size: medium;
                                            padding-left: 260px;
                                            " >Contactez nous</a>
        <i class="bi-download px-2" href="#contact"  style="padding-left: 65px" type="button" onclick="window.print()">
                                            </i>
</div>

    <!--Informations personnelles-->
<div class="container pt-5">
    <div class="row">
        <div class="col-2">
            <i class="bi-person-circle" style="color: black;"></i>
            <?php echo($nom." ".$prenom); ?>
        </div>

        <div class="col-3">
            <i class="bi-phone" style="color: black;"></i>
            <span class="fw-normal mb-0"> Téléphone : 6 91 98 33 14</span>
        </div>

        <div class="col-3">
            <i class="bi-building" style="color: black;"></i>
            <span class="fw-normal mb-0"> Adresse : Bonaberi-Douala</span>
        </div>

        <div class="col-4">
            <i class="bi-envelope" style="color: black;"></i>
            <span class="fw-normal mb-0"> E-mail : axelle.kwamou@2026.ucac-icam.com</span>
        </div>
    </div>

</div>
<p></p>

<!--About Me-->
<div class="container">
    <div class="p-lg-2" style="background-image: linear-gradient(60deg, #8bdde8, #8be8d7)">
        <i class="bi-person-fill" style="color: black;"></i>
        <span class="fw-normal mb-0"> About Me</span>
    </div>
    <p class="pt-3">I'm a student in Ucac-Icam intitute loving ICT i want to become a DevOps and improve myself in different languages involves
    such as : HTML5, CSS3, JavaScript, PHP, MySQL
    <br>I also study how to use frameworks like Bootstrap, Lavarel, etc </p>
</div>

<!-- competences en developpement-->

<div class="container" id="expertise">
   <i class="bi-basket"></i> HTML5
<div class="progress mt-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($html).'%'?>" aria-valuenow="<?php echo($html)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>


    CSS3
<div class="progress mt-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($css).'%'?>" aria-valuenow="<?php echo($css)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>


    JAVASCRIPT
<div class="progress mt-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($js).'%'?>" aria-valuenow="<?php echo($js)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>

    PHP
<div class="progress mt-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($php).'%'?>" aria-valuenow="<?php echo($php)?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>


MYSQL
<div class="progress mt-3">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo($mysql)?>" aria-valuenow="<?php echo($mysql).'%'?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>

<!-- liste des projets -->
<div class="container mt-3">
    <div style="background-image: linear-gradient(60deg, #8bdde8, #8be8d7)">
        <i class="bi-person-fill" style="color: black;"></i>
        <span class="fw-normal mb-0"> My Project</span>
    </div>
    <div class="row mt-3" id="projet">

        <div class="col">
<div class="card">
    <img src="Images/work3.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 1</h5>
        <p class="card-text">Description</p>
    </div>
</div>
        </div>

          <div class="col">
<div class="card">
    <img src="Images/work2.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 2</h5>
        <p class="card-text">Description</p>
    </div>
</div>
        </div>

         <div class="col">
<div class="card" >
    <img src="Images/work.jpg" class="card-img-top" alt="Not Found">
    <div class="card-body">
        <h5 class="card-title">Projet 3</h5>
        <p class="card-text">Description</p>
    </div>
</div>
        </div>
    </div>

    <div class="row mt-3" id="projet">

        <div class="col">
            <div class="card">
                <img src="Images/img1.jpg" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Projet 1</h5>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="Images/img2.jpg" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Projet 2</h5>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" >
                <img src="Images/img3.jpg" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Projet 3</h5>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>

</div>
</div>

</div>
</div>

<div class="container mt-3" id="contact">
    <div class="row">
        <div class="col-5">
            <img src="Images/localisation.png">
        </div>

        <div class="col-7">
            <h1>Contactez nous</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                    <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

    </div>
</div>

<?php
ini_set("smtp_port","25");
if (isset($_POST['textarea'])) {
    $retour = mail('axelle.kwamou@2026.ucac-icam.com', 'Contact depuis le site portfolio', $_POST['textarea'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
}

?>

<div class="container py-5 h-100 mt-3" id="apropos" style="font-style: normal;
                                               font-family: Arial,serif;
                                               color: white;
                                               text-align: center;
                                               background-color: grey">
    <i class="bi-badge-cc-fill" style="color: black;"></i>
    axelle.kwamou@2026.ucac-icam.com, darul.kuitche@2023.ucac-icam.com

</div>

<script type="text/php" src="genPDF.php"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>