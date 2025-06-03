<?php 
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $conn=new mysqli("localhost","root","","lista_contatos");

        if($conn->connect_error){
            die("ERRO: " .$conn->connect_error);
        }

        $sql="DELETE FROM contato WHERE id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("i",$id);

        if($stmt->execute()){
            header("location: contato_salvo.php");
        }else{
            echo "Error ao remover contato";
        }
    }


?>