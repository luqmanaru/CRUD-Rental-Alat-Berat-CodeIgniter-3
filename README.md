# CRUD-Rental-Alat-Berat-CodeIgniter-3

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-orange.svg)
![PHP](https://img.shields.io/badge/PHP-7.x-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.x-green.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-purple.svg)

Aplikasi CRUD (Create, Read, Update, Delete) untuk manajemen data rental alat berat yang dibangun menggunakan framework CodeIgniter.

## Fitur

- Dashboard dengan statistik real-time
- CRUD lengkap untuk data alat berat
- CRUD lengkap untuk data customer
- Validasi form input
- Modal konfirmasi untuk hapus data
- Notifikasi untuk operasi CRUD
- Template admin yang responsif dan modern
- Sidebar navigasi yang terstruktur
- Tabel data dengan sorting dan searching

## Struktur Direktori
<img width="236" height="426" alt="image" src="https://github.com/user-attachments/assets/39c2f9f2-1b62-44e6-a219-f6d7f220e4ca" />


## Struktur Database

Tabel: `alat_berat`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_alat | INT(11) | Primary Key, Auto Increment |
| nama_alat | VARCHAR(100) | Nama alat berat |
| merk | VARCHAR(50) | Merek alat berat |
| jenis | VARCHAR(50) | Jenis alat berat |
| plat_nomor | VARCHAR(15) | Plat nomor alat berat |
| tahun | INT(4) | Tahun pembuatan |
| harga_sewa | DECIMAL(10,2) | Harga sewa per hari |
| status | ENUM('tersedia', 'disewa', 'perbaikan') | Status alat berat |

Tabel: `customer`

| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id_customer | INT(11) | Primary Key, Auto Increment |
| nama_customer | VARCHAR(100) | Nama customer |
| alamat | TEXT | Alamat customer |
| no_hp | VARCHAR(15) | Nomor HP customer |
| no_ktp | VARCHAR(20) | Nomor KTP customer |
| email | VARCHAR(100) | Email customer |

## Screenshot Aplikasi
- Data Alat Berat
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/b0a36c00-b292-460f-9504-3f494a3db705" />

- Edit Alat Berat
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/08712750-3783-4478-9f69-fd8d9e1b24e2" />

- Data Customer
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/42a16f72-fe85-4a3e-8507-1def8f438b0e" />

- Edit Customer
<img width="827" height="440" alt="image" src="https://github.com/user-attachments/assets/0fb8a4f8-b097-4945-8748-696560ec8d15" />

---

**luqmanaru**

Ini adalah proyek pengembangan web lanjut untuk memenuhi tugas kuliah Pemrograman Web Lanjut
