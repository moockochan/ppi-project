<?php

namespace App\DataTables;

use App\Models\PemantauanIadpPhlebitis;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanIadpPhlebitisDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanIadpPhlebitis.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanIadpPhlebitis = PemantauanIadpPhlebitis::query();

        return $this->applyScopes($pemantauanIadpPhlebitis);
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
            'is_pemasangan_kateter_v' => ['name' => 'is_pemasangan_kateter_v', 'data' => 'is_pemasangan_kateter_v'],
            'tgl_pasang' => ['name' => 'tgl_pasang', 'data' => 'tgl_pasang'],
            'tgl_lepas' => ['name' => 'tgl_lepas', 'data' => 'tgl_lepas'],
            'is_hand_hygiene' => ['name' => 'is_hand_hygiene', 'data' => 'is_hand_hygiene'],
            'is_teknis_steril' => ['name' => 'is_teknis_steril', 'data' => 'is_teknis_steril'],
            'is_disinfeksi' => ['name' => 'is_disinfeksi', 'data' => 'is_disinfeksi'],
            'is_iv_line_16_26' => ['name' => 'is_iv_line_16_26', 'data' => 'is_iv_line_16_26'],
            'is_adp' => ['name' => 'is_adp', 'data' => 'is_adp'],
            'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            'is_hand_hygiene_pre_inj' => ['name' => 'is_hand_hygiene_pre_inj', 'data' => 'is_hand_hygiene_pre_inj'],
            'is_alkohol_pre_inj' => ['name' => 'is_alkohol_pre_inj', 'data' => 'is_alkohol_pre_inj'],
            'is_fixatic' => ['name' => 'is_fixatic', 'data' => 'is_fixatic'],
            'is_dresing' => ['name' => 'is_dresing', 'data' => 'is_dresing'],
            'is_selang_bersih' => ['name' => 'is_selang_bersih', 'data' => 'is_selang_bersih'],
            'is_lemak_protein_darah' => ['name' => 'is_lemak_protein_darah', 'data' => 'is_lemak_protein_darah'],
            'tgl_assesment' => ['name' => 'tgl_assesment', 'data' => 'tgl_assesment'],
            'is_kemerahan' => ['name' => 'is_kemerahan', 'data' => 'is_kemerahan'],
            'is_edema_lokal' => ['name' => 'is_edema_lokal', 'data' => 'is_edema_lokal'],
            'is-nyeri_lokal' => ['name' => 'is-nyeri_lokal', 'data' => 'is-nyeri_lokal'],
            'is_demam' => ['name' => 'is_demam', 'data' => 'is_demam'],
            'is_antibiotik' => ['name' => 'is_antibiotik', 'data' => 'is_antibiotik'],
            'is_wb' => ['name' => 'is_wb', 'data' => 'is_wb'],
            'is_protein' => ['name' => 'is_protein', 'data' => 'is_protein'],
            'is_rl' => ['name' => 'is_rl', 'data' => 'is_rl'],
            'is_kultur_darah' => ['name' => 'is_kultur_darah', 'data' => 'is_kultur_darah'],
            'tgl_kultur_darah' => ['name' => 'tgl_kultur_darah', 'data' => 'tgl_kultur_darah'],
            'hasil_kultur_darah' => ['name' => 'hasil_kultur_darah', 'data' => 'hasil_kultur_darah'],
            'is_kultur_pus' => ['name' => 'is_kultur_pus', 'data' => 'is_kultur_pus'],
            'tgl_kultur_pus' => ['name' => 'tgl_kultur_pus', 'data' => 'tgl_kultur_pus'],
            'hasil_kultur_pus' => ['name' => 'hasil_kultur_pus', 'data' => 'hasil_kultur_pus'],
            'is_phlebitis' => ['name' => 'is_phlebitis', 'data' => 'is_phlebitis'],
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
        return 'pemantauanIadpPhlebitis';
    }
}
