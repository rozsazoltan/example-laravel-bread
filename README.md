# Example for BREAD making with Laravel Framework

<a href="https://github.com/rozsazoltan/example-laravel-bread" title="Go to GitHub Repository"><img src="https://img.shields.io/static/v1?label=rozsazoltan&message=example-laravel-bread&color=2ea44f&logo=github" alt="rozsazoltan - example-laravel-bread"></a> <a href="https://github.com/rozsazoltan/rozsazoltan/blob/main/LICENSE.md"><img src="https://img.shields.io/badge/License-MIT-2ea44f" alt="License"></a> <img src="https://komarev.com/ghpvc/?username=rozsazoltan-example-laravel-bread&label=Views" />

> B = BROWSE -> can show all exists records (in table)

> R = READ -> can show exists record (can find more information)

> E = EDIT -> can update exists record (form)

> A = ADD -> can add new record (form)

> D = DELETE -> can delete record (just a function, can call with "trash" button)

### Build database structure

Use migrations to build. `php artisan make:migration {name}`

Example: `php artisan make:migration create_phonebooks_table`

If you use **laravel standard**s: **table name is always plural**, and **model name is always singular**

[More information for Migrations](https://laravel.com/docs/9.x/migrations)

### Make models for tables

Use Eloquent to table management. Eloquent safer than native SQL codes. `php artisan make:model {name}`

Example: `php artisan make:model Phonebook`

[More information for Eloquent and Models](https://laravel.com/docs/9.x/eloquent)

### Make Controller

In controller you can define your methods. For example: What need working, if you need all records in table. You need all records, and need view a blade. `php artisan make:controller {name}`
```
...
public function show() {
    // Get all record as Array
    $items = Phonebook::get();
    
    // Return with blade (in resources/views/phonebook/index.blade.php), and give all record to blade as 'phonebooks'.
    // If you write your blade you can call all record as $phonebooks
    return view('phonebook.index')->with('phonebooks', $items);
}
...
```

[More information for Controllers](https://laravel.com/docs/9.x/controllers)

### Make Routes

If you call a link from browser header then laravel try find it in routes. If can't find it, laravel return error 404 page. If find it, laravel just will run associated command. 

You can add routes in `./routes` folder. Default routes can find in `./routes/web.php` file.
```
Route::get("test", function() {
    echo "Now testing...";
});
```
Now if you call `http://localhost:8000/test`, laravel will echo `Now testing...` text.

[More information for Routes](https://laravel.com/docs/9.x/routing)

### Make Blade files

Now just you need blade files. Here can use html, js and css codes for better result. All blades can find in `./resources/views` folder. If you need view a blade, just run `return view({name})`.

Example: `return view('phonebook.index')`, will return `./resources/views/phonebook/index.blade.php` for us.

[More information for Blade](https://laravel.com/docs/9.x/blade)
