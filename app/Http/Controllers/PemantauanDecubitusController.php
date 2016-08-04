<?php

namespace App\Http\Controllers;

use App\DataTables\PemantauanDecubitusDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePemantauanDecubitusRequest;
use App\Http\Requests\UpdatePemantauanDecubitusRequest;
use App\Repositories\PemantauanDecubitusRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Illuminate\Http\Request;

class PemantauanDecubitusController extends AppBaseController
{
    /** @var  PemantauanDecubitusRepository */
    private $pemantauanDecubitusRepository;

    public function __construct(PemantauanDecubitusRepository $pemantauanDecubitusRepo)
    {
        $this->pemantauanDecubitusRepository = $pemantauanDecubitusRepo;
    }

    /**
     * Display a listing of the PemantauanDecubitus.
     *
     * @param PemantauanDecubitusDataTable $pemantauanDecubitusDataTable
     * @return Response
     */
    public function index(PemantauanDecubitusDataTable $pemantauanDecubitusDataTable)
    {
        $data = DB::select("exec spm_PPI_Decubitus_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanDecubitusDataTable->render('pemantauanDecubituses.index')->with('tbindex',$data);
    }

    /**
     * Show the form for creating a new PemantauanDecubitus.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemantauanDecubituses.create');
    }

    /**
     * Store a newly created PemantauanDecubitus in storage.
     *
     * @param CreatePemantauanDecubitusRequest $request
     *
     * @return Response
     */
    public function store(CreatePemantauanDecubitusRequest $request)
    {
        $input = $request->all();

        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->create($input);

        Flash::success('PemantauanDecubitus saved successfully.');

        return redirect(route('pemantauanDecubituses.index'));
    }

    /**
     * Display the specified PemantauanDecubitus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->findWithoutFail($id);

        if (empty($pemantauanDecubitus)) {
            Flash::error('PemantauanDecubitus not found');

            return redirect(route('pemantauanDecubituses.index'));
        }

        return view('pemantauanDecubituses.show')->with('pemantauanDecubitus', $pemantauanDecubitus);
    }

    /**
     * Show the form for editing the specified PemantauanDecubitus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->findWithoutFail($id);

        if (empty($pemantauanDecubitus)) {
            Flash::error('PemantauanDecubitus not found');

            return redirect(route('pemantauanDecubituses.index'));
        }
        $data = DB::select("exec spm_PPI_Decubitus_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        return view('pemantauanDecubituses.edit')->with('pemantauanDecubitus', $pemantauanDecubitus)->with('data',$data);
    }

    /**
     * Update the specified PemantauanDecubitus in storage.
     *
     * @param  int              $id
     * @param UpdatePemantauanDecubitusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemantauanDecubitusRequest $request)
    {
        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->findWithoutFail($id);

        if (empty($pemantauanDecubitus)) {
            Flash::error('PemantauanDecubitus not found');

            return redirect(route('pemantauanDecubituses.index'));
        }
        $request['tgl_pencegahan']<>'' ? $request['tgl_pencegahan'] = date("Y-m-d",strtotime($request['tgl_pencegahan'])) : $request['tgl_pencegahan'] =null;
        $request['tgl_pemantauan']<>'' ? $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan'])) : $request['tgl_pemantauan'] =null;
        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->update($request->all(), $id);

        Flash::success('PemantauanDecubitus updated successfully.');

        return redirect(route('pemantauanDecubituses.index'));
    }

    /**
     * Remove the specified PemantauanDecubitus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemantauanDecubitus = $this->pemantauanDecubitusRepository->findWithoutFail($id);

        if (empty($pemantauanDecubitus)) {
            Flash::error('PemantauanDecubitus not found');

            return redirect(route('pemantauanDecubituses.index'));
        }

        $this->pemantauanDecubitusRepository->delete($id);

        Flash::success('PemantauanDecubitus deleted successfully.');

        return redirect(route('pemantauanDecubituses.index'));
    }

    public function cariPasien(Request $request)
    {
      # code...
      if($request['tgl_registrasi'] != ''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Decubitus_Pasien_List @nm_pasien='".$request['nm_pasien']."',".
                         "@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',".
                         "@tgl_registrasi='".$request['tgl_registrasi']."'");
      return view('pemantauanDecubituses.data_pasien')->with('data',$data);
    }

    public function addObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_decubitus_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."'");
      return $data;
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_Decubitus_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanDecubituses.table')->with('tbindex',$data);
      //return ("exec spm_PPI_ISK_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
    }
}
