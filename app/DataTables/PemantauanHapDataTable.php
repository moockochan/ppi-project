<?php

namespace App\DataTables;

use App\Models\PemantauanHap;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanHapDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanHaps.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanHaps = PemantauanHap::query();

        return $this->applyScopes($pemantauanHaps);
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
            'tgl_pencegahan' => ['name' => 'tgl_pencegahan', 'data' => 'tgl_pencegahan'],
            'is_oral_hygiene' => ['name' => 'is_oral_hygiene', 'data' => 'is_oral_hygiene'],
            'is_suction' => ['name' => 'is_suction', 'data' => 'is_suction'],
            'is_fisioterapi_dada' => ['name' => 'is_fisioterapi_dada', 'data' => 'is_fisioterapi_dada'],
            'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            'suara_nafas' => ['name' => 'suara_nafas', 'data' => 'suara_nafas'],
            'rontgen' => ['name' => 'rontgen', 'data' => 'rontgen'],
            'is_pnemunomia_hap' => ['name' => 'is_pnemunomia_hap', 'data' => 'is_pnemunomia_hap'],
            'keterangan' => ['name' => 'keterangan', 'data' => 'keterangan'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pemantauanHaps';
    }
}
