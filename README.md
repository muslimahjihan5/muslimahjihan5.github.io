# Pendaftaran Beasiswa - README
Selamat datang di Formulir Pendaftaran Beasiswa. Formulir ini adalah sebuah formulir pendaftaran beasiswa yang dibangun dengan menggunakan bahas apemrograman PHP.
Pemohon dapat mengirimkan infomasi mereka dan mendaftar untuk berbagai jenis beasiswa berdasarkan semester dan Indeks Prestasi Kumulatif (IPK) mereka.

#Cara Memulai
Untuk menjalankan perintah formulir pendaftaran beasiswa ini, ikuti langkah-langkah sebagai berikut :
1. Pastikan anda memiliki aplikasi XAMPP yang telah diinstal dan berjalan.
2. Unduh repository atau salin kode-kode yang diberikan ke dalam proyek web Anda.
3. Pastikan Anda memiliki database MySQL yang sudah dibuat dengan nama "ujikom2". Jika ingin mengganti peraturan koneksi databse di file connection.php jika diperlukan.
4. Impor tabel pendaftar ke dalam database anda dari file pendaftar.sql yang tersedia.
5. Buka proyek menggunakan server web (misalnya, dengan mengakses http://localhost/ujikom2/index.php

#Pengunaan 
1. Untuk halaman awal (index.php) adalah titik masuk ke web. Di sini anda dapat memiih jenis beasiswa yang ingin di daftar (Akademi atau Non-Akademi) dan melihat grafik pendaftar beasiswa.
2. Halaman "Pilihan Beasiswa" anda dapat membaca informasi tentang kedua jenis beasiswa dan jika ingin mendaftar silahkan klik tombol "Daftar Sekarang"
   sesuai dengan jeis beasiswa yang dipilih.
3. Halaman "Form Pendaftaran" untuk mengisi formulir pendaftaran. Email yang anda masukkan akan digunakan untuk mengidentifikasi jenis beasiswa dan mengisi nama dan IPK secara otomatis.
   Perhatikan bahwa email "jihanm5403@gmail.com" akan memberikan IPK yang memungkinkan pendaftaran, sedangkan email "jaynudin@gmailcom" akan memunculkan peringatan.
4. Setelah engisi formulir pendaftaran, anda dapat mengunggah berkas terkait (seperti transkip nilai). Tombol "Daftar" akan otomatis aktif jika syarat IPK terpenuhi.
5. Pada halaman "Hasil" anda dapat melihat daftar peserta pendaftar beserta detailnya. Untuk Status awalnya "belum terverifikasi"

#Penjelasan Code
- index.php adalah file utama aplikasi web ini, yang di dalamnya terdapat PHP untuk mengatur navigasi, menampilkan konten yang sesuai, dan menghubungkan ke database.
- connection.php berisi kode untuk menghubungkan ke database MySQL
- add_pendaftar.php adalah file yang memproses data pendaftaran dan mengunggah berkas terkait pendaftaran ke server.
- myjs.js menggunakan jQuery untuk mengisi otomatis nama dan IPK berdasarkan email yang dimasukkan daam formulir pendaftaran
- style.css berisi aturan CSS untuk tampilan di aplikasi web
