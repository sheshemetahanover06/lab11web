# Praktikum 11 – PHP OOP dengan Modularisasi  
Mata Kuliah: Pemrograman Web 1   
Nama: She She Metahanover
NIM: 312410432

---

## Tujuan Proyek
- Mengimplementasikan konsep dasar OOP (class, objek, method, property) dalam PHP.
- Membuat aplikasi CRUD sederhana menggunakan pendekatan modular.
- Belajar mengelola database melalui class khusus (Database Handler).
- Melatih pemahaman struktur folder aplikasi agar lebih profesional dan scalable.

## Implementasi 
1. Import database latihan_oop.sql ke MySQL:
CREATE DATABASE latihan_oop;
USE latihan_oop;

Tampilan Database
<Img src="database.png">

2. Sesuaikan konfigurasi database di config/config.php:
<?php
$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db_name' => 'latihan_oop'
];
?>

3. Jalankan proyek di browser:
http://localhost/lab11_php_oop/artikel

## Hasil 
1. index.php 
<Img src="sebelum.png">

<Img src="sesudah.png">

2. Tambah Artikel 
<Img src="tambah 1.png">

<Img src="tambah 2.png">

3. Artikel Berhasil Ditambahkan 
<Img src="berhasil.png">