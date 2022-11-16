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
    isset($_POST["dob"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) && 
        !empty($_POST["adresse"]) && 
        !empty($_POST["email"]) && 
        !empty($_POST["roleuser"]) &&
        !empty($_POST["typeuser"]) &&
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
        $userC->Ajouteruser($user);
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
        <button><a href="afficherListeuser.php">Retour a la liste des users</a></button>
        <hr>
        
        <div id="error">
            <?php ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
				<tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">Adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse" id="adresse">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email"> Email:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="roleuser">role user:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="roleuser" id="roleuser" >
                    </td>
                </tr>  
                
                <tr>
                    <td>
                        <label for="typeuser">type user:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="typeuser" id="typeuser" >
                    </td>
                </tr> 
                
                <tr>
                    <td>
                        <label for="dob">date of birthday:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob" >
                    </td>
                </tr>           
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>






