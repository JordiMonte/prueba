<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
        <tr>
            <td>AAAAA</td>
            <td>VVVVVV</td>
        </tr>
            <?php
                for ($i = 0; $i < count($datos); $i++) {
             ?>
                <tr>
                     <td><?php echo $datos[$i]["nombre"]; ?></td>
                     <td><?php echo $datos[$i]["precio"]; ?> €</td>
                </tr>
             <?php   
                }
            ?>
                </table>

</body>
</html>