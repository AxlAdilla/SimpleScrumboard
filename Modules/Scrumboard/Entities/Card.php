<?php

namespace Modules\Scrumboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Scrumboard\Database\factories\CardFactory;

class Card extends Model
{
    use HasFactory;

    protected $guarded= [];
    protected $fillable= ['title', 'description', 'color', 'board_id'];
    
    protected static function newFactory()
    {
        return CardFactory::new();
    }

    public function board(): BelongsTo 
    {
        return $this->belongsTo(Board::class);
    }
}
