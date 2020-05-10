<?php
    $id       = $_POST['txtId'];
    $name     = $_POST['txtNome'];
    $company = $_POST['txtEmpresa'];
    $phone = $_POST['txtTelefone'];
    
    var_dump($id);
    var_dump($name);
    var_dump($company);
    var_dump($phone);
    
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    
    if($id == "0"){
        $insert = "insert into contatos(name, company, phone) values(?,?,?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "sss", $name, $company, $phone);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update contatos set name=?, company=?, phone=? where id=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $company, $phone, $id);
        mysqli_stmt_execute($stmt);
    }
    header('Location: '. 'index.php');

?>











