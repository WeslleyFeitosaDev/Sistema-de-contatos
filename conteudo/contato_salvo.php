<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <h1>Contatos salvos</h1>

    <?php 
        $conn=new mysqli("localhost","root","","lista_contatos");
        if($conn->connect_error){
            die("Error :" .$conn->connect_error);
        }

        $sql="SELECT nome,numero FROM contato ORDER BY id DESC";
        $resultado=$conn->query($sql);

        if($resultado->num_rows > 0):?>
            <table>
                <tr>
                    <th>nome</th>
                    <th>numero</th>
                </tr>
                <?php  while($rom = $resultado->fetch_assoc()):?>
                    <tr>
                        <td><?= htmlspecialchars($rom["nome"])?></td>
                        <td><?= htmlspecialchars($rom["numero"])?></td>
                    </tr>
                <?php endwhile;?>
            </table>
        <?php else: ?>
            <p>Nenhum contato salvo</p>
        <?php endif;

        $conn->close();
    
    ?>
</body>
</html>