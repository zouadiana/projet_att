<?PHP
include "../core1/CommandeC.php";
$commande1C=new CommandeC();
$listecommandes=$commande1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>numcom</td>
<td>date</td>
<td>total</td>
<td>typepaie</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['numcom']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['total']; ?></td>
	<td><?PHP echo $row['typepaie']; ?></td>
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['numcom']; ?>" name="numcom">
	</form>
	</td>
	<td><a href="modifierCommande.php?numcom=<?PHP echo $row['numcom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


