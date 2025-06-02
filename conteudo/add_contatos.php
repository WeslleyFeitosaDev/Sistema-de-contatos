<?php 
    $name_contact=$_POST["name_contact"];
    $number_contact=$_POST["number_contact"];

    $conn=new mysqli("localhost","root","","lista de contatos");
    if($conn->connect_error){
        die($conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql="INSERT INTO contatos(nome,numero) VALUES(?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("ss",$name_contact,$number_contact);
        if($stmt->execute()){
            header("location: https://www.youtube.com");
        }
        
    }
?>