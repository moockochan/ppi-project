<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanHap",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="no_transaksi",
 *          description="no_transaksi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="id_registrasi",
 *          description="id_registrasi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bb",
 *          description="bb",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="tb",
 *          description="tb",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="is_oral_hygiene",
 *          description="is_oral_hygiene",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_suction",
 *          description="is_suction",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_fisioterapi_dada",
 *          description="is_fisioterapi_dada",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="suara_nafas",
 *          description="suara_nafas",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="rontgen",
 *          description="rontgen",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_pnemunomia_hap",
 *          description="is_pnemunomia_hap",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="keterangan",
 *          description="keterangan",
 *          type="string"
 *      )
 * )
 */
class PemantauanHap extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_hap';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'bb',
        'tb',
        'tgl_pencegahan',
        'is_oral_hygiene',
        'is_suction',
        'is_fisioterapi_dada',
        'tgl_pemantauan',
        'suara_nafas',
        'rontgen',
        'is_pnemunomia_hap',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_transaksi' => 'string',
        'id_registrasi' => 'string',
        'tgl_pencegahan' => 'datetime',
        'is_oral_hygiene' => 'string',
        'is_suction' => 'string',
        'is_fisioterapi_dada' => 'string',
        'tgl_pemantauan' => 'datetime',
        'suara_nafas' => 'string',
        'rontgen' => 'string',
        'is_pnemunomia_hap' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
