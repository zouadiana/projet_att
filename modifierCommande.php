<HTML>
<head>
</head>
<body>
<?PHP
include "../entities1/Commande.php";
include "../core1/CommandeC.php";
if (isset($_GET['numcom'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererCommande($_GET['numcom']);
	foreach($result as $row){
		$numcom=$row['numcom'];
		$date=$row['date'];
		$total=$row['total'];
		$typepaie=$row['typepaie'];
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>numcom</td>
<td><input type="number" name="numcom" value="<?PHP echo $numcom ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>total</td>
<td><input type="number" name="total" value="<?PHP echo $total ?>"></td>
</tr>
<tr>
<td>typepaie</td>
<td><input type="text" name="typepaie" value="<?PHP echo $typepaie ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="numcom_ini" value="<?PHP echo $_GET['numcom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['numcom'],$_POST['date'],$_POST['total'],$_POST['typepaie']);
	$commandeC->modifierCommande($commande,$_POST['numcom_ini']);
	echo $_POST['numcom_ini'];
	header('Location: afficherCommande.php');
}
?>
</body>
</HTMl>