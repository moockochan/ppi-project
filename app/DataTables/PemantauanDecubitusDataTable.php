<?php

namespace App\DataTables;

use App\Models\PemantauanDecubitus;
use Form;
use Yajra\Datatables\Services\DataTable;

class PemantauanDecubitusDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pemantauanDecubituses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pemantauanDecubituses = PemantauanDecubitus::query();

        return $this->applyScopes($pemantauanDecubituses);
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
            'is_alih_baring' => ['name' => 'is_alih_baring', 'data' => 'is_alih_baring'],
            'is_mempertahankan_alat' => ['name' => 'is_mempertahankan_alat', 'data' => 'is_mempertahankan_alat'],
            'tgl_pemantauan' => ['name' => 'tgl_pemantauan', 'data' => 'tgl_pemantauan'],
            'is_kemerahan' => ['name' => 'is_kemerahan', 'data' => 'is_kemerahan'],
            'is_lecet' => ['name' => 'is_lecet', 'data' => 'is_lecet'],
            'is_decubitus' => ['name' => 'is_decubitus', 'data' => 'is_decubitus'],
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
        return 'pemantauanDecubituses';
    }
}
