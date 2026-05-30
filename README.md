# ResepKita API 🍳

A simple Laravel REST API for managing and searching Indonesian recipes — search by name or by ingredients you have on hand. Includes API key authentication with a self-serve dashboard to generate keys.

Live: [resepkita.aerossky.com](https://resepkita.aerossky.com)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=flat-square&logo=mysql&logoColor=white)

---

## Endpoints

Base URL: `http://127.0.0.1:8000/api`

All requests require an API key in the header:
```
apikey: your_api_key_here
```

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/resep` | Get all recipes |
| GET | `/api/resep?nama=pancakes` | Search by recipe name |
| GET | `/api/resep?bahan=eggs` | Search by ingredient |

**Response format:**
```json
{
  "message": "Success",
  "data": [
    {
      "id": 1,
      "name": "Pancakes",
      "description": "A delicious breakfast treat.",
      "ingredients": ["Sugar", "Flour", "Butter", "Eggs"],
      "created_at": "2024-06-07"
    }
  ]
}
```

---

## Getting an API Key

1. Register at `/register`
2. Login at `/login`
3. Copy your API key from `/dashboard`

---

## Running locally

Prerequisites: PHP >= 8.0, Composer, MySQL

```bash
git clone https://github.com/Aerossky/PAAS-resepkita-api.git
cd PAAS-resepkita-api

composer install

cp .env.example .env
php artisan key:generate

# Set DB credentials in .env, then:
php artisan migrate --seed

php artisan serve
```

---

## Tech Stack

- **Backend** — Laravel (PHP), API Key Middleware
- **Database** — MySQL
- **Auth** — Custom API Key authentication

---

## License

MIT
