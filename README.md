# ResepKu API

Proyek ini adalah API sederhana untuk mencari dan mendapatkan resep makanan. API ini dibangun menggunakan Laravel dan menyediakan endpoint untuk mengambil semua resep, mencari resep berdasarkan bahan, dan mencari resep berdasarkan nama.

## Fitur

-   Mengambil semua resep
-   Mencari resep berdasarkan bahan
-   Mencari resep berdasarkan nama

## Endpoint API

### 1. Mendapatkan Semua Resep

-   **Endpoint**: `/api/resep`
-   **Metode HTTP**: GET
-   **Headers**: `apikey: {apikeymu}`
-   **Deskripsi**: Mengambil semua resep yang tersedia.
-   **Contoh Response**:
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
            },
            {
                "id": 2,
                "name": "Scrambled Eggs",
                "description": "A simple breakfast dish.",
                "instructions": null,
                "ingredients": ["Salt", "Butter", "Eggs"],
                "created_at": "2024-06-07"
            }
        ]
    }
    ```

### 2. Mencari Resep Berdasarkan Bahan

-   **Endpoint**: `/api/resep?bahan=string`
-   **Metode HTTP**: GET
-   **Headers**: `apikey: {apikeymu}`
-   **Deskripsi**: Mencari resep yang menggunakan bahan tertentu.
-   **Contoh Response**:
    ```json
    {
        "message": "Success",
        "data": [
            {
                "id": 2,
                "name": "Scrambled Eggs",
                "description": "A simple breakfast dish.",
                "instructions": null,
                "ingredients": ["Salt", "Butter", "Eggs"],
                "created_at": "2024-06-07"
            }
        ]
    }
    ```

### 3. Mencari Resep Berdasarkan Nama

-   **Endpoint**: `/api/resep?bahan=string`
-   **Metode HTTP**: GET
-   **Headers**: `apikey: {apikeymu}`
-   **Deskripsi**: Mencari resep berdasarkan nama.
-   **Contoh Response**:
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

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal Anda:

1. **Clone repositori ini**:

    ```bash
    git clone https://github.com/username/resep-makanan-api.git](https://github.com/Aerossky/PAAS-resepku-api.git
    ```

2. **Masuk ke direktori proyek**:

    ```bash
    cd resep-makanan-api
    ```

3. **Install dependencies menggunakan Composer**:

    ```bash
    composer install
    ```

4. **Salin file `.env.example` menjadi `.env`**:

    ```bash
    cp .env.example .env
    ```

5. **Konfigurasikan database** di file `.env` sesuai dengan pengaturan database Anda. Contoh konfigurasi:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
    ```

6. **Generate application key**:

    ```bash
    php artisan key:generate
    ```

7. **Migrasi database**:

    ```bash
    php artisan migrate
    php artisan migrate:fresh --seed
    ```

8. **Jalankan server lokal**:
    ```bash
    php artisan serve
    ```

Sekarang Anda dapat mengakses API di `http://127.0.0.1:8000/login`.

### Mengakses API

1. **Daftar dan Login**:

    - Buka halaman `http://127.0.0.1:8000/register` untuk mendaftar.
    - Setelah mendaftar, login di `http://127.0.0.1:8000/login`.

2. **Mengambil API Key**:

    - Setelah login, buka halaman `http://127.0.0.1:8000/dashboard`.
    - Di halaman dashboard, salin API Key Anda yang tersedia di bagian pengaturan.

3. **Menggunakan API Key**:
    - Tambahkan API Key yang Anda salin ke header setiap permintaan API sebagai berikut:
        ```
        apikey : apikey milikmu
        ```

Dengan mengikuti langkah-langkah di atas, Anda sekarang dapat menggunakan API dengan menambahkan API Key ke header setiap permintaan.
