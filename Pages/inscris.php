<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<?php
//connexion à la BD
try{

$db = new PDO('mysql:host=localhost;dbname=portfolio','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
echo "connexion reussie";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
};

function AjUser ($a,$b,$c,$d,$db) {

// Ecriture de la requête
$sqlQuery = 'INSERT INTO Connexion(nom, prenom, courriel, motDePasse) VALUES (:nom, :prenom, :courriel, :motDePasse)';

// Préparation
$insertUser = $db->prepare($sqlQuery);
// Exécution ! L'utilisateur en base de données
$insertUser->execute(array(
    'nom' => $a,
    'prenom' => $b,
    'courriel' => $c,
    'motDePasse' => $d,
));
};

function SelectLastId ($db) {

$sqlQuery = 'SELECT * FROM Connexion ORDER BY login_id DESC LIMIT 1';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetch();
return $users['login_id'];
};

function AjPerform ($a,$b,$c,$d,$e,$f,$db) {

// Ecriture de la requête
$sqlQuery = 'INSERT INTO Performance(html5, css3, javascript, php, mysql, login_id) VALUES (:html5, :css3, :javascript, :php, :mysql, :login_id)';

// Préparation
$insertUser = $db->prepare($sqlQuery);

// Exécution ! L'utilisateur en base de données
$insertUser->execute(array(
    'html5' => $a,
    'css3' => $b,
    'javascript' => $c,
    'php' => $d,
    'mysql' => $e,
    'login_id'=>  $f,
));
};

function AjProject ($a,$b,$c,$db) {

// Ecriture de la requête
$sqlQuery = 'INSERT INTO Projet(nom, Descriptif, login_id) VALUES (:nom, :Descriptif, :login_id)';

// Préparation
$insertUser = $db->prepare($sqlQuery);
// Exécution ! L'utilisateur en base de données
$insertUser->execute(array(
    'nom' => $a,
    'Descriptif' => $b,
    'login_id' => $c,
));
};


//recuperer dernier login_id
$id= SelectLastId($db);
echo "l'id est".$id ;
echo $_POST['Email'];
//ajouter l'utilisateur
AjUser($_POST['Name1'],$_POST['Name2'],$_POST['Email'],$_POST['Password'],$db);

//ajouter les performances
AjPerform($_POST['html'],$_POST['css'],$_POST['javas'],$_POST['php'],$_POST['sql'],$id,$db);

//vérifier s'il y a les projets et ajouter

if ($_POST['projet']=="oui"){
    AjProject("Projet1",$_POST['Projet1'],$id,$db);
    AjProject("Projet2",$_POST['Projet2'],$id,$db);
    AjProject("Projet3",$_POST['Projet3'],$id,$db);
}


/*
switch ($_POST['projet']){
case oui :
AjProject("Projet",$__POST['Projet1']);
AjProject("Projet",$__POST['Projet2']);
AjProject("Projet",$__POST['Projet3']);
break;
case non:
break;
}*/



//alert("connexion reussie")

?>
<!-- Accès à la page présentation    -->
<script> alert("Inscription reussie")</script>
<meta http-equiv="refresh" content="1;presentation.php?email=<?php echo($_POST['Email'])?>">
</html>