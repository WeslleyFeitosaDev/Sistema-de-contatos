<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar contatos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php
        require_once "add_contatos.php";
    ?>
    <div class="caixa_adicionar_contatos">
        <div class="titulo">
            <h1>Adicionar Contatos</h1>
        </div>
        
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="name_contact" id="name_contact" placeholder="Digite o nome do contato" required>
            <input type="text" name="number_contact" id="number_contact" placeholder="Digite o número" required>
            <p><?=$mensagem?></p>
            <input type="submit" value="Adicionar">
        </form>
    </div>
</body>
</html>