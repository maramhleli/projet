<?php

include '../controller/avis_offresC.php';

$error = "";

// create client
$avis_offres = null;

// create an instance of the controller
$avis_offresC = new avis_offresC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["message"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["message"]) 
        
    ) {
        $avis_offres = new avis_offres(
            $_POST['nom'],
            $_POST['email'],
            $_POST['message']
            
        );
        $avis_offresC->updateavis_offres($avis_offres, $_POST["id_avis"]);
        header('Location:Listavis_offres.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update avis</title>
</head>

<body>
    <button><a href="Listavis_offres.php">Back to list</a></button>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_avis'])) {
        $avis_offres = $avis_offresC->showavis_offres($_POST['id_avis']);
    }
    ?>

        <form action="addavis_offres.php" method="POST">
            <table>
            <tr>
                    <td>
                        <label for="id_avis">id_avis:
                        </label>
                    </td>
                    <td><input  name="id_avis" id="id_avis" value="<?php echo $avis_offres['id_avis']; ?>"readonly></td>
                </tr>
            
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $avis_offres['nom']; ?>" maxlength="20"></td>
                </tr>
            

                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $avis_offres['email']; ?>" id="email">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="message">message:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="message" value="<?php echo $avis_offres['message']; ?>" id="message">
                    </td>
                </tr>
            
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
   
</body>

</html>