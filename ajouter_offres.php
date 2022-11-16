<HTML>
    <head>
    </head>

    <body>
    <h1>ajouter un offres</h1>
    <form>
        <table>
            <tr>
                <td>code_promo</td>
                <td><input type="number" name="code_promo" id="code_promo"></td>
            </tr>

            <tr>
                <td>Nom</td>
                <td><input type="text" name="Nom" id="Nom"></td>
            </tr>

            <tr>
                <td>Prenom</td>
                <td><input type="text" name="prenom" id="prenom"></td>
            </tr>

            <tr>
                <td>Prix</td>
                <td><input type="number" name="Prix" id="Prix"></td>
            </tr>

            <tr>
                <td>email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>

           
        </table>
    </form>
    </body>
</HTML>

<?PHP
if (isset($_GET['ajouter']))
{
    include "../controller/offre1.php";
    include "../model/offres2.php";
            
    $offres= new offres($_GET['code_promo'],$_GET['Nom'],$_GET['prenom'],$_GET['Prix'],$_GET['email'],$_GET['plats'],$_GET['remise']);
    $offres=new offres();
    $offres->ajouteroffres($offres);
    
    header('Location: afficheroffres.php');

}

?>