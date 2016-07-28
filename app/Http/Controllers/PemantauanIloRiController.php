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
        $data = DB::select("exec spm_PPI_ILO_RI_List @id='',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi='".date("Y-m-d")."'");
        return $pemantauanIloRiDataTable->render('pemantauanIloRis.index')->with('tbindex',$data);
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
        //print($request['kd_obat']);
        $request['tgl_kultur'] = date("Y-m-d",strtotime($request['tgl_kultur']));
        $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan']));
        $request['vuser'] = 'marcell';
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
        $data = DB::select("exec spm_PPI_ILO_RI_List @id='".$id."',@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
        $antibiotik = DB::select("select kd_obat,convert(date,tgl_awal) as tgl_awal,convert(date,tgl_akhir) as tgl_akhir,dosis,is_po_iv_im,is_pengobatan,is_profilaksis from tb_ppi_pemakaian_antibiotik where no_transaksi=(select no_transaksi from tb_ppi_ilo_ri where id='".$id."')");
        //dd($pemantauanIloRi);
        if (empty($pemantauanIloRi)) {
            Flash::error('PemantauanIloRi not found');

            return redirect(route('pemantauanIloRis.index'));
        }

        return view('pemantauanIloRis.edit')->with('pemantauanIloRi', $pemantauanIloRi)->with('data',$data)->with('antibiotik',$antibiotik);
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
        //dd($request['is_profilaksis']);
        $data = DB::select("exec spm_PPI_ILO_RI_Antibiotik_Add @no_transaksi='".$request['no_transaksi']."',@kd_obat='".implode(",",$request['kd_obat'])."',".
                           "@tgl_awal='".implode(",",$request['tgl_awal'])."',@tgl_akhir='".implode(",",$request['tgl_akhir'])."',".
                           "@dosis='".implode(",",$request['dosis'])."',@is_po_iv_im='".implode(",",$request['is_po_iv_im'])."',@is_pengobatan='".implode(",",$request['is_pengobatan'])."',".
                           "@is_profilaksis='".implode(",",$request['is_profilaksis'])."'");

        $request['tgl_kultur'] = date("Y-m-d",strtotime($request['tgl_kultur']));
        $request['tgl_pemantauan'] = date("Y-m-d",strtotime($request['tgl_pemantauan']));
        $request['tgl_transaksi'] = date("Y-m-d");
        $pemantauanIloRi = $this->pemantauanIloRiRepository->update($request->all(), $id);

        Flash::success('Data Berhasil Diupdate.');

        return redirect(route('pemantauanIloRis.index'));
        /*return ("exec spm_PPI_ILO_RI_Antibiotik_Add @no_transaksi='".$request['no_transaksi']."',@kd_obat='".implode(",",$request['kd_obat'])."',".
                           "@tgl_awal='".implode(",",$request['tgl_awal'])."',@tgl_akhir='".implode(",",$request['tgl_akhir'])."',".
                           "@dosis='".implode(",",$request['dosis'])."',@is_po_iv_im='".implode(",",$request['is_po_iv_im'])."',@is_pengobatan='".implode(",",$request['is_pengobatan'])."',".
                           "@is_profilaksis='".implode(",",$request['is_profilaksis'])."'");*/
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

        Flash::success('Data Berhasi Dihapus.');

        return redirect(route('pemantauanIloRis.index'));
    }

    public function cariPasienBedah(Request $request){
      $page = Input::get('page',1);
    	//dd($page);
    	$paginate = 50;

    	$data = DB::select("exec spm_PPI_ILO_RI_Pasien_Operasi_List @nm_pasien='".$request['nm_pasien']."',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_daftar']."'");
      //$data = DB::select("exec spm_PPI_ILO_RI_List @id=1,@id_pasien='',@id_registrasi='',@tgl_registrasi='',@tgl_transaksi=''");
    	$offSet = ($page * $paginate) - $paginate;
    	$itemsForCurrentPage = array_slice($data, $offSet, $paginate, true);

    	$data = new \Illuminate\Pagination\LengthAwarePaginator($itemsForCurrentPage, count($data), $paginate, $page);
    	$data->setPath('/pemantauanIloRis');
    	return view::make('pemantauanIloRis.data_pasien_bedah')->with('data',$data);
    }

    public function addIloRiObserve(Request $request){
      $data = DB::select("exec spm_PPI_tb_ppi_ilo_ri_add @no_transaksi='".$request['no_transaksi']."',@id_registrasi='".$request['id_registrasi']."',@tgl_transaksi='".date("Y-m-d")."'");
      return $data;
      //return redirect(route('pemantauanIloRis.index'))->with('data',$data);
    }

    public function addIloRiAntibiotik(Request $request)
    {
      # code...
      //$data = DB::select("exec spm_PPI_ILO_RI_Antibiotik_Add @no_transaksi='".$request['no_transaksi']."',@kd_obat='".$request['kd_obat']."',@tgl_awal='".date("Y-m-d",strtotime($request['tgl_awal']))."',".
      //                   "@tgl_akhir='".date("Y-m-d",strtotime($request['tgl_akhir']))."',@dosis='".$request['dosis']."',@is_po_iv_im='".$request['is_po_iv_im']."',@is_pengobatan='".$request['is_pengobatan']."',@is_profilaksis='".$request['is_profilaksis']."'");
      //return $data;
    }

    public function cariDataObserve(Request $request){
      if($request['tgl_transaksi']<>''){
        $request['tgl_transaksi'] = date("Y-m-d",strtotime($request['tgl_transaksi']));
      }
      if($request['tgl_registrasi']<>''){
        $request['tgl_registrasi'] = date("Y-m-d",strtotime($request['tgl_registrasi']));
      }
      $data = DB::select("exec spm_PPI_ILO_RI_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'");
      return view::make('pemantauanIloRis.table')->with('tbindex',$data);
      //return "exec spm_PPI_ILO_RI_List @id='',@id_pasien='".$request['id_pasien']."',@id_registrasi='".$request['id_registrasi']."',@tgl_registrasi='".$request['tgl_registrasi']."',@tgl_transaksi='".$request['tgl_transaksi']."'";
    }
}
