<?php

namespace SamMakesCode\LaravelUUIDs;

use Illuminate\Support\Str;

/**
 * @property string $id
 */
trait UUIDs
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Str::uuid();
        });
    }

    public function getIncrementing(): bool
    {
        return false;
    }

    public function getKeyType(): string
    {
        return 'string';
    }
}
