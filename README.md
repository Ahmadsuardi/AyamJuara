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

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
<br>
<h3 align="center">Plat from penjualan ayam laga</h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/8959c24a-9c85-4558-bef0-a95cdae59a86" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>Ahmad Suardi</strong><br/><br/>
  <strong>D0223011</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

###Table User
| Kolom     | Tipe Data | Keterangan                                         |
|-----------|-----------|----------------------------------------------------|
| id        | bigint    | Primary Key, Auto Increment                        |
| name      | string    | Unik                                               |
| email     | string    | Unik                                               |
| password  | string    | Kata sandi (terenkripsi)                           |
| role      | enum      | Enum: 'admin', 'penjual', 'pembeli' (default: pembeli) |
| created_at| timestamp | Waktu dibuat (otomatis)                            |
| updated_at| timestamp | Waktu diperbarui (otomatis)                        |

###Table UserProfil
| Kolom      | Tipe Data | Keterangan                                          |
|------------|-----------|-----------------------------------------------------|
| id         | bigint    | Primary Key, Auto Increment                         |
| user_id    | foreignId | Relasi ke `users.id`, cascade on delete             |
| alamat     | string    | Alamat pengguna                                     |
| telepon    | string    | Nomor telepon pengguna                              |
| preferensi | text      | Preferensi pengguna (nullable)                      |
| created_at | timestamp | Waktu dibuat (otomatis)                             |
| updated_at | timestamp | Waktu diperbarui (otomatis)                         |

###TabelAyam
| Kolom      | Tipe Data     | Keterangan                                         |
|------------|---------------|----------------------------------------------------|
| id         | bigint        | Primary Key, Auto Increment                        |
| user_id    | foreignId     | Relasi ke `users.id`, cascade on delete            |
| nama       | string        | Nama produk ayam                                   |
| description| text          | Deskripsi ayam (nullable)                          |
| harga      | decimal(12,2) | Harga ayam                                         |
| gambar     | string        | Path gambar ayam (nullable)                        |
| stok       | boolean       | Status stok (default: true)                        |
| created_at | timestamp     | Waktu dibuat (otomatis)                            |
| updated_at | timestamp     | Waktu diperbarui (otomatis)                        |

###TabelPesanan
| Kolom           | Tipe Data | Keterangan                                        |
|------------------|-----------|--------------------------------------------------|
| id               | bigint    | Primary Key, Auto Increment                      |
| user_id          | foreignId | Relasi ke `users.id`, cascade on delete          |
| tanggal_pesanan  | date      | Tanggal pemesanan                                |
| status           | enum      | Enum: 'proses', 'selesai', 'batal'               |
| created_at       | timestamp | Waktu dibuat (otomatis)                          |
| updated_at       | timestamp | Waktu diperbarui (otomatis)                      |

###TabelDetailPesanan
| Kolom       | Tipe Data | Keterangan                                          |
|-------------|-----------|-----------------------------------------------------|
| id          | bigint    | Primary Key, Auto Increment                         |
| pesanan_id  | foreignId | Relasi ke `pesanan.id`, cascade on delete           |
| ayam_id     | foreignId | Relasi ke `ayam.id`, cascade on delete              |
| jumlah      | integer   | Jumlah ayam yang dipesan                            |
| subtotal    | integer   | Total harga (jumlah * harga ayam)                   |
| created_at  | timestamp | Waktu dibuat (otomatis)                             |
| updated_at  | timestamp | Waktu diperbarui (otomatis)                         |
