# setup instructions

install the necessary dependencies
```
npm i
composer i
```

run below command to prepare the .env file
```
cp .env.example .env
php artisan key:generate
```

use this command to prepare the database tables
```
php artisan migrate
```

bundle the frontend files
```
npm run build
```

to run the laravel scheduler use the below command
```
php artisan schedule:work
```

then use this command to run the project
```
php artiasn serve
```
