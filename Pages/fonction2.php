<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


function AjUser (a,b,c,d) {

// Ecriture de la requête
$sqlQuery = 'INSERT INTO Connexion(nom, prenom, courriel, motDePasse) VALUES (:nom, :prenom, :courriel, :motDePasse)';

// Préparation
$insertUser = $mysqlClient->prepare($sqlQuery);

// Exécution ! L'utilisateur en base de données
$insertUser->execute([
    'nom' => $a,
    'prenom' => $b,
    'courriel' => $c,
    'motDePasse' => $d,
]);

};

//Fonction pour verifier si le compte existe (connexion)

//Fonction qui recupere les données dans la base de données pour produire la page de présentation correspondante

function Recup(a) {


// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM Connexion where courriel='.$a.'';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

}

?>

//appel
<?php recup();
    echo $users['nom'].' '.$users['prenom']
    ?>

//appel2
<?php include(fonction.php) ;
AjUser($_POST['Name1'],$_POST['Name2'],$_POST['Email'],$_POST['Password']);
?>

try
{
	$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


//connexion à la BD
<?php
try{
$db = new PDO('mysql:host=localhost;dbname=portfolio','root','');
}

 catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
};

function AjUser ($a,$b,$c,$d) {

// Ecriture de la requête
$sqlQuery = 'INSERT INTO Connexion(nom, prenom, courriel, motDePasse) VALUES (:nom, :prenom, :courriel, :motDePasse)';

// Préparation
$insertUser = $mysqlClient->prepare($sqlQuery);

// Exécution ! L'utilisateur en base de données
$insertUser->execute(array(
    'nom' => $a,
    'prenom' => $b,
    'courriel' => $c,
    'motDePasse' => $d,
)
);

};
?>