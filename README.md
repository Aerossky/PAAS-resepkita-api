# 🍳 ResepKu API - Recipe Management System

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/API-REST-blue?style=for-the-badge" alt="REST API">
</div>

<div align="center">
  <h4>🥘 API sederhana dan powerful untuk mengelola koleksi resep makanan dengan sistem pencarian yang fleksibel</h4>
</div>

---

## 📖 Tentang Proyek

**ResepKu API** adalah RESTful API yang dibangun menggunakan Laravel untuk mengelola koleksi resep makanan. API ini menyediakan fitur pencarian resep berdasarkan nama dan bahan dengan sistem autentikasi menggunakan API key yang aman dan mudah digunakan.

### 🎯 Mengapa ResepKu API?

- **Pencarian Fleksibel** - Cari resep berdasarkan nama atau bahan yang tersedia
- **API Key Authentication** - Sistem autentikasi yang aman dan mudah diintegrasikan
- **RESTful Design** - Mengikuti standar REST API yang konsisten
- **Laravel Framework** - Dibangun dengan framework yang robust dan scalable

## ✨ Fitur Utama

- 📚 **Koleksi Resep Lengkap** - Database resep dengan informasi detail
- 🔍 **Pencarian by Nama** - Temukan resep berdasarkan nama masakan
- 🥕 **Pencarian by Bahan** - Cari resep berdasarkan bahan yang tersedia
- 🔐 **API Key Security** - Sistem autentikasi yang aman
- 📱 **RESTful Response** - Format JSON yang konsisten dan mudah digunakan
- 🚀 **Fast & Lightweight** - Response time yang cepat

## 🚀 Teknologi yang Digunakan

### Backend
- **Laravel** - PHP framework untuk pengembangan API yang robust
- **PHP** - Server-side programming language
- **MySQL** - Database management system untuk penyimpanan data

### Authentication
- **API Key Authentication** - Sistem autentikasi berbasis API key
- **Laravel Sanctum/Passport** - Token-based authentication

### Tools & Development
- **Composer** - Dependency manager untuk PHP
- **Artisan** - Laravel's command-line interface
- **Git** - Version control system

## 📊 API Endpoints

### Base URL
```
http://127.0.0.1:8000/api
```

### Authentication
Semua endpoint memerlukan API key di header:
```
Headers: {
  "apikey": "your_api_key_here"
}
```

### 📋 Available Endpoints

#### 1. Get All Recipes
```http
GET /api/resep
```

**Response:**
```json
{
  "message": "Success",
  "data": [
    {
      "id": 1,
      "name": "Pancakes",
      "description": "A delicious breakfast treat.",
      "instructions": null,
      "ingredients": ["Sugar", "Flour", "Butter", "Eggs"],
      "created_at": "2024-06-07"
    }
  ]
}
```

#### 2. Search by Ingredient
```http
GET /api/resep?bahan=string
```

**Parameters:**
- `bahan` (string) - Ingredient name to search for

**Example:**
```http
GET /api/resep?bahan=eggs
```

#### 3. Search by Recipe Name
```http
GET /api/resep?nama=string
```

**Parameters:**
- `nama` (string) - Recipe name to search for

**Example:**
```http
GET /api/resep?nama=pancakes
```

## 🛠️ Instalasi & Setup

### Prasyarat
- PHP >= 8.0
- Composer
- MySQL
- Laravel 9+

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/Aerossky/PAAS-resepku-api.git
   cd PAAS-resepku-api
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration**
   Update konfigurasi database di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=resepku_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database Migration & Seeding**
   ```bash
   php artisan migrate
   php artisan migrate:fresh --seed
   ```

6. **Jalankan Server**
   ```bash
   php artisan serve
   ```

### 🔑 Cara Mendapatkan API Key

1. **Registrasi Account**
   - Buka: `http://127.0.0.1:8000/register`
   - Isi form registrasi dengan data yang valid

2. **Login ke Dashboard**
   - Buka: `http://127.0.0.1:8000/login`
   - Masukkan kredensial yang telah didaftarkan

3. **Ambil API Key**
   - Setelah login, buka: `http://127.0.0.1:8000/dashboard`
   - Copy API Key dari section pengaturan
   - Gunakan API Key ini untuk semua request API

## 🚀 Cara Menggunakan API

### Menggunakan cURL

**Get All Recipes:**
```bash
curl -X GET "http://127.0.0.1:8000/api/resep" \
  -H "apikey: your_api_key_here"
```

**Search by Ingredient:**
```bash
curl -X GET "http://127.0.0.1:8000/api/resep?bahan=eggs" \
  -H "apikey: your_api_key_here"
```

### Menggunakan Postman
1. Set method ke `GET`
2. Masukkan URL endpoint
3. Tambahkan header `apikey` dengan value API key Anda
4. Send request

## 📁 Struktur Project

```
app/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │       └── ResepController.php
│   ├── Middleware/
│   │   └── ApiKeyMiddleware.php
│   └── Requests/
├── Models/
│   ├── User.php
│   └── Resep.php
database/
├── migrations/
└── seeders/
    └── ResepSeeder.php
routes/
└── api.php
```

## 🔒 Security Features

- **API Key Authentication** - Setiap request harus menyertakan valid API key
- **Rate Limiting** - Pembatasan jumlah request per menit
- **Input Validation** - Validasi semua input untuk mencegah injection
- **CORS Protection** - Konfigurasi CORS untuk keamanan browser

## 📝 Response Format

Semua response API menggunakan format JSON yang konsisten:

**Success Response:**
```json
{
  "message": "Success",
  "data": [...],
  "status": 200
}
```

**Error Response:**
```json
{
  "message": "Error message",
  "error": "Detailed error information",
  "status": 400
}
```

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📋 TODO / Roadmap

- [x] Tambah endpoint untuk CRUD resep (POST, PUT, DELETE)
- [ ] Implementasi pagination untuk response yang besar
- [ ] Tambah filter berdasarkan kategori masakan
- [ ] Implementasi rating dan review system
- [ ] Tambah image upload untuk resep
- [ ] API documentation dengan Swagger/OpenAPI

## 📝 Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file `LICENSE` untuk detail lebih lanjut.


## 🙏 Acknowledgments

- Laravel Framework untuk foundation yang solid
- Komunitas PHP Indonesia untuk inspiration
- Open source contributors yang mendukung ekosistem Laravel

---

<div align="center">
  <p>⭐ Jika proyek ini membantu Anda, jangan lupa berikan star!</p>
  <p>Made with ❤️ for Food Lovers</p>
</div>
