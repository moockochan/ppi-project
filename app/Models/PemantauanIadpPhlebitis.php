<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanIadpPhlebitis",
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
 *          property="is_pemasangan_kateter_v",
 *          description="is_pemasangan_kateter_v",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_hand_hygiene",
 *          description="is_hand_hygiene",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_teknis_steril",
 *          description="is_teknis_steril",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_disinfeksi",
 *          description="is_disinfeksi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_iv_line_16_26",
 *          description="is_iv_line_16_26",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_adp",
 *          description="is_adp",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_hand_hygiene_pre_inj",
 *          description="is_hand_hygiene_pre_inj",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_alkohol_pre_inj",
 *          description="is_alkohol_pre_inj",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_fixatic",
 *          description="is_fixatic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_dresing",
 *          description="is_dresing",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_selang_bersih",
 *          description="is_selang_bersih",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_lemak_protein_darah",
 *          description="is_lemak_protein_darah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_kemerahan",
 *          description="is_kemerahan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_edema_lokal",
 *          description="is_edema_lokal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is-nyeri_lokal",
 *          description="is-nyeri_lokal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_demam",
 *          description="is_demam",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_antibiotik",
 *          description="is_antibiotik",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_wb",
 *          description="is_wb",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_protein",
 *          description="is_protein",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_rl",
 *          description="is_rl",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_kultur_darah",
 *          description="is_kultur_darah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hasil_kultur_darah",
 *          description="hasil_kultur_darah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_kultur_pus",
 *          description="is_kultur_pus",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="hasil_kultur_pus",
 *          description="hasil_kultur_pus",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_phlebitis",
 *          description="is_phlebitis",
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
class PemantauanIadpPhlebitis extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_iadp_phlebitis';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'no_transaksi',
        'id_registrasi',
        'bb',
        'tb',
        'is_faktor_resiko',
        'is_pemasangan_kateter_v',
        'tgl_pasang',
        'tgl_lepas',
        'is_hand_hygiene',
        'is_teknis_steril',
        'is_disinfeksi',
        'is_iv_line_16_26',
        'is_adp',
        'tgl_pemantauan',
        'is_hand_hygiene_pre_inj',
        'is_alkohol_pre_inj',
        'is_fixatic',
        'is_dresing',
        'is_selang_bersih',
        'is_lemak_protein_darah',
        'tgl_assesment',
        'is_kemerahan',
        'is_edema_lokal',
        'is-nyeri_lokal',
        'is_demam',
        'is_antibiotik',
        'is_wb',
        'is_protein',
        'is_rl',
        'is_kultur_darah',
        'tgl_kultur_darah',
        'hasil_kultur_darah',
        'is_kultur_pus',
        'tgl_kultur_pus',
        'hasil_kultur_pus',
        'is_phlebitis',
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
        'is_pemasangan_kateter_v' => 'string',
        'tgl_pasang' => 'datetime',
        'tgl_lepas' => 'datetime',
        'is_hand_hygiene' => 'string',
        'is_teknis_steril' => 'string',
        'is_disinfeksi' => 'string',
        'is_iv_line_16_26' => 'string',
        'is_adp' => 'string',
        'tgl_pemantauan' => 'datetime',
        'is_hand_hygiene_pre_inj' => 'string',
        'is_alkohol_pre_inj' => 'string',
        'is_fixatic' => 'string',
        'is_dresing' => 'string',
        'is_selang_bersih' => 'string',
        'is_lemak_protein_darah' => 'string',
        'tgl_assesment' => 'datetime',
        'is_kemerahan' => 'string',
        'is_edema_lokal' => 'string',
        'is-nyeri_lokal' => 'string',
        'is_demam' => 'string',
        'is_antibiotik' => 'string',
        'is_wb' => 'string',
        'is_protein' => 'string',
        'is_rl' => 'string',
        'is_kultur_darah' => 'string',
        'tgl_kultur_darah' => 'datetime',
        'hasil_kultur_darah' => 'string',
        'is_kultur_pus' => 'string',
        'tgl_kultur_pus' => 'datetime',
        'hasil_kultur_pus' => 'string',
        'is_phlebitis' => 'string',
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
