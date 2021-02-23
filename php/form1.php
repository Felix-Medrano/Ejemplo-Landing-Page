<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $asunto = "Contacto";
        $mensaje = $_POST["mensaje"];
        if(isset($nombre))
        {
            if(isset($correo))
            {
                if(isset($mensaje))
                {
                    $para = "felix.d.medrano@gmail.com";
                    $cuerpo = "De: ".$correo."\n\nMesnaje:\n".$mensaje;
                    $pie = "From: ".$correo;
                    mail($para,$asunto,$cuerpo,$pie);
                }
            }
        }
    }
?>