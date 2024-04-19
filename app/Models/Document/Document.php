<?php

namespace App\Models\Document;

use App\Models\Document\Type;
use App\Models\Parameter\Establishment;
use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Document extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'internal_number',
        'date',
        'type_id',
        'reserved',
        'antecedent',
        'responsible',
        'subject',
        'from',
        'for',
        'greater_hierarchy',
        'distribution',
        'content',
        'file',
        'user_id',
        'organizational_unit_id',
        'file_to_sign_id',
        'establishment_id',
        'signature_id',
    ];

    protected $table = 'documents';

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Attributes to exclude from the Audit.
     *
     * @var array
     */
    protected $auditExclude = [
        'content',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class)->withTrashed();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class)->withTrashed();
    }

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }




    /**
     * Get View Name from document type
     */
    public function getViewNameAttribute(): string
    {
        if ( $this->type ) {
            $name = $this->type->name;
            // Reemplaza los acentos con caracteres no acentuados
            $name = iconv('UTF-8', 'ASCII//TRANSLIT', $name);
            // Convierte a minúsculas y reemplaza espacios con guiones bajos
            $name = strtolower(str_replace(' ', '_', $name));
            // Elimina cualquier otro carácter no alfanumérico
            $name = preg_replace('/[^a-z0-9_]/', '', $name);
            return $name;
        } else {
            return 'show';
        }
    }

    public function getFromHtmlAttribute(): string
    {
        return $this->from ? str_replace("/", "<br>", $this->from) : '';
    }

    public function getForHtmlAttribute(): string
    {
        return $this->for ? str_replace("/", "<br>", $this->for) : '';
    }

    public function getAntecedentHtmlAttribute(): string
    {
        return str_replace("/", "<br>", $this->antecedent);
    }

    public function getResponsiblesArrayAttribute(): array
    {
        return explode("\n", $this->responsible);
    }

    public function getResponsibleHtmlAttribute(): string
    {
        return $this->responsible ? str_replace("\n", "<br>", $this->responsible) : '';
    }

    public function getContentHtmlAttribute(): string
    {
        return str_replace("<!-- pagebreak -->", '<div style="page-break-after: always;"></div>', $this->content);
    }

    public function getDistributionHtmlAttribute(): string
    {
        $chars     = ["<", ">", "\n"];
        $htmlChars = ["&lt;", "&gt;", "<br>"];

        return str_replace($chars, $htmlChars, $this->distribution);
    }

}
