<?php
if($_POST['usuario']=="lupillo"&& $_POST['contra']=="progra"){
    echo"SECION INICIADA";
    header("location:Educacion1.html");
}
else{
    echo "DATOS INCORRECTOS";
    header("location:Educacion1.php");
}
?>