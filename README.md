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
## <p align="center" style="margin-top: 0;">PLATFORM JUAL BELI AYAM LAGA</p>

<p align="center">
<img src="https://github.com/user-attachments/assets/df02096c-5709-4c6c-bc26-dc34cd87746b" alt="logo" width="200">
</p>

### <p align="center">AHMAD SUARDI</p>
### <p align="center">D0223011</p>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>



## **🛠️ Role dan Fitur**
### **1️⃣ Admin**
**Fokus:** Mengelola sistem dan pengguna  


### **2️⃣ Penjual**
**Fokus:** Menjual ayam laga  


### **3️⃣ Pembeli**
**Fokus:** Membeli ayam laga  


## **🛠️ Tabel-tabel Database**
### **1️⃣ Tabel `users` (Pengguna)**
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |

| id	| BIGINT AUTO_INCREMENT PRIMARY KEY	ID | unik pengguna|
| name	| VARCHAR(255) NOT NULL	| Nama pengguna|
| email	| VARCHAR(255) UNIQUE NOT NULL	| Email pengguna, digunakan untuk login|
| password	| VARCHAR(255) NOT NULL	| Password terenkripsi|
| role	| ENUM('admin', 'penjual', 'pembeli') NOT NULL	| Menentukan peran user|
| created_at	| TIMESTAMP DEFAULT CURRENT_TIMESTAMP	| Tanggal akun dibuat|
| updated_at	| TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	| Tanggal terakhir akun diubah|

### **2️⃣ Tabel `user_profiles` (Profil Pengguna)**
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
|user_id	| BIGINT PRIMARY KEY	ID |pengguna yang berhubungan dengan {users}|
| alamat	| VARCHAR(255) NOT NULL	|Alamat lengkap pengguna|
| telepon	| VARCHAR(20) NOT NULL	|Nomor telepon pengguna|
| preferensi	| TEXT	|Catatan preferensi pengguna|

### **3️⃣ Tabel `ayam` (Produk Ayam)**
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
|id	BIGINT AUTO_INCREMENT PRIMARY KEY	|ID unik ayam|
|user_id	|BIGINT NOT NULL	Foreign key ke |{users.id} (penjual)|
|name	|VARCHAR(255) NOT NULL	|Nama ayam|
| description	| TEXT NOT NULL	| Deskripsi ayam|
|harga	|DECIMAL(12,2) NOT NULL	|Harga ayam|
|gambar	|VARCHAR(255)	Path |gambar ayam di server|
|stok	|BOOLEAN DEFAULT TRUE	|Status ketersediaan ayam|
|created_at	|TIMESTAMP DEFAULT CURRENT_TIMESTAMP	|Tanggal ayam ditambahkan|
|updated_at	|TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	|Tanggal ayam terakhir diubah |

### **4️⃣ Tabel `pesanan` (Transaksi Pembeli)**
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id	| BIGINT AUTO_INCREMENT PRIMARY KEY	| ID unik transaksi|
| user_id	| BIGINT NOT NULL	Foreign key ke | {users.id} (pembeli)| 
| status	| ENUM('Menunggu', 'Dikonfirmasi', 'Dibatalkan') | NOT NULL	Status transaksi| 
| metode_pembayaran	| ENUM('COD', 'Transfer', 'E-Wallet') | NOT NULL	Metode pembayaran| 
| alamat_pengiriman	| TEXT NOT NULL	| Alamat pengiriman pesanan| 
| created_at	| TIMESTAMP DEFAULT CURRENT_TIMESTAMP	| Tanggal transaksi dibuat
| updated_at	| TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP	| Tanggal terakhir transaksi diubah| 

### **5️⃣ Tabel `detail_pesanan` (Detail Pesanan)**
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
|pesanan_id	|BIGINT NOT NULL	|Foreign key ke {pesanan.id}|
|ayam_id	|BIGINT NOT NULL	Foreign key ke {ayam.id}|
|jumlah	|INT NOT NULL	|Jumlah ayam dalam transaksi|
|PRIMARY KEY (pesanan_id, ayam_id)|

---

## **🔗 Jenis Relasi Antar Tabel**
| Tabel Asal | Tabel Tujuan | Jenis Relasi | Keterangan |
| ----------- | ----------- | ----------- | ----------- |
| {users}	| {user_profiles}	| One to One| 	Satu pengguna memiliki satu profil| 
| {users}	| {ayam}	| One to Many	| Satu penjual bisa memiliki banyak ayam| 
| {users}	| {pesanan}	| One to Many	| Satu pembeli bisa melakukan banyak transaksi| 
| {pesanan}	| {ayam}	| Many to Many	| Satu pesanan bisa berisi banyak ayam, dan satu ayam bisa muncul dalam banyak transaksi (melalui {detail_pesanan})| 
| {pesanan}	| {detail_pesanan}	| One to Many	| Satu pesanan bisa memiliki banyak item ayam di dalamnya| 
| {ayam}	| {detail_pesanan}	| One to Many	Satu | ayam bisa muncul dalam banyak pesanan| 
