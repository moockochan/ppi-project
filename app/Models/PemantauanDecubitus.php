<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanDecubitus",
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
 *          property="is_alih_baring",
 *          description="is_alih_baring",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_mempertahankan_alat",
 *          description="is_mempertahankan_alat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_kemerahan",
 *          description="is_kemerahan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_lecet",
 *          description="is_lecet",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_decubitus",
 *          description="is_decubitus",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="keterangan",
 *          description="keterangan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="vuser",
 *          description="vuser",
 *          type="string"
 *      )
 * )
 */
class PemantauanDecubitus extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_decubitus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'bb',
        'tb',
        'tgl_pencegahan',
        'is_alih_baring',
        'is_mempertahankan_alat',
        'tgl_pemantauan',
        'is_kemerahan',
        'is_lecet',
        'is_decubitus',
        'keterangan',
        'deleted_at',
        'vuser'
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
        'is_alih_baring' => 'string',
        'is_mempertahankan_alat' => 'string',
        'tgl_pemantauan' => 'datetime',
        'is_kemerahan' => 'string',
        'is_lecet' => 'string',
        'is_decubitus' => 'string',
        'keterangan' => 'string',
        'deleted_at' => 'string',
        'vuser' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
