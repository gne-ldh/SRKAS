# EMPLOYEES' INFORMATION MANAGEMENT
(https://docs.google.com/document/d/e/2PACX-1vQEq-pOaY6tpcgOrz-_Okw_L8bIZoDvq8Fr1WW6xD6ExY_aUJm9INa-If0mb2sM8ql7YbLsmGSK6IyU/pub)

### #hackGNE


## BRIEF OF THE PROJECT AND ITS POTENTIAL USERS..

- It can be used by the colleges/universities for employee's database management.

- This Application is based on php Laravel, Materialize-css version 1.0.0 alpha-4 , material icons.


#### This repository is forked from Sagar Maheshwari(https://github.com/SagarMaheshwary/Employee)

## WE HAVE CUSTOMIZED IT ACCORDING TO OUR REQUIREMENTS..

#### Customizations are as follows-

- Modified currency from USD to INR.
- Modified the Copyright.
- Modified Division tab to Designation tab as required.
- Removed the Username attribute.
- Customised the login page.

## PRE-REQUISITES.

### php, laravel, xampp, mysql.



## INSTALLATION STEPS..

- make sure you already have xampp or wamp installed if you are on windows machine, mamp for mac , and lamp for linux.

- clone this repository to your local machine or just download the zip.

- install [Composer](https://getcomposer.org/download) first, then run this command in your command-line (you should be inside your project directory).
```bash
  composer install
```

- rename .env.example to .env and add your database and mail driver credentials.

- generate application key.

```bash
    php artisan key:generate
```

- create database tables.

```bash
    php artisan migrate
```

- create a default admin and genders.

```bash
    php artisan db:seed
```

- clear config (only if you make changes to .env file and restart the server if you are using laravel dev server).

```bash
    php artisan config:clear
```

- Link the storage folder for images.

```bash
    php artisan storage:link
```

- Start the development server.

```bash
    php artisan serve
```
> In Laravel, all the requests are directed to index.php in public directory so, please use a Virtual Host instead of opening it from http://localhost/your-laravel-project/public (It doesn't work that way).

#### Admin Credentials
- Email :- admin@admin.com
- Password :- Password

#### ScreenShot

![screen shot](https://github.com/KirtiGautam/SRKAS/blob/master/screenshot/Dash_1.png)

Please star the project if you like it. Thank you!

### Developed by the team #SRKAS.
