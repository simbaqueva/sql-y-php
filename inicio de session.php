<?php
session_start();

?>
<?php
session_start();
//validar la variable de sesion
if (!isset($_session["variable"]))
header("location:index.php?msj=debe inicias sesion");
?





<?
session_start();
session_unset();
session_destroy();
/*se envia al index con una variable x=3 que le indica qu hn cerrado la sesion */
header("location.../index.php?x=3");
?>