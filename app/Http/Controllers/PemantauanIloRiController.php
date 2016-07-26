<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanIloRiDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanIloRiRequest;
use App\Http\Requests\UpdatePemantauanIloRiRequest;
use App\Repositories\PemantauanIloRiRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanIloRiController extends AppBaseController
{
    /** @var  PemantauanIloRiRepository */
    private $pemantauanIloRiRepository;

    public function __construct(PemantauanIloRiRepository $pemantauanIloRiRepo)
    {
        $this->pemantauanIloRiRepository = $pemantauanIloRiRepo;
    }

    /**
     * Display a listing of the PemantauanIloRi.
     *
     * @param PemantauanIloRiDataTable $pemantauanIloRiDataTable
     * @return Response
     */
    public function index(PemantauanIloRiDataTable $pemantauanIloRiDataTable)
    {
        return $pemantauanIloRiDataTable->render('pemantauanIloRis.index');
    }

    /**
     * Show the form for creating a new PemantauanIloRi.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanIloRis.create');
    }

    /**
     * Store a newly created PemantauanIloRi in storage.
     *
     * @param CreatePemantauanIloRiRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanIloRiRequest $request)
    {
        $input = $request->all();

        $pemantauanIloRi = $this->pemantauanIloRiRepository->create($input);

        Flash::success('PemantauanIloRi saved successfully.');

        return redirect(route('pemantauanIloRis.index'));
    }

    /**
     * Display the specified PemantauanIloRi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanIloRi = $this->pemantauanIloRiRepository->findWithoutFail($id);

        if (empty($pemantauanIloRi)) {
            Flash::error('PemantauanIloRi not found');

            return redirect(route('pemantauanIloRis.index'));
        }

        return view('pemantauanIloRis.show')->with('pemantauanIloRi', $pemantauanIloRi);
    }

    /**
     * Show the form for editing the specified PemantauanIloRi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanIloRi = $this->pemantauanIloRiRepository->findWithoutFail($id);

        if (empty($pemantauanIloRi)) {
            Flash::error('PemantauanIloRi not found');

            return redirect(route('pemantauanIloRis.index'));
        }

        return view('pemantauanIloRis.edit')->with('pemantauanIloRi', $pemantauanIloRi);
    }

    /**
     * Update the specified PemantauanIloRi in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanIloRiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanIloRiRequest $request)
    {
        $pemantauanIloRi = $this->pemantauanIloRiRepository->findWithoutFail($id);

        if (empty($pemantauanIloRi)) {
            Flash::error('PemantauanIloRi not found');

            return redirect(route('pemantauanIloRis.index'));
        }

        $pemantauanIloRi = $this->pemantauanIloRiRepository->update($request->all(), $id);

        Flash::success('PemantauanIloRi updated successfully.');

        return redirect(route('pemantauanIloRis.index'));
    }

    /**
     * Remove the specified PemantauanIloRi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanIloRi = $this->pemantauanIloRiRepository->findWithoutFail($id);

        if (empty($pemantauanIloRi)) {
            Flash::error('PemantauanIloRi not found');

            return redirect(route('pemantauanIloRis.index'));
        }

        $this->pemantauanIloRiRepository->delete($id);

        Flash::success('PemantauanIloRi deleted successfully.');

        return redirect(route('pemantauanIloRis.index'));
    }

    public function cariPasienBedah(Request $request){
      $page = Input::get('page',1);
    	//dd($page);
    	$paginate = 50;

    	$data = DB::select("exec spm_PPI_ILO_RI_Pasien_Operasi_List @nm_pasien='".$request['nm_pasien']."',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_daftar']."'");

    	$offSet = ($page * $paginate) - $paginate;
    	$itemsForCurrentPage = array_slice($data, $offSet, $paginate, true);

    	$data = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($data), $paginate, $page);
    	$data->setPath('/pemantauanIloRis');
    	return view::make('pemantauanIloRis.data_pasien_bedah')->with('data',$data);
    }
}
