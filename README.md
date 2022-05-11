# laravel-uuids

Laravel UUIDs is a straightforward library for creating models with unique, string-based IDs.

# Requirements

- PHP 7.4 or above

# Installation

`composer require sammakescode/laravel-uuids`

# Usage

## In your migrations

Firstly, ensure your migrations are using strings for their IDs. For example, the user migration...

    Schema::create('users', function (Blueprint $table) {
        $table->string('id')->unique()->primary();
        ...
    });

## In your models

Secondly, in your User model use the UUIDs trait.

    <?php
    
    namespace App\Models;
    
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use SamMakesCode\LaravelUUIDs\UUIDs;
    
    class User extends Authenticatable
    {
        use UUIDs;
        ...
    }

That's it! 
