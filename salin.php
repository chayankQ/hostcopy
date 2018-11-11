<?php
/* Mengambil file dari hosting lama */ 
/* File juga bisa diambil dari IP tertentu */ 

$content = file_get_contents("http://DomainLama.com/FILE_SAYA.zip"); 

/* Menyimpan file di hosting baru. pada folder yang diinginkan */ 

$fp = fopen("/home/[user kamu]/public_html/NAMA_FILE_SAYA.zip", "w"); 
fwrite($fp, $content); 
fclose($fp); 
?>
