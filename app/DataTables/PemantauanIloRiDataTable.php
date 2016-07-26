<?php

namespace App\DataTables;

use App\Models\PemantauanIloRi;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanIloRiDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanIloRis.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanIloRis = PemantauanIloRi::query();

        return $this->applyScopes($pemantauanIloRis);
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
            //'is_kultur' => ['name' => 'is_kultur', 'data' => 'is_kultur'],
            //'tgl_kultur' => ['name' => 'tgl_kultur', 'data' => 'tgl_kultur'],
            //'hasil_kultur' => ['name' => 'hasil_kultur', 'data' => 'hasil_kultur'],
            //'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            //'is_suhu_more_38' => ['name' => 'is_suhu_more_38', 'data' => 'is_suhu_more_38'],
            //'is_drainase' => ['name' => 'is_drainase', 'data' => 'is_drainase'],
            //'is_pus' => ['name' => 'is_pus', 'data' => 'is_pus'],
            //'is_perforasi' => ['name' => 'is_perforasi', 'data' => 'is_perforasi'],
            //'is_fistula' => ['name' => 'is_fistula', 'data' => 'is_fistula'],
            //'is_ilo' => ['name' => 'is_ilo', 'data' => 'is_ilo'],
            //'keterangan' => ['name' => 'keterangan', 'data' => 'keterangan'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            //'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            //'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at'],
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
        return 'pemantauanIloRis';
    }
}
