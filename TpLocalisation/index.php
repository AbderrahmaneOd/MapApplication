<!DOCTYPE html>
<?php
include_once './racine.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form method="GET" action="controller/addPosition.php">
        <fieldset>
            <legend>Ajouter un nouveau étudiant</legend>
            <table border="0">
                <tr>
                    <td>Latitude : </td>
                    <td><input type="text" name="latitude" value="" /></td>
                </tr>
                <tr>
                    <td>Logitude :</td>
                    <td><input type="text" name="longitude" value="" /></td>
                </tr>
                <tr>
                    <td>Date :</td>
                    <td><input type="date" name="date" value="" /></td>
                </tr>
                <tr>
                    <td>IMEI :</td>
                    <td><input type="text" name="imei" value="" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer" />
                        <input type="reset" value="Effacer" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Latitude</th>
                <th>Logitude</th>
                <th>DATE</th>
                <th>IMEI</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once RACINE . '/service/PositionService.php';
            $es = new PositionService();
            foreach ($es->getAll() as $e) {
            ?>
                <tr>
                    <td><?php echo $e->getId(); ?></td>
                    <td><?php echo $e->getLatitude(); ?></td>
                    <td><?php echo $e->getLongitude(); ?></td>
                    <td><?php echo $e->getDate(); ?></td>
                    <td><?php echo $e->getImei(); ?></td>
                    <td>
                        <a href="controller/deletePosition.php?id=
<?php echo $e->getId(); ?>">Supprimer</a>
                    </td>
                    <td><a href="">Modifier</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>