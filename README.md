follow WPU laravel 11
https://www.youtube.com/playlist?list=PLFIM0718LjIW1Xb7cVj7LdAr32ATDQMdr

![extensions-vscode](./public/img/extensions-vscode.png)

install Node.js
install composer

run using 
    php artisan serve
    npm run dev

using tailwind
    install guide
        npm install -D tailwindcss postcss autoprefixer
        npx tailwindcss init -p
    or follow https://tailwindcss.com/docs/guides/laravel

<!-- ////////////////////////////////////////////////////////////////////////// -->
make component using `php artisan make:component <NameComponent>` add `--view` when want make without class/controller

if add or edit some npm package, run `npm run build`

common command
- `php artisan migrate` migrate
- `php artisan migrate:fresh` drop & migrate 
- `php artisan make:%` many choice
- `php artisan tinker` cmd laravel
-- `App\Models\User::factory(3)->unverified()->create();` create 3 dummy, unverified from UserFactory option, then create
-- `App\Models\Post::factory(10)->recycle(User::factory(4)->create())->create();` create 10 dummy Post, set key from User id recycle only 4 created dummy from User
