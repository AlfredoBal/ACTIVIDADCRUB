<?php
if(!empty($_POST["btnregistrar"])) {

if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["cedula"]) and !empty($_POST["fec_naci"]) and !empty($_POST["correo"])) {
    echo"TODO OK";
}else{
    echo "ALGUNOS DE LOS CAMPOS ESTAN VACIOS";
}
}
?>