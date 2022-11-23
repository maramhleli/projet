<?php
include '../controller/avis_offresC.php';
$avis_offresC = new avis_offresC();
$list = $avis_offresC->listavis_offres();
?>
<html>

<head></head>

<body>

    
       <center> <h1>gestion des avis </h1></center>
   <center> <table border=3></center>
        <tr>
           
            <th>nom</th>
            <th>email</th>
            <th>message</th>
            <th>update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $avis_offres) {
        ?>
            <tr>
                <td><?= $avis_offres['nom']; ?></td>
                <td><?= $avis_offres['email']; ?></td>
                <td><?= $avis_offres['message']; ?></td>
               
                <td>
                    <form method="POST" action="updateavis_offres.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $avis_offres['id_avis']; ?> name="id_avis">
                    </form>
                </td>
                <td>
                    <a href="deleteavis_offres.php?id_avis=<?php echo $avis_offres['id_avis']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>