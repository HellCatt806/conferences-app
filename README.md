# Konferencijų sistema

Internetinė sistema skirta registracijai į konferencijas ir konferencijų duomenų valdymui.

## Technologijos

- PHP 8.5
- Laravel 13
- Bootstrap 5
- SweetAlert2
- SQLite

## Įdiegimas

1. Klonuoti repozitoriją:
https://github.com/HellCatt806/conferences-app.git

2. Įdiegti PHP priklausomybes:
composer install

3. Įdiegti JavaScript priklausomybes:
npm install

4. Sukurti `.env` failą:
cp .env.example .env
php artisan key:generate

5. Sukurti duomenų bazę ir užpildyti duomenimis:
php artisan migrate:fresh --seed

6. Paleisti programą:
php artisan serve
npm run dev

## Prisijungimo duomenys

| Vaidmuo | El. paštas | Slaptažodis |
|---------|-----------|-------------|
| Administratorius | admin@admin.com | password |
| Darbuotojas | employee@employee.com | password |
| Klientas | client@client.com | password |

## Naudotojų tipai

- **Klientas** — mato planuojamas konferencijas, gali registruotis į jas
- **Darbuotojas** — mato visų konferencijų sąrašą ir užsiregistravusius klientus
- **Administratorius** — pilnas konferencijų ir naudotojų valdymas

## Studento informacija

- Deividas Adomavičius PIT-23-NL