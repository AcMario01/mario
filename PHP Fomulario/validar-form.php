<?php
if (isset($_POST['submit'])) {
    if(empty($nombre)) {
       echo "<p class='error'>* Agrega tu nombre de forma correcta </p>";
    } else {
        if(strlen($_nombre)>10){
            echo "<p class= 'error'>* El nombre introduciodo es demasiado largo</p>";
        }
    }
    if(empty($password)) {
        echo "<p class='error'>* Agrega tu correo </p>";
    } else {
        if(!filter_var($password, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* La contraseña es incorrecta</p>";
        }
    }
}