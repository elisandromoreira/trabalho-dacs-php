<?php
    $id = $_GET['id'];
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    $delete = "delete from contatos where id = ?";
    $stmt = mysqli_prepare($con, $delete);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    header('Location: '. 'index.php');

?>











