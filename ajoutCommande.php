<?PHP
include "../entities1/Commande.php";
include "../core1/CommandeC.php";


if (isset($_POST['numcom']) && isset($_POST['date']) && isset($_POST['total']) && isset($_POST['typepaie'])){
$commande1=new commande($_POST['numcom'],$_POST['date'],$_POST['total'],$_POST['typepaie'] );
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new CommandeC();
$commande1C->ajoutCommande($commande1);
header('Location: afficherCommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>