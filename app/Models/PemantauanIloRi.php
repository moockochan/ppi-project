<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanIloRi",
 *      required={},
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
 *          property="is_kultur",
 *          description="is_kultur",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hasil_kultur",
 *          description="hasil_kultur",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_suhu_more_38",
 *          description="is_suhu_more_38",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_drainase",
 *          description="is_drainase",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_pus",
 *          description="is_pus",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_perforasi",
 *          description="is_perforasi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_fistula",
 *          description="is_fistula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_ilo",
 *          description="is_ilo",
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
class PemantauanIloRi extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_ilo_ri';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'tgl_transaksi',
        'tb',
        'bb',
        'is_kultur',
        'tgl_kultur',
        'hasil_kultur',
        'tgl_pemantauan',
        'is_suhu_more_38',
        'is_drainase',
        'is_pus',
        'is_perforasi',
        'is_fistula',
        'is_ilo',
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
        'tgl_transaksi' => 'datetime',
        'id_registrasi' => 'string',
        'tb' => 'string',
        'bb' => 'string',
        'is_kultur' => 'string',
        'tgl_kultur' => 'datetime',
        'hasil_kultur' => 'string',
        'tgl_pemantauan' => 'datetime',
        'is_suhu_more_38' => 'string',
        'is_drainase' => 'string',
        'is_pus' => 'string',
        'is_perforasi' => 'string',
        'is_fistula' => 'string',
        'is_ilo' => 'string',
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
