<?php

namespace App\Models\Document;

use App\Models\Document\SignatureRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EndorseType extends Model
{
    use HasFactory;

    protected $table = 'doc_endorse_types';

    protected $fillable = [
        'name',
    ];

    public function signatureRequests(): HasMany
    {
        return $this->hasMany(SignatureRequest::class);
    }

}
