<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
</head>
<body>

    <?php 
        $conn=new mysqli("localhost","root","","lista_contatos");
        if($conn->connect_error){
            die("Error :" .$conn->connect_error);
        }

        $sql="SELECT id,nome,numero FROM contato ORDER BY id DESC";
        $resultado=$conn->query($sql);

        if($resultado->num_rows > 0):?>
            <div class="box_contact_save">
                <div class="titulo">
                    <h1>Contatos Salvos</h1>
                </div>
                
                <?php  while ($row=$resultado->fetch_assoc()) :?>
                    <div class="field_contact_save">
                        <p><?=$row["nome"]?></p>
                        <a href="deletar_contato.php?id=<?=$row["id"]?>">
                            <i class='bx  bx-trash-alt'></i>
                        </a>
                         
                    </div>
                <?php endwhile;?>
            </div>
        <?php else: ?>
            <div class="box_contact_save">
                <p>Nenhum Número salvo</p>
            </div>
           
        <?php endif;
    
    ?>
</body>
</html>