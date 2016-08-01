<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanIloRj",
 *      required={},

 * )
 */
class PemantauanIloRj extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_ilo_rj';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'tb',
        'bb',
        'tgl_pemantauan',
        'kd_pemeriksa',
        'is_suhu_more_38',
        'is_tanda_peradangan',
        'is_pus',
        'is_perforasi',
        'antibiotik',
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
      'tb' => 'integer',
      'bb' => 'integer',
      'tgl_pemantauan' => 'datetime',
      'kd_pemeriksa' => 'integer',
      'is_suhu_more_38' => 'string',
      'is_tanda_peradangan' => 'string',
      'is_pus' => 'string',
      'is_perforasi' => 'string',
      'antibiotik' => 'array',
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
