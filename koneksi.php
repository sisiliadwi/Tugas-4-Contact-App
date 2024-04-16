<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "contact";

$conn = new mysqli($host, $user, $pass, $database);
if ($conn -> connect_error){
    die ("Koneksi gagal: ". $koneksi -> connect_error);
}
// echo "Koneksi sukses";

?>


 