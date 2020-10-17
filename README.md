## About the project

In this project I will try to show you how to use Laravel 7.x to create a simple role based authentication app

## Process

# 1. Create initial auth structure

```
composer require laravel/ui:^2.4
php artisan ui vue --auth
php artisan migrate
```

# 2. Create Role model and RoleUser table

```
php artisan make:model Role -m
php artisan make:migration create_role_user_table
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
