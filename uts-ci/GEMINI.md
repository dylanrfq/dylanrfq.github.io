# Dylan Rifqi Alfaizi - Personal Profile (CI4)

Website profil pribadi dan portofolio yang dibangun menggunakan framework CodeIgniter 4 dan Bootstrap 5.

## Arsitektur & Teknologi
- **Framework:** CodeIgniter 4.x
- **UI Framework:** Bootstrap 5 (via CDN)
- **Autentikasi:** Session-based dengan Hardcoded Credentials (tanpa database untuk user login).
- **Styling:** Custom CSS terpusat di `app/Views/components/header.php`.

## Konfigurasi Penting

### 1. Autentikasi (Hardcoded)
Kredensial login dikelola di `app/Controllers/AuthController.php`:
- **Admin:** `username: dylan` | `password: dylan123`
- **User:** `username: user` | `password: user123`

### 2. Filter Keamanan
Halaman internal diproteksi menggunakan `App\Filters\AuthFilter`.
Pendaftaran filter ada di `app/Config/Filters.php` dengan alias `auth`.

### 3. Struktur Layout
- `app/Views/layout.php`: Layout standar dengan Navbar.
- `app/Views/layout_clear.php`: Layout minimalis (Login/Register).
- Komponen terpisah di `app/Views/components/` (header, navbar, footer).

## Struktur Route
| Path | Controller | Akses |
| :--- | :--- | :--- |
| `/` | `HomeController` | Publik |
| `/login` | `AuthController` | Publik |
| `/register` | `AuthController` | Publik (Simulasi) |
| `/pengalaman` | `PengalamanController` | Private (Auth) |
| `/karya` | `KaryaController` | Private (Auth) |
| `/jasa` | `JasaController` | Private (Auth) |
| `/sertifikat` | `SertifikatController` | Private (Auth) |

## Kontak
Tombol "Hubungi Saya" di halaman Jasa terhubung ke WhatsApp: `+62 812-9728-7018`.

## Pengembangan Selanjutnya
- Integrasi Database untuk manajemen konten (CRUD Pengalaman/Karya).
- Implementasi sistem Register yang menyimpan data ke tabel `users`.
- Optimasi aset gambar menggunakan library Image CodeIgniter.
