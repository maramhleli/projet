<?php
	include '../Controller/userC.php';


	$userC=new userC();
	$listeuser=$userC->afficherUser(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="Ajouteruser.php">Ajouter User</a></button>
		<center><h1>Liste des users</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_user</th>
				<th>nom</th>
				<th>prenom</th>
				<th>adresse</th>
				<th>email</th>
				<th>roleuser</th>
				<th>typeuser</th>
				<th>dob</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeuser as $user){
			?>
	
			<tr>
				<td><?php echo $user['id_user']; ?></td>
				<td><?php echo $user['nom']; ?></td>
				<td><?php echo $user['prenom']; ?></td>
				<td><?php echo $user['adresse']; ?></td>
				<td><?php echo $user['Email']; ?></td>
				<td><?php echo $user['roleuser']; ?></td>
				<td><?php echo $user['typeuser']; ?></td>
				<td><?php echo $user['dob']; ?></td>
				<td>
					<form method="GET" action="Modifieruser.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?php echo $user['id_user']; ?> name="id_user">
					</form>
				</td>
				<td>
					<a href="Supprimeruser.php?id_user=<?php echo $user['id_user']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
