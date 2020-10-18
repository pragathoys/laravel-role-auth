## About the project

In this project I will try to show you how to use Laravel 7.x to create a simple role based authentication app

# Process

## 1. Create initial auth structure

```
composer require laravel/ui:^2.4
php artisan ui vue --auth
php artisan migrate
```

## 2. Create Role model and RoleUser table

```
php artisan make:model Role -m
php artisan make:migration create_user_role_table
```

## 3. Create Seeders

```
php artisan make:seed RoleTableSeeder
php artisan make:seed UserTableSeeder

php artisan db:seed
```

## 4. Create Middleware

```
php artisan make:middleware CheckRole
```

## 5. Add code in the routes to use middleware

```
Route::get('/admin',[
       'uses'=>'HomeController@admin',
        'as'=>'admin',
        'middleware' => 'roles',
        'roles'=>['Admin']
        ]);

```

## 6. You can add the middelware also in a controller

```
php artisan make:controller AdminController
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
