<?php
    echo '<pre>';
    $conn = mysqli_connect('localhost','root','admin1234','pruebas');
    $insert = "INSERT INTO usuario (nombre, email) VALUES ('alex','alex@alex.com')";
    $return = mysqli_query($conn, $insert);
    print_r($return);
    mysqli_close($conn);
?>