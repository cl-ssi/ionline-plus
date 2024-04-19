<?php

namespace App\Models\Sgr;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Label extends Model
{
    use HasFactory;
    protected $table = 'sgr_labels';
    
    protected $fillable = [
        'name',
        'color',
        'user_id',
        'ou_id',
    ];

    // relaciones

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
