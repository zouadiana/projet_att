<?PHP
include "../entities1/commande.php";
include "../core1/commandeC.php";
$commande=new commande(12345,75757575,123698,'jhbj');
$commandeC=new commandeC();
$commandeC->affichercommande($commande);
echo "****************";
echo "<br>";
echo "numcom:".$commande->getNumcom();
echo "<br>";
echo "date:".$commande->getDate();
echo "<br>";
echo "total:".$commande->getTotal();
echo "<br>";
echo "typepaie:".$panier->getTypepaie();
echo "<br>";

?>