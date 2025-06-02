<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <?php 
        $conn=new mysqli("localhost","root","","lista_contatos");
        if($conn->connect_error){
            die("Error :" .$conn->connect_error);
        }

        $sql="SELECT nome,numero FROM contato ORDER BY id DESC";
        $resultado=$conn->query($sql);

        if($resultado->num_rows > 0):?>
            <div class="box_contact_save">
                <h1>Contatos Salvos</h1>
                <?php  while ($row=$resultado->fetch_assoc()) :?>
                    <div class="field_contact_save">
                        <p><?=$row["nome"]?></p>
                    </div>
                <?php endwhile;?>
            </div>
        <?php else: ?>
            <p>Nenhum Número salvo</p>
        <?php endif;
    
    ?>
</body>
</html>