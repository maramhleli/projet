<?PHP
include "../controller/offre1.php";
$offres=new offres();
$listeoffres=$offres->afficheroffres();


?>
<table border="1">
<tr>
<td>code_promo</td>
<td>Nom</td>
<td>prenom</td>
<td>Prix</td>
<td>email</td>
<td>plats</td>
<td>remise</td>

</tr>

<?PHP
foreach($listeoffres as $row){
	?>
	<tr>
	<td><?PHP echo $row['code_promo']; ?></td>
	<td><?PHP echo $row['Nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['Prix']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['plats']; ?></td>
	<td><?PHP echo $row['remise']; ?></td>
	
	<td><form method="POST" action="supprimerpanier.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['code_promo']; ?>" name="code_promo">
	</form>
	</td>
	</tr>
	<?PHP
}
?>
</table>


