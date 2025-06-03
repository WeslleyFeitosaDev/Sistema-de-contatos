<?php 
    $name_contact=$_POST["name_contact"] ?? "";
    $number_contact=$_POST["number_contact"] ?? "";

    $conn=new mysqli("localhost","root","","lista_contatos");
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $mensagem="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql_verificao="SELECT id FROM contato WHERE numero=?";
        $stmt_verificao=$conn->prepare($sql_verificao);
        $stmt_verificao->bind_param("s",$number_contact);
        $stmt_verificao->execute();
        $stmt_verificao->store_result();
        if($stmt_verificao->num_rows>0){
            $mensagem="Esse número já está salvo";
        }else{
            $sql="INSERT INTO contato(nome,numero) VALUES(?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param("ss",$name_contact,$number_contact);
            if($stmt->execute()){
                header("location: contato_salvo.php");
            }
        }
    }
        
        
?>