<?php
if (!empty($_POST['nickname']) && !empty($_POST['password'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if ($nickname == "administrador" && $password == "asd") {
       
        header("Location: http://localhost:3000/dashboard%20.html");
        
    }if ($nickname =="usuario" && $password =="123"){
        
        echo "Bien venido cliente";
        
    } else {
        echo "pagina de error ";
    }
}else {
    
    header("Location: index.php");
    
}
?>





