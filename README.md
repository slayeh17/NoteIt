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

## Hosting
I am having trouble hosting this application right now, I've tried Railway but failed. I will try to use another free service in the future, let's see...
