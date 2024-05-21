<p align='center'>
    <img src="https://github.com/slayeh17/NoteIt/assets/104914725/aa643fd5-01fd-4c5a-95f2-a935a9f83216" width=100>
</p>

## NoteIt
NoteIt is a simple note-taking app built with Laravel.

## Running Locally
Make sure you have node, PHP, and composer installed
```bash
git clone https://github.com/slayeh17/NoteIt.git
cd NoteIt
composer install
npm i
cp .env.example .env
php artisan key:generate
php artisan migrate

# Now let's run the frontend assets
npm run dev

# And now the Laravel server
php artisan serve
```
Open `http://localhost:8000` to see the website in action 👍

## If you face any issue like I did 😅 while trying to clone this project in Ubuntu follow these two links to solve this issue (Linux Only)
1. https://sentry.io/answers/laravel-requirements-could-not-be-resolved/
2. https://stackoverflow.com/questions/64381185/laravel-and-phpunit-could-not-find-driver-sql-pragma-foreign-keys-on

## Some glimpses
### Login
![Screenshot 2024-05-20 080009](https://github.com/slayeh17/NoteIt/assets/104914725/f66ed245-0d64-4d14-abb6-bbc11e619d99)

### Initial Index Page
![Screenshot 2024-05-20 080055](https://github.com/slayeh17/NoteIt/assets/104914725/a7645b58-969c-4bfb-832b-cbcb49aacc1b)

### After clicking on `Add a new note`
![Screenshot 2024-05-20 080124](https://github.com/slayeh17/NoteIt/assets/104914725/de76ebcf-1613-4d85-ae86-42e5def4a30c)

### Saved Note
![Screenshot 2024-05-20 080142](https://github.com/slayeh17/NoteIt/assets/104914725/c86d266b-d147-4fd5-8972-d22d9502a4c3)

### Updated Index Page
![Screenshot 2024-05-20 080159](https://github.com/slayeh17/NoteIt/assets/104914725/d03e4400-115a-49b7-b0ed-7d2ac76a6996)


## Hosting
I am having trouble hosting this application right now, I've tried Railway but failed. I will try to use another free service in the future, let's see...
