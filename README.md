# laravel-auth-passport-with-email-verification
REST API with Laravel 5.8 using Laravel Passport
  
## Features
  - Register
  - Login
  - Verify account
  - Resend Verification email
  - Logout


## Setup

  After you clone this project:
  
  1- Run `cp .env.example .env` to create a `.env` file
  
  2-Setup your Database information to your `.env` file :

  ``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YourDatabaseName
DB_USERNAME=YourUsername
DB_PASSWORD=YourPassword
  ```

  3-Setup your SMTP information to your `.env` file :

  ``` bash
MAIL_DRIVER=smtp
MAIL_HOST=YourHost
MAIL_PORT=YourPort
MAIL_USERNAME=YourUsername
MAIL_PASSWORD=YourPassword
  ```

  4-Run `composer install`
  
  5-Run `php artisan key:generate`
  
  6-Run `php artisan migrate`
  
  7-Run `php artisan serve` and your app will be running on `localhost:8000`

## Routes

- User

        POST /api/signup
        // Register a new user and returns user data with the generated token
        // Public

        POST /api/login
        // Login user and returns user data with the generated token
        // Public

        GET /api/resend-email-verification
        // Verifies token and resend email verification
        // Private

        GET /api/getuser
        // Verifies token and returns current user data
        // Private

        GET /api/getusers
        // Verifies token and returns all users data
        // Private

        GET /api/user/logout
        // Logout
        // Private
