<?php

namespace App\DataTables;

use App\Models\PemantauanIsk;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanIskDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanIsks.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanIsks = PemantauanIsk::query();

        return $this->applyScopes($pemantauanIsks);
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
            'no_transaksi' => ['name' => 'no_transaksi', 'data' => 'no_transaksi'],
            'id_registrasi' => ['name' => 'id_registrasi', 'data' => 'id_registrasi'],
            'bb' => ['name' => 'bb', 'data' => 'bb'],
            'tb' => ['name' => 'tb', 'data' => 'tb'],
            'is_faktor_resiko' => ['name' => 'is_faktor_resiko', 'data' => 'is_faktor_resiko'],
            'tgl_pasang' => ['name' => 'tgl_pasang', 'data' => 'tgl_pasang'],
            'tgl_lepas' => ['name' => 'tgl_lepas', 'data' => 'tgl_lepas'],
            'is_revisi_urine' => ['name' => 'is_revisi_urine', 'data' => 'is_revisi_urine'],
            'is_pasien_terminal' => ['name' => 'is_pasien_terminal', 'data' => 'is_pasien_terminal'],
            'is_balance_cairan' => ['name' => 'is_balance_cairan', 'data' => 'is_balance_cairan'],
            'is_program_operasi' => ['name' => 'is_program_operasi', 'data' => 'is_program_operasi'],
            'is_immobilisasi' => ['name' => 'is_immobilisasi', 'data' => 'is_immobilisasi'],
            'is_teknis_steril' => ['name' => 'is_teknis_steril', 'data' => 'is_teknis_steril'],
            'is_hand_hygiene' => ['name' => 'is_hand_hygiene', 'data' => 'is_hand_hygiene'],
            'is_disinfeksi' => ['name' => 'is_disinfeksi', 'data' => 'is_disinfeksi'],
            'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            'is_aliran_lancar' => ['name' => 'is_aliran_lancar', 'data' => 'is_aliran_lancar'],
            'is_selang_bersih' => ['name' => 'is_selang_bersih', 'data' => 'is_selang_bersih'],
            'is_closed' => ['name' => 'is_closed', 'data' => 'is_closed'],
            'is_pengosongan_urine' => ['name' => 'is_pengosongan_urine', 'data' => 'is_pengosongan_urine'],
            'is_urine_bag_menggantung' => ['name' => 'is_urine_bag_menggantung', 'data' => 'is_urine_bag_menggantung'],
            'is_perineal' => ['name' => 'is_perineal', 'data' => 'is_perineal'],
            'is_urine_bag_rendah' => ['name' => 'is_urine_bag_rendah', 'data' => 'is_urine_bag_rendah'],
            'tgl_assesment' => ['name' => 'tgl_assesment', 'data' => 'tgl_assesment'],
            'is_suhu_more_38' => ['name' => 'is_suhu_more_38', 'data' => 'is_suhu_more_38'],
            'is_nyeri' => ['name' => 'is_nyeri', 'data' => 'is_nyeri'],
            'is_pus' => ['name' => 'is_pus', 'data' => 'is_pus'],
            'is_leukosit_urine' => ['name' => 'is_leukosit_urine', 'data' => 'is_leukosit_urine'],
            'is_pemeriksaan_urine' => ['name' => 'is_pemeriksaan_urine', 'data' => 'is_pemeriksaan_urine'],
            'tgl_urine' => ['name' => 'tgl_urine', 'data' => 'tgl_urine'],
            'hasil_urine' => ['name' => 'hasil_urine', 'data' => 'hasil_urine'],
            'is_biakan' => ['name' => 'is_biakan', 'data' => 'is_biakan'],
            'tgl_biakan' => ['name' => 'tgl_biakan', 'data' => 'tgl_biakan'],
            'hasil_biakan' => ['name' => 'hasil_biakan', 'data' => 'hasil_biakan'],
            'is_isk' => ['name' => 'is_isk', 'data' => 'is_isk'],
            'keterangan' => ['name' => 'keterangan', 'data' => 'keterangan'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at'],
            'vuser' => ['name' => 'vuser', 'data' => 'vuser']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pemantauanIsks';
    }
}
