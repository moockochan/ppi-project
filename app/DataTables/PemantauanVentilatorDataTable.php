<?php

namespace App\DataTables;

use App\Models\PemantauanVentilator;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanVentilatorDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanVentilators.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanVentilators = PemantauanVentilator::query();

        return $this->applyScopes($pemantauanVentilators);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'create',
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ]
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'id_registrasi' => ['name' => 'id_registrasi', 'data' => 'id_registrasi'],
            'bb' => ['name' => 'bb', 'data' => 'bb'],
            'tb' => ['name' => 'tb', 'data' => 'tb'],
            'is_faktor_resiko' => ['name' => 'is_faktor_resiko', 'data' => 'is_faktor_resiko'],
            'is_ventilator' => ['name' => 'is_ventilator', 'data' => 'is_ventilator'],
            'no_ventilator' => ['name' => 'no_ventilator', 'data' => 'no_ventilator'],
            'tgl_pasang' => ['name' => 'tgl_pasang', 'data' => 'tgl_pasang'],
            'tgl_lepas' => ['name' => 'tgl_lepas', 'data' => 'tgl_lepas'],
            'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            'is_memantau_ett_cut_presure' => ['name' => 'is_memantau_ett_cut_presure', 'data' => 'is_memantau_ett_cut_presure'],
            'is_eva_kepala_30_450' => ['name' => 'is_eva_kepala_30_450', 'data' => 'is_eva_kepala_30_450'],
            'is_oral_hygiene' => ['name' => 'is_oral_hygiene', 'data' => 'is_oral_hygiene'],
            'is_peptic_ulcer' => ['name' => 'is_peptic_ulcer', 'data' => 'is_peptic_ulcer'],
            'is_deep_urine' => ['name' => 'is_deep_urine', 'data' => 'is_deep_urine'],
            'is_penggunaan_sedatif' => ['name' => 'is_penggunaan_sedatif', 'data' => 'is_penggunaan_sedatif'],
            'tgl_assesment' => ['name' => 'tgl_assesment', 'data' => 'tgl_assesment'],
            'is_penurunan_saturasi_o2' => ['name' => 'is_penurunan_saturasi_o2', 'data' => 'is_penurunan_saturasi_o2'],
            'is_temperatur_stabil' => ['name' => 'is_temperatur_stabil', 'data' => 'is_temperatur_stabil'],
            'is_leukopenia' => ['name' => 'is_leukopenia', 'data' => 'is_leukopenia'],
            'is_sputum' => ['name' => 'is_sputum', 'data' => 'is_sputum'],
            'is_sekresi_meningkat' => ['name' => 'is_sekresi_meningkat', 'data' => 'is_sekresi_meningkat'],
            'is_wheezing' => ['name' => 'is_wheezing', 'data' => 'is_wheezing'],
            'is_batuk' => ['name' => 'is_batuk', 'data' => 'is_batuk'],
            'is_bradycardia' => ['name' => 'is_bradycardia', 'data' => 'is_bradycardia'],
            'is_kultur' => ['name' => 'is_kultur', 'data' => 'is_kultur'],
            'tgl_kultur' => ['name' => 'tgl_kultur', 'data' => 'tgl_kultur'],
            'hasil_kultur' => ['name' => 'hasil_kultur', 'data' => 'hasil_kultur'],
            'is_pneumonia' => ['name' => 'is_pneumonia', 'data' => 'is_pneumonia'],
            'keterangan' => ['name' => 'keterangan', 'data' => 'keterangan'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pemantauanVentilators';
    }
}
