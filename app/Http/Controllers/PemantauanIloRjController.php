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
        return $pemantauanIloRjDataTable->render('pemantauanIloRjs.index');
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

        if (empty($pemantauanIloRj)) {
            Flash::error('PemantauanIloRj not found');

            return redirect(route('pemantauanIloRjs.index'));
        }

        return view('pemantauanIloRjs.edit')->with('pemantauanIloRj', $pemantauanIloRj);
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
}
