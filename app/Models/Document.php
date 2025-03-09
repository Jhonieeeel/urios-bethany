<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Laravel\Scout\Searchable;

class Document extends Model
{
    use Searchable;

    protected $guarded = [];

    public function documentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function toSearchableArray(): array
    {
        return [
            'filename' => $this->filename,
        ];
    }
}
