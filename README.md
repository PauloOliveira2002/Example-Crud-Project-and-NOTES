- BUSCAR AS COISAS NECESSARIAS PARA INSTALAR O LARAVEL -
composer global require laravel/installer 



- CRIAR O PROJECTO “blog” É O NOME -
composer create-project --prefer-dist laravel/laravel:^7.0 blog



- CRIAR SV -
php artisan serve



- INSTALAR AUTENTICAÇÃO -
composer require laravel/ui:^2.4	1º
php artisan ui vue --auth		2º
npm install			3º
npm run dev			4º



- CRIAR A BASE DE DADOS -
ABRIR ".env" , mudar DB_DATABASE



- EXECUTAR OS CREATES NA BASE DE DADOS -
php artisan migrate



- LIMPAR CACHE -
composer dump-autoload
php artisan optimize:clear



- MONTAR E REFRESH A BASE DE DADOS E FAZER AS SEEDS -
php artisan migrate:fresh –seed



- CRIAR MODEL / CONTROLER / ETC -
php artisan make:model Post -a
