### Installation

1.Git clone project

2.Project setting :
```sh
cp .env.example .env
```

3.Project deploy :
```sh
bash bin/deploy
```

4.Loading initial data :
```sh
php artisan db:seed --class=PeoplesTableSeeder
```
