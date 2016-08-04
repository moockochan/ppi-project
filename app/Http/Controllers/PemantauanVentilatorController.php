<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanVentilatorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanVentilatorRequest;
use App\Http\Requests\UpdatePemantauanVentilatorRequest;
use App\Repositories\PemantauanVentilatorRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanVentilatorController extends AppBaseController
{
    /** @var  PemantauanVentilatorRepository */
    private $pemantauanVentilatorRepository;

    public function __construct(PemantauanVentilatorRepository $pemantauanVentilatorRepo)
    {
        $this->pemantauanVentilatorRepository = $pemantauanVentilatorRepo;
    }

    /**
     * Display a listing of the PemantauanVentilator.
     *
     * @param PemantauanVentilatorDataTable $pemantauanVentilatorDataTable
     * @return Response
     */
    public function index(PemantauanVentilatorDataTable $pemantauanVentilatorDataTable)
    {
        $data = DB::select("exec spm_PPI_Ventilator_AP_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanVentilatorDataTable->render('pemantauanVentilators.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanVentilator.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanVentilators.create');
    }

    /**
     * Store a newly created PemantauanVentilator in storage.
     *
     * @param CreatePemantauanVentilatorRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanVentilatorRequest $request)
    {
        $input = $request->all();

        $pemantauanVentilator = $this->pemantauanVentilatorRepository->create($input);

        Flash::success('PemantauanVentilator saved successfully.');

        return redirect(route('pemantauanVentilators.index'));
    }

    /**
     * Display the specified PemantauanVentilator.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanVentilator = $this->pemantauanVentilatorRepository->findWithoutFail($id);

        if (empty($pemantauanVentilator)) {
            Flash::error('PemantauanVentilator not found');

            return redirect(route('pemantauanVentilators.index'));
        }

        return view('pemantauanVentilators.show')->with('pemantauanVentilator', $pemantauanVentilator);
    }

    /**
     * Show the form for editing the specified PemantauanVentilator.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanVentilator = $this->pemantauanVentilatorRepository->findWithoutFail($id);

        if (empty($pemantauanVentilator)) {
            Flash::error('PemantauanVentilator not found');

            return redirect(route('pemantauanVentilators.index'));
        }
        $data = DB::select("exec spm_PPI_Ventilator_AP_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        return view('pemantauanVentilators.edit')->with('pemantauanVentilator', $pemantauanVentilator)->with('data',$data);
    }

    /**
     * Update the specified PemantauanVentilator in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanVentilatorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanVentilatorRequest $request)
    {
        $pemantauanVentilator = $this->pemantauanVentilatorRepository->findWithoutFail($id);
        if($request['tgl_pemantauan']==''){
          Flash::error('GAGAL SIMPAN! ::Tanggal Pemantauan Tidak Boleh Kosong::');
          return redirect(route('pemantauanVentilators.index'));
        }
        if (empty($pemantauanVentilator)) {
            Flash::error('PemantauanVentilator not found');

            return redirect(route('pemantauanVentilators.index'));
        }

        $pemantauanVentilator = $this->pemantauanVentilatorRepository->update($request->all(), $id);

        Flash::success('PemantauanVentilator updated successfully.');

        return redirect(route('pemantauanVentilators.index'));
    }

    /**
     * Remove the specified PemantauanVentilator from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanVentilator = $this->pemantauanVentilatorRepository->findWithoutFail($id);

        if (empty($pemantauanVentilator)) {
            Flash::error('PemantauanVentilator not found');

            return redirect(route('pemantauanVentilators.index'));
        }

        $this->pemantauanVentilatorRepository->delete($id);

        Flash::success('PemantauanVentilator deleted successfully.');

        return redirect(route('pemantauanVentilators.index'));
    }

    public function cariPasien(Request $request){
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Ventilator_Pasien_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanVentilators.data_pasien')->with('data',$data);
    }

    public function addVentilatorObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_ventilator_ap_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
      return $data;
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Ventilator_AP_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanVentilators.table')->with('tbindex',$data);
    }
}
