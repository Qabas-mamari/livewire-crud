# Project Livewire Steps

## First create a model + table :
```
$ php artisan make:model Student -m
```

## Migrate the table on myphpAdmin <Xampp>:
```
$ php artisan migrate
```

## Create A Foctory to add data automatically:
``` 
php artisan make:factory StudentFactory
php artisan db:seed
```

## create livewire COMPONENT:
```
php artisan make:livewire Students
```

## to run our project in local server 
```
php artisan serve
```