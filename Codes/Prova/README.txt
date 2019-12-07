-------------------------------
-------------------------------
Configuração realizada
-------------------------------
-------------------------------
composer require laravel-frontend-presets/argon
php artisan preset argon
composer dump-autoload
php artisan migrate --seed
config/app.php → 'timezone' => 'America/Sao_Paulo'
               → 'locale' => 'pt-br'
               → 'fallback_locale' => 'pt-br'
.env → APP_NAME=tcccontrol
     → DB_DATABASE=tcccontrol
app/Providers/AppServiceProvider.php → use Illuminate\Support\Facades\Schema;
            public function boot(){} → Schema::defaultStringLength(191);
php artisan migrate

-------------------------------
-------------------------------
Versões
-------------------------------
-------------------------------

Wampserver
-------------------------------
Wampserver - 3.1.4 64-bit
Apache - 2.4.35
MySQL Community Server (GPL) - 5.7.23
PHP - 7.2.10 (cli) (built: Sep 13 2018 00:48:27) ( ZTS MSVC15 (Visual C++ 2017) x64 )


Navegador
-------------------------------
1.0.1 Chromium: 78.0.3904.108 (Official Build) (64-bit)


Composer
-------------------------------
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.9.1 2019-11-01 17:20:17


Laravel
-------------------------------
Laravel Installer 3.0.1