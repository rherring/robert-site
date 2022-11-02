# Robert's Personal Portfolio
## This shows how I built my personal portfolio

---

## Getting your local environment up and running
Following the steps below, you should be able to easily and quickly spin up your local environment. Be sure to update your `hosts` file to use the local domain `http://robert-site.test` as seen in the example `env` file or use Laravel Valet.

 1. Ensure you have Docker installed on your system.
 2. If you're not familiar with Sail, read through https://laravel.com/docs/8.x/sail
 4. Run `composer install`
 5. Copy the `.env.example` to `.env` locally
 6. Run `php artisan key:generate` to create your local app key
 7. Run `sail up -d` to turn your local instance on
 8. Run `sail php artisan migrate` to migrate the database
 9. Run `sail php artisan db:seed` to seed the database
 10. Run `sail npm i` to install the package files
 11. Run `sail npm run dev` to compile the package files
 12. You should be good to go.

---
