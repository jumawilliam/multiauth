Install a new fresh install of laravel
-composer create-project laravel/laravel multiauth
Create a DB in php my Admin
set the created db in laravel .env
Modify users table add role column in migrations
Run migrations
install laravel ui
- composer require laravel/ui
Generate login scaffolding
-php artisan ui bootstrap --auth

use factory  to create 5 users with role 1-5

create 4 middlewares
    1. Superadmin
    2.Admin
    3.DeptHead
    4. Staff
    5. Client

Add code to 
-Superadmin middleware
-Admin middleware
-DeptHead middleware
-Staff middleware
-Client middleware

Add middlewares created to Route middleware

Create routes in web.php

create different dashboards

some work on the login controller

test the app.