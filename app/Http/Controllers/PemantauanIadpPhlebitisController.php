<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanIadpPhlebitisDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanIadpPhlebitisRequest;
use App\Http\Requests\UpdatePemantauanIadpPhlebitisRequest;
use App\Repositories\PemantauanIadpPhlebitisRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanIadpPhlebitisController extends AppBaseController
{
    /** @var  PemantauanIadpPhlebitisRepository */
    private $pemantauanIadpPhlebitisRepository;

    public function __construct(PemantauanIadpPhlebitisRepository $pemantauanIadpPhlebitisRepo)
    {
        $this->pemantauanIadpPhlebitisRepository = $pemantauanIadpPhlebitisRepo;
    }

    /**
     * Display a listing of the PemantauanIadpPhlebitis.
     *
     * @param PemantauanIadpPhlebitisDataTable $pemantauanIadpPhlebitisDataTable
     * @return Response
     */
    public function index(PemantauanIadpPhlebitisDataTable $pemantauanIadpPhlebitisDataTable)
    {
        $data = DB::select("exec spm_PPI_Phlebitis_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanIadpPhlebitisDataTable->render('pemantauanIadpPhlebitis.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanIadpPhlebitis.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanIadpPhlebitis.create');
    }

    /**
     * Store a newly created PemantauanIadpPhlebitis in storage.
     *
     * @param CreatePemantauanIadpPhlebitisRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanIadpPhlebitisRequest $request)
    {
        $input = $request->all();

        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->create($input);

        Flash::success('PemantauanIadpPhlebitis saved successfully.');

        return redirect(route('pemantauanIadpPhlebitis.index'));
    }

    /**
     * Display the specified PemantauanIadpPhlebitis.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->findWithoutFail($id);

        if (empty($pemantauanIadpPhlebitis)) {
            Flash::error('PemantauanIadpPhlebitis not found');

            return redirect(route('pemantauanIadpPhlebitis.index'));
        }

        return view('pemantauanIadpPhlebitis.show')->with('pemantauanIadpPhlebitis', $pemantauanIadpPhlebitis);
    }

    /**
     * Show the form for editing the specified PemantauanIadpPhlebitis.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->findWithoutFail($id);

        if (empty($pemantauanIadpPhlebitis)) {
            Flash::error('PemantauanIadpPhlebitis not found');

            return redirect(route('pemantauanIadpPhlebitis.index'));
        }
        $data = DB::select("exec spm_PPI_Phlebitis_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        return view('pemantauanIadpPhlebitis.edit')->with('pemantauanIadpPhlebitis', $pemantauanIadpPhlebitis)->with('data',$data);
    }

    /**
     * Update the specified PemantauanIadpPhlebitis in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanIadpPhlebitisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanIadpPhlebitisRequest $request)
    {
        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->findWithoutFail($id);

        if (empty($pemantauanIadpPhlebitis)) {
            Flash::error('PemantauanIadpPhlebitis not found');

            return redirect(route('pemantauanIadpPhlebitis.index'));
        }
        $request['tgl_pasang']<>'' ? $request['tgl_pasang'] = date("Y-m-d",strtotime($request['tgl_pasang'])) : $request['tgl_pasang'] =null;
        $request['tgl_lepas']<>'' ? $request['tgl_lepas'] = date("Y-m-d",strtotime($request['tgl_lepas'])) : $request['tgl_lepas'] =null;
        $request['tgl_pemantauan']<>'' ? $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan'])) : $request['tgl_pemantauan'] =null;
        $request['tgl_assesment']<>'' ? $request['tgl_assesment'] = date("Y-m-d",strtotime($request['tgl_assesment'])) : $request['tgl_assesment'] =null;
        $request['tgl_kultur_darah']<>'' ? $request['tgl_kultur_darah'] = date("Y-m-d",strtotime($request['tgl_kultur_darah'])) : $request['tgl_kultur_darah'] =null;
        $request['tgl_kultur_pus']<>'' ? $request['tgl_kultur_pus'] = date("Y-m-d",strtotime($request['tgl_kultur_pus'])) : $request['tgl_kultur_pus'] =null;
        if(!isset( $request['is_antibiotik'] )) { $request['is_antibiotik'] = 0; }
        if(!isset( $request['is_wb']) ) { $request['is_wb'] = 0;}
        if(!isset( $request['is_protein']) ) { $request['is_protein'] = 0; }
        if(!isset( $request['is_rl']) ) { $request['is_rl'] = 0; }
        
        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->update($request->all(), $id);

        Flash::success('PemantauanIadpPhlebitis updated successfully.');

        return redirect(route('pemantauanIadpPhlebitis.index'));
    }

    /**
     * Remove the specified PemantauanIadpPhlebitis from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanIadpPhlebitis = $this->pemantauanIadpPhlebitisRepository->findWithoutFail($id);

        if (empty($pemantauanIadpPhlebitis)) {
            Flash::error('PemantauanIadpPhlebitis not found');

            return redirect(route('pemantauanIadpPhlebitis.index'));
        }

        $this->pemantauanIadpPhlebitisRepository->delete($id);

        Flash::success('PemantauanIadpPhlebitis deleted successfully.');

        return redirect(route('pemantauanIadpPhlebitis.index'));
    }

    public function cariPasien(Request $request){
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Phlebitis_Pasien_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanIadpPhlebitis.data_pasien')->with('data',$data);
    }

    public function addObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_phlebitis_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
      return $data;
      //return ("exec spm_PPI_tb_ppi_phlebitis_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Phlebitis_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanIadpPhlebitis.table')->with('tbindex',$data);
      //return ("exec spm_PPI_Phlebitis_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
    }
}
