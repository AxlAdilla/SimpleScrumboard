<?php

namespace Modules\Scrumboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Scrumboard\Database\factories\BoardFactory;

class Board extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $guarded= [];
    
    protected static function newFactory()
    {
        return BoardFactory::new();
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
