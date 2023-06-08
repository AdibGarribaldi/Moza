<?php

$host = mysql_connect("localhost", "root", "xxx");

if($host) {
    echo "koneksi host berhasil.<br/>";
}else{
    echo "koneksi gagal.<br/>";
}

$db = mysql_select_db("konekdb");

if($db) {
   echo "koneksi database berhasil.";
}else{
    echo "koneksi database gagal.";
}
?>
