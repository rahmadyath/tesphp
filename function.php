<?php

// membuat koneksi
$conn = mysqli_connect("db4free.net","rahmadyath","1234567891","rahmadyadb");

if($conn) {
    echo 'connection success';
} else {
    echo 'Connection failure';
}


?>
