<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanIsk",
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
 *          property="is_faktor_resiko",
 *          description="is_faktor_resiko",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_revisi_urine",
 *          description="is_revisi_urine",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_pasien_terminal",
 *          description="is_pasien_terminal",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_balance_cairan",
 *          description="is_balance_cairan",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_program_operasi",
 *          description="is_program_operasi",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_immobilisasi",
 *          description="is_immobilisasi",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="is_teknis_steril",
 *          description="is_teknis_steril",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_hand_hygiene",
 *          description="is_hand_hygiene",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_disinfeksi",
 *          description="is_disinfeksi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_aliran_lancar",
 *          description="is_aliran_lancar",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_selang_bersih",
 *          description="is_selang_bersih",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_closed",
 *          description="is_closed",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_pengosongan_urine",
 *          description="is_pengosongan_urine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_urine_bag_menggantung",
 *          description="is_urine_bag_menggantung",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_perineal",
 *          description="is_perineal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_urine_bag_rendah",
 *          description="is_urine_bag_rendah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_suhu_more_38",
 *          description="is_suhu_more_38",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_nyeri",
 *          description="is_nyeri",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_pus",
 *          description="is_pus",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_leukosit_urine",
 *          description="is_leukosit_urine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_pemeriksaan_urine",
 *          description="is_pemeriksaan_urine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hasil_urine",
 *          description="hasil_urine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_biakan",
 *          description="is_biakan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hasil_biakan",
 *          description="hasil_biakan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_isk",
 *          description="is_isk",
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
class PemantauanIsk extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_isk';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'bb',
        'tb',
        'is_faktor_resiko',
        'tgl_pasang',
        'tgl_lepas',
        'is_revisi_urine',
        'is_pasien_terminal',
        'is_balance_cairan',
        'is_program_operasi',
        'is_immobilisasi',
        'is_teknis_steril',
        'is_hand_hygiene',
        'is_disinfeksi',
        'tgl_pemantauan',
        'is_aliran_lancar',
        'is_selang_bersih',
        'is_closed',
        'is_pengosongan_urine',
        'is_urine_bag_menggantung',
        'is_perineal',
        'is_urine_bag_rendah',
        'tgl_assesment',
        'is_suhu_more_38',
        'is_nyeri',
        'is_pus',
        'is_leukosit_urine',
        'is_pemeriksaan_urine',
        'tgl_urine',
        'hasil_urine',
        'is_biakan',
        'tgl_biakan',
        'hasil_biakan',
        'is_isk',
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
        'is_faktor_resiko' => 'string',
        'tgl_pasang' => 'datetime',
        'tgl_lepas' => 'datetime',
        'is_revisi_urine' => 'boolean',
        'is_pasien_terminal' => 'boolean',
        'is_balance_cairan' => 'boolean',
        'is_program_operasi' => 'boolean',
        'is_immobilisasi' => 'boolean',
        'is_teknis_steril' => 'string',
        'is_hand_hygiene' => 'string',
        'is_disinfeksi' => 'string',
        'tgl_pemantauan' => 'datetime',
        'is_aliran_lancar' => 'string',
        'is_selang_bersih' => 'string',
        'is_closed' => 'string',
        'is_pengosongan_urine' => 'string',
        'is_urine_bag_menggantung' => 'string',
        'is_perineal' => 'string',
        'is_urine_bag_rendah' => 'string',
        'tgl_assesment' => 'datetime',
        'is_suhu_more_38' => 'string',
        'is_nyeri' => 'string',
        'is_pus' => 'string',
        'is_leukosit_urine' => 'string',
        'is_pemeriksaan_urine' => 'string',
        'tgl_urine' => 'datetime',
        'hasil_urine' => 'string',
        'is_biakan' => 'string',
        'tgl_biakan' => 'datetime',
        'hasil_biakan' => 'string',
        'is_isk' => 'string',
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
