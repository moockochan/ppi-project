<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="PemantauanVentilator",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
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
 *          property="is_ventilator",
 *          description="is_ventilator",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="no_ventilator",
 *          description="no_ventilator",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_memantau_ett_cut_presure",
 *          description="is_memantau_ett_cut_presure",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_eva_kepala_30_450",
 *          description="is_eva_kepala_30_450",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_oral_hygiene",
 *          description="is_oral_hygiene",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_peptic_ulcer",
 *          description="is_peptic_ulcer",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_deep_urine",
 *          description="is_deep_urine",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_penggunaan_sedatif",
 *          description="is_penggunaan_sedatif",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_penurunan_saturasi_o2",
 *          description="is_penurunan_saturasi_o2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_temperatur_stabil",
 *          description="is_temperatur_stabil",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_leukopenia",
 *          description="is_leukopenia",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_sputum",
 *          description="is_sputum",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_sekresi_meningkat",
 *          description="is_sekresi_meningkat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_wheezing",
 *          description="is_wheezing",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_batuk",
 *          description="is_batuk",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_bradycardia",
 *          description="is_bradycardia",
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
 *          property="is_pneumonia",
 *          description="is_pneumonia",
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
 *      )
 * )
 */
class PemantauanVentilator extends Model
{
    use SoftDeletes;

    public $table = 'tb_ppi_ventilator_ap';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_registrasi',
        'bb',
        'tb',
        'is_faktor_resiko',
        'is_ventilator',
        'no_ventilator',
        'tgl_pasang',
        'tgl_lepas',
        'tgl_pemantauan',
        'is_memantau_ett_cut_presure',
        'is_eva_kepala_30_450',
        'is_oral_hygiene',
        'is_peptic_ulcer',
        'is_deep_urine',
        'is_penggunaan_sedatif',
        'tgl_assesment',
        'is_penurunan_saturasi_o2',
        'is_temperatur_stabil',
        'is_leukopenia',
        'is_sputum',
        'is_sekresi_meningkat',
        'is_wheezing',
        'is_batuk',
        'is_bradycardia',
        'is_kultur',
        'tgl_kultur',
        'hasil_kultur',
        'is_pneumonia',
        'keterangan',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_registrasi' => 'string',
        'is_faktor_resiko' => 'string',
        'is_ventilator' => 'string',
        'no_ventilator' => 'string',
        'tgl_pasang' => 'datetime',
        'tgl_lepas' => 'datetime',
        'tgl_pemantauan' => 'datetime',
        'is_memantau_ett_cut_presure' => 'string',
        'is_eva_kepala_30_450' => 'string',
        'is_oral_hygiene' => 'string',
        'is_peptic_ulcer' => 'string',
        'is_deep_urine' => 'string',
        'is_penggunaan_sedatif' => 'string',
        'tgl_assesment' => 'datetime',
        'is_penurunan_saturasi_o2' => 'string',
        'is_temperatur_stabil' => 'string',
        'is_leukopenia' => 'string',
        'is_sputum' => 'string',
        'is_sekresi_meningkat' => 'string',
        'is_wheezing' => 'string',
        'is_batuk' => 'string',
        'is_bradycardia' => 'string',
        'is_kultur' => 'string',
        'tgl_kultur' => 'datetime',
        'hasil_kultur' => 'string',
        'is_pneumonia' => 'string',
        'keterangan' => 'string',
        'deleted_at' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
