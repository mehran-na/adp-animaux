<?php include 'header.php' ?>

<div class = "page">
    <div id = "server-reponse">
        <ul>
            <table class = "center">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Race</th>
                    <th>Age</th>
                    <th>Description</th>
                    <th>Courriel</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td><?php echo $_GET[0] ?></td>
                    <td><?php echo $_GET[1] ?></td>
                    <td><?php echo $_GET[2] ?></td>
                    <td><?php echo $_GET[3] ?></td>
                    <td><?php echo $_GET[4] ?></td>
                    <td><?php echo $_GET[5] ?></td>
                    <td><a href = "mailto:"<?php echo $_GET[6] ?>><?php echo $_GET[6] ?></a></td>
                    <td><?php echo $_GET[7] ?></td>
                    <td><?php echo $_GET[8] ?></td>
                    <td><?php echo $_GET[9] ?></td>
                </tr>
            </table>
        </ul>
    </div>
</div>

<?php include 'footer.php'?>