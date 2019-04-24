<?PHP
include "../core1/CommandeC.php";
$commandeC=new commandeC();
if (isset($_POST["numcom"])){
	$commandeC->supprimerCommande($_POST["numcom"]);
	header('Location: afficherCommande.php');
}

?>