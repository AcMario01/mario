<?php
if($_POST["username"] == "Mario" && $_POST["password"] == "contraseña"){
    echo "Welcome Mario";
}else{
    echo "Wrong user or password";
    header ("Location: index.php");
}
?>