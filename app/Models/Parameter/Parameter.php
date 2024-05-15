<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Establishment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parameter extends Model
{
    use HasFactory;

    protected $table = 'cfg_parameters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module',
        'parameter',
        'value',
        'description',
        'establishment_id',
    ];

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    /** Requiere revisión para que no se caiga en caso de que no exista el parámetro */
    // public static function get($module, $parameter, $establishment_id = null)
    // {
    //     $query = Parameter::where('module', $module);
    //         // ->where('parameter', $parameter);
    //     if(is_array($parameter)){
    //         $query->whereIn('parameter', $parameter);
    //     }else{
    //         $query->where('parameter', $parameter);
    //     }

    //     if ($establishment_id !== null) {
    //         if(is_array($establishment_id)){
    //             $query->whereIn('establishment_id', $establishment_id);
    //         }else{
    //             $query->where('establishment_id', $establishment_id);
    //         }
    //     }

    //     /** 
    //      * @alupa: 2021-07-20
    //      * $query->first()->value da error si el parámetro no existe, debería retornar null.
    //      */
    //     if(isset($parameter)) return is_array($parameter) || is_array($establishment_id) ? $query->pluck('value')->toArray() : ($query->first()->value ?? null);
    //     else return null;
    // }
}
