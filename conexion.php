<?php
function conexion() {
    $host = "dpg-d2nmblmmcj7s73cov840-a.oregon-postgres.render.com";
    $port = "5432";
    $dbname = "exampledbrnube2";
    $user = "exampledbrnube2_user";
    $password = "cQWzk0g9Uc327yLZC2yz7htjjT2UvnN2";

    // Render requiere SSL
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require");

    if (!$conn) {
        die("❌ Error de conexión: " . pg_last_error());
    }

    return $conn;
}
?>
