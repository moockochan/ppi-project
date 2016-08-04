<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanIloRjDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanIloRjRequest;
use App\Http\Requests\UpdatePemantauanIloRjRequest;
use App\Repositories\PemantauanIloRjRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanIloRjController extends AppBaseController
{
    /** @var  PemantauanIloRjRepository */
    private $pemantauanIloRjRepository;

    public function __construct(PemantauanIloRjRepository $pemantauanIloRjRepo)
    {
        $this->pemantauanIloRjRepository = $pemantauanIloRjRepo;
    }

    /**
     * Display a listing of the PemantauanIloRj.
     *
     * @param PemantauanIloRjDataTable $pemantauanIloRjDataTable
     * @return Response
     */
    public function index(PemantauanIloRjDataTable $pemantauanIloRjDataTable)
    {
        $data = DB::select("exec spm_PPI_ILO_RJ_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanIloRjDataTable->render('pemantauanIloRjs.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanIloRj.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanIloRjs.create');
    }

    /**
     * Store a newly created PemantauanIloRj in storage.
     *
     * @param CreatePemantauanIloRjRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanIloRjRequest $request)
    {
        $input = $request->all();

        $pemantauanIloRj = $this->pemantauanIloRjRepository->create($input);

        Flash::success('PemantauanIloRj saved successfully.');

        return redirect(route('pemantauanIloRjs.index'));
    }

    /**
     * Display the specified PemantauanIloRj.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanIloRj = $this->pemantauanIloRjRepository->findWithoutFail($id);

        if (empty($pemantauanIloRj)) {
            Flash::error('PemantauanIloRj not found');

            return redirect(route('pemantauanIloRjs.index'));
        }

        return view('pemantauanIloRjs.show')->with('pemantauanIloRj', $pemantauanIloRj);
    }

    /**
     * Show the form for editing the specified PemantauanIloRj.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanIloRj = $this->pemantauanIloRjRepository->findWithoutFail($id);
        $data = DB::select("exec spm_PPI_ILO_RJ_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        if (empty($pemantauanIloRj)) {
            Flash::error('PemantauanIloRj not found');

            return redirect(route('pemantauanIloRjs.index'));
        }

        return view('pemantauanIloRjs.edit')->with('pemantauanIloRj', $pemantauanIloRj)->with('data',$data);
    }

    /**
     * Update the specified PemantauanIloRj in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanIloRjRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanIloRjRequest $request)
    {
        $pemantauanIloRj = $this->pemantauanIloRjRepository->findWithoutFail($id);

        if (empty($pemantauanIloRj)) {
            Flash::error('PemantauanIloRj not found');

            return redirect(route('pemantauanIloRjs.index'));
        }
        if(empty($request['antibiotik'])){
          $request['antibiotik']="";
        }
        $request['tgl_pemantauan']=date("Y-m-d",strtotime($request['tgl_pemantauan']));
        $pemantauanIloRj = $this->pemantauanIloRjRepository->update($request->all(), $id);

        Flash::success('PemantauanIloRj updated successfully.');

        return redirect(route('pemantauanIloRjs.index'));
    }

    /**
     * Remove the specified PemantauanIloRj from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanIloRj = $this->pemantauanIloRjRepository->findWithoutFail($id);

        if (empty($pemantauanIloRj)) {
            Flash::error('PemantauanIloRj not found');

            return redirect(route('pemantauanIloRjs.index'));
        }

        $this->pemantauanIloRjRepository->delete($id);

        Flash::success('PemantauanIloRj deleted successfully.');

        return redirect(route('pemantauanIloRjs.index'));
    }

    public function cariPasienBedah(Request $request){
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_ILO_RJ_Pasien_Operasi_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanIloRjs.data_pasien_bedah')->with('data',$data);
      /*return ("exec spm_PPI_ILO_RJ_Pasien_Operasi_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");*/
    }

    public function addIloRjObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_ilo_rj_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."',@tgl_transaksi='".date("Y-m-d")."'");
      return $data;
      //return ("exec spm_PPI_tb_ppi_ilo_rj_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."',@tgl_transaksi='".date("Y-m-d")."'");
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_ILO_RJ_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanIloRjs.table')->with('tbindex',$data);
      //return ("exec spm_PPI_ILO_RJ_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
    }
}
