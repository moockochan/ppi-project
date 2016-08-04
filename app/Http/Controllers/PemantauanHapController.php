<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanHapDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanHapRequest;
use App\Http\Requests\UpdatePemantauanHapRequest;
use App\Repositories\PemantauanHapRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanHapController extends AppBaseController
{
    /** @var  PemantauanHapRepository */
    private $pemantauanHapRepository;

    public function __construct(PemantauanHapRepository $pemantauanHapRepo)
    {
        $this->pemantauanHapRepository = $pemantauanHapRepo;
    }

    /**
     * Display a listing of the PemantauanHap.
     *
     * @param PemantauanHapDataTable $pemantauanHapDataTable
     * @return Response
     */
    public function index(PemantauanHapDataTable $pemantauanHapDataTable)
    {
        $data = DB::select("exec spm_PPI_HAP_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanHapDataTable->render('pemantauanHaps.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanHap.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanHaps.create');
    }

    /**
     * Store a newly created PemantauanHap in storage.
     *
     * @param CreatePemantauanHapRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanHapRequest $request)
    {
        $input = $request->all();

        $pemantauanHap = $this->pemantauanHapRepository->create($input);

        Flash::success('PemantauanHap saved successfully.');

        return redirect(route('pemantauanHaps.index'));
    }

    /**
     * Display the specified PemantauanHap.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanHap = $this->pemantauanHapRepository->findWithoutFail($id);

        if (empty($pemantauanHap)) {
            Flash::error('PemantauanHap not found');

            return redirect(route('pemantauanHaps.index'));
        }

        return view('pemantauanHaps.show')->with('pemantauanHap', $pemantauanHap);
    }

    /**
     * Show the form for editing the specified PemantauanHap.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanHap = $this->pemantauanHapRepository->findWithoutFail($id);

        if (empty($pemantauanHap)) {
            Flash::error('PemantauanHap not found');

            return redirect(route('pemantauanHaps.index'));
        }
        $data = DB::select("exec spm_PPI_HAP_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        return view('pemantauanHaps.edit')->with('pemantauanHap', $pemantauanHap)->with('data',$data);
    }

    /**
     * Update the specified PemantauanHap in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanHapRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanHapRequest $request)
    {
        $pemantauanHap = $this->pemantauanHapRepository->findWithoutFail($id);

        if (empty($pemantauanHap)) {
            Flash::error('PemantauanHap not found');

            return redirect(route('pemantauanHaps.index'));
        }
        $request['tgl_pencegahan']<>'' ? $request['tgl_pencegahan'] = date("Y-m-d",strtotime($request['tgl_pencegahan'])) : $request['tgl_pencegahan'] =null;
        $request['tgl_pemantauan']<>'' ? $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan'])) : $request['tgl_pemantauan'] =null;
        $pemantauanHap = $this->pemantauanHapRepository->update($request->all(), $id);

        Flash::success('PemantauanHap updated successfully.');

        return redirect(route('pemantauanHaps.index'));
    }

    /**
     * Remove the specified PemantauanHap from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanHap = $this->pemantauanHapRepository->findWithoutFail($id);

        if (empty($pemantauanHap)) {
            Flash::error('PemantauanHap not found');

            return redirect(route('pemantauanHaps.index'));
        }

        $this->pemantauanHapRepository->delete($id);

        Flash::success('PemantauanHap deleted successfully.');

        return redirect(route('pemantauanHaps.index'));
    }

    public function cariPasien(Request $request)
    {
      # code...
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_HAP_Pasien_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanHaps.data_pasien')->with('data',$data);
    }

    public function addObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_hap_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
      return $data;
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_HAP_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanHaps.table')->with('tbindex',$data);
      //return ("exec spm_PPI_ISK_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
    }
}
