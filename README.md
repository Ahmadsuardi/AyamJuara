<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

<!-- <h1>NAMA WEB</h1>
<p align="center">
<img src="https://github.com/user-attachments/assets/df02096c-5709-4c6c-bc26-dc34cd87746b" alt="logo" width="200">
</p> -->
# <p align="center" style="margin-bottom: 0px;">Ayam Juara</p>
## <p align="center" style="margin-top: 0;">PLATFROM JUAL BELI AYAM LAGA</p>

<p align="center">
<img src="https://github.com/user-attachments/assets/df02096c-5709-4c6c-bc26-dc34cd87746b" alt="logo" width="200">
</p>

### <p align="center">AHMAD SUARDI</p>
### <p align="center">D0223011</p></br>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>

---
## Role dan Fitur
### 1. Admin
**Fokus:** Kelola sistem & pengguna
| Fitur | Deskripsi |
| ----------- | ----------- |
| Kelola User | CRUD data pengguna |
| Kelola Role dan Hak Akses | Menentukan akses |
| Laporan Sistem | Export data jadwal, pengguna dsb |

### 2. Manager Gudang
**Fokus:** Operasional gudang
| Fitur | Deskripsi |
| ----------- | ----------- |
| Lihat Jadwal | Lihat jadwal pengiriman |
| Konfirmasi Jadwal | Setujui/tolak/proses jadwal petani |
| Update Jadwal | Tandai sebagai *selesai*, *proses*, dsb |
| Kelola stok | Tambah/edit jumlah stok |
| Laporan Gudang | Stok harian, riwayat masuk/keluar |

### 3. Petani/Pengguna
**Fokus:** Kirim gabah / pantau proses
| Fitur | Deskripsi |
| ----------- | ----------- |
| Buat Jadwal | Pilih tanggal, gudang tujuan, jumlah gabah, kadar air padi, dan berat gabah |
| Lihat Status Jadwal | Apakah diterima, di proses atau, selesai |
| Edit/Hapus Jadwal | Jika jadwal belum di proses |

---
## Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel ```{users}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| nama | VARCHAR(100) | Nama User |
| role_id | INT(FK) | Relasi ke ```{roles.id}``` |
| email | VARCHAR(100) | Email Unik |
| password | VARCHAR(255) | Password |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diupdate |

### 2. Tabel ```{roles}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| nama | VARCHAR(100) | Nama Role: admin, manager gudang, petani |
| created_at | TIMESTAMP | Waktu dibuat |

### 3. Tabel ```{gudang}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| nama_gudang | VARCHAR(100) | Nama Gudang |
| kapasitas | INT | Maksimal kapasitas gudang |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diupdate |

### 4. Tabel ```{penjadwalans}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| user_id | INT(FK) | Relasi ke ```{users.id}``` |
| gudang_id | INT(FK) | Relasi ke ```{gudangs.id}``` |
| tanggal_kirim | DATE | Tanggal kirim gabah |
| berat_gabah | FLOAT | Berat gabah dalam kg |
| kadar_air | FLOAT | Persentase kadar air padi |
| status | ENUM | 'diajukan', 'diproses', 'selesai', 'ditolak' |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diupdate |

### 5. Tabel ```{stok_gabahs}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| gudang_id | INT(FK) | Relasi ke ```{gudangs.id}``` |
| tanggal_masuk | DATE | Tanggal kirim gabah |
| berat_gabah | FLOAT | Berat gabah dalam kg |
| kadar_air | FLOAT | Persentase kadar air padi |
| sumber | VARCHAR(100) | Nama petani atau sumber gabah |
| created_at | TIMESTAMP | Waktu dibuat |
| updated_at | TIMESTAMP | Waktu diupdate |

---
## Jenis relasi dan tabel yang berelasi
| Tabel Asal | Tabel Tujuan | Jenis Relasi | Keterangan |
| ----------- | ----------- | ----------- | ----------- |
| ```users.role_id``` | ```roles.id``` | Many to One | Banyak user bisa punya satu role |
| ```penjadwalans.user_id``` | ```users.id``` | Many to One | Setiap jadwal diajukan oleh satu user |
| ```penjadwalans.gudang_id``` | ```gudangs.id``` | Many to One | Setiap jadwal diajukan ke satu gudang |
| ```stok_gabahs.gudang_id``` | ```gudangs.id``` | Many to One | Banyak stok masuk ke satu gudang |