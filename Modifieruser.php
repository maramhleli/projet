<?php
    include_once '../Model/user.php';
    include_once '../Controller/userC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new userC();
    if (
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["roleuser"] )&&
        isset($_POST["typeuser"] )&&
        isset($_POST["dob"] )) {
        if (
			!empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) && 
			!empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["roleuser"])&&
            !empty($_POST["typeuser"])&&
            !empty($_POST["dob"])

        ) {
            $user = new user(
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['adresse'],
                $_POST['email'],
                $_POST['roleuser'],
                $_POST['typeuser'],
                $_POST['dob'],
            );
            $userC->modifierUser($user, $_GET["id_user"]);
            header('Location:AfficheListeuser.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="AfficheListeuser.php">Retour à la liste des users</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET['id_user'])){
				$user = $userC->recupererUser($_GET['id_user']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
               
				<tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $user['nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse" value="<?php echo $user['adresse']; ?>" id="adresse">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email :
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="roleuser">Role User:
                        </label>
                    </td>
                    <td>
                        <input type="roleuser" name="roleuser" id="roleuser" value="<?php echo $user['roleuser']; ?>">
                    </td>
                </tr>  
                
                <tr>
                    <td>
                        <label for="typeuser">Type User:
                        </label>
                    </td>
                    <td>
                        <input type="typeuser" name="typeuser" id="typeuser" value="<?php echo $user['typeuser']; ?>">

                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="dob">Date de naissance de User:
                        </label>
                    </td>
                    <td>
                        <input type="dob" name="dob" id="dob" value="<?php echo $user['dob']; ?>">
                    </td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>