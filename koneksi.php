<?php
$kon = mysqli_connect("localhost","root","","db_perpus");

if(mysqli_connect_errno()){
    echo"koneksi database gagal : ". mysqli_connect_error();
}
?>