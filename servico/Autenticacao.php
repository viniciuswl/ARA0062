<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://wilsonvinicius2020.000webhostapp.com/');
    </script>
    ";
    
}

?>