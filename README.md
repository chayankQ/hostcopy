# hostcopy
Menyalin file antar host

Di hosting lama

1. Login ke CPANEL hosting lama
2. Compress terlebih dahulu semua file yang ingin anda transfer menjadi satu file saja, misalnya http://www.DomainLama.com/FILE_SAYA.zip

Di hosting baru

1. Login ke CPANEL hosting baru
2. Buat sebuah file PHP dengan nama salin.php [atau yang berkaitan dengan menyalin file]

lalu salin script salin.php

Kegunaan kode script diatas adalah mendownload file dari hosting lama ke lokasi folder yang sudah dipilih di server hosting baru. Kamu juga bisa mengambil file dari IP nya, misalnya 192.162.128.xxx (disesuaikan).

Setelah file dibaca maka script diatas akan secara otomatis mendownload dan menyimpan file di folder yang ditentukan (/home/[user kamu]/public_html/).

Untuk folder [user kamu] bisa berbeda-beda, tergantung yang diberikan oleh hosting, jadi sesuaikan dengan folder hosting kamu.

3. Jalankan di address bar browser alamat berikut:

http://www.DomainBaru.com/salin.php

Selanjutnya tinggal menunggu proses transfer selesai, kecepatan transfer tergantung dari kecepatan komputer server lama dan barunya.

4. Periksa folder public_html pada hosting baru, file yang kamu transfer seharusnya sudah tersedia dalam beberapa menit saja.
