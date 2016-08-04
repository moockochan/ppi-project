<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanIskDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanIskRequest;
use App\Http\Requests\UpdatePemantauanIskRequest;
use App\Repositories\PemantauanIskRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanIskController extends AppBaseController
{
    /** @var  PemantauanIskRepository */
    private $pemantauanIskRepository;

    public function __construct(PemantauanIskRepository $pemantauanIskRepo)
    {
        $this->pemantauanIskRepository = $pemantauanIskRepo;
    }

    /**
     * Display a listing of the PemantauanIsk.
     *
     * @param PemantauanIskDataTable $pemantauanIskDataTable
     * @return Response
     */
    public function index(PemantauanIskDataTable $pemantauanIskDataTable)
    {
        $data = DB::select("exec spm_PPI_ISK_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanIskDataTable->render('pemantauanIsks.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanIsk.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanIsks.create');
    }

    /**
     * Store a newly created PemantauanIsk in storage.
     *
     * @param CreatePemantauanIskRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanIskRequest $request)
    {
        $input = $request->all();

        $pemantauanIsk = $this->pemantauanIskRepository->create($input);

        Flash::success('PemantauanIsk saved successfully.');

        return redirect(route('pemantauanIsks.index'));
    }

    /**
     * Display the specified PemantauanIsk.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanIsk = $this->pemantauanIskRepository->findWithoutFail($id);

        if (empty($pemantauanIsk)) {
            Flash::error('PemantauanIsk not found');

            return redirect(route('pemantauanIsks.index'));
        }

        return view('pemantauanIsks.show')->with('pemantauanIsk', $pemantauanIsk);
    }

    /**
     * Show the form for editing the specified PemantauanIsk.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanIsk = $this->pemantauanIskRepository->findWithoutFail($id);

        if (empty($pemantauanIsk)) {
            Flash::error('PemantauanIsk not found');

            return redirect(route('pemantauanIsks.index'));
        }
        $data = DB::select("exec spm_PPI_ISK_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        return view('pemantauanIsks.edit')->with('pemantauanIsk', $pemantauanIsk)->with('data',$data);
    }

    /**
     * Update the specified PemantauanIsk in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanIskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanIskRequest $request)
    {
        $pemantauanIsk = $this->pemantauanIskRepository->findWithoutFail($id);

        if (empty($pemantauanIsk)) {
            Flash::error('PemantauanIsk not found');

            return redirect(route('pemantauanIsks.index'));
        }

        $request['tgl_pasang']<>'' ? $request['tgl_pasang'] = date("Y-m-d",strtotime($request['tgl_pasang'])) : $request['tgl_pasang'] =null;
        $request['tgl_lepas']<>'' ? $request['tgl_lepas'] = date("Y-m-d",strtotime($request['tgl_lepas'])) : $request['tgl_lepas'] =null;
        $request['tgl_pemantauan']<>'' ? $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan'])) : $request['tgl_pemantauan'] =null;
        $request['tgl_urine']<>'' ? $request['tgl_urine'] = date("Y-m-d",strtotime($request['tgl_urine'])) : $request['tgl_urine'] =null;
        $request['tgl_assesment']<>'' ? $request['tgl_assesment'] = date("Y-m-d",strtotime($request['tgl_assesment'])) : $request['tgl_assesment'] =null;
        $request['tgl_biakan']<>'' ? $request['tgl_biakan'] = date("Y-m-d",strtotime($request['tgl_biakan'])) : $request['tgl_biakan'] =null;
        if(!isset( $request['is_revisi_urine'] )) { $request['is_revisi_urine'] = 0; }
        if(!isset( $request['is_pasien_terminal']) ) { $request['is_pasien_terminal'] = 0;}
        if(!isset( $request['is_balance_cairan']) ) { $request['is_balance_cairan'] = 0; }
        if(!isset( $request['is_program_operasi']) ) { $request['is_program_operasi'] = 0; }
        if(!isset( $request['is_immobilisasi']) ) { $request['is_immobilisasi'] = 0;}
        $pemantauanIsk = $this->pemantauanIskRepository->update($request->all(), $id);

        Flash::success('PemantauanIsk updated successfully.');

        return redirect(route('pemantauanIsks.index'));
    }

    /**
     * Remove the specified PemantauanIsk from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanIsk = $this->pemantauanIskRepository->findWithoutFail($id);

        if (empty($pemantauanIsk)) {
            Flash::error('PemantauanIsk not found');

            return redirect(route('pemantauanIsks.index'));
        }

        $this->pemantauanIskRepository->delete($id);

        Flash::success('PemantauanIsk deleted successfully.');

        return redirect(route('pemantauanIsks.index'));
    }

    public function cariPasien(Request $request)
    {
      # code...
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_ISK_Pasien_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanIsks.data_pasien')->with('data',$data);
    }

    public function addIskObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_isk_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
      return $data;
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_ISK_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanIsks.table')->with('tbindex',$data);
      //return ("exec spm_PPI_ISK_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
    }
}
