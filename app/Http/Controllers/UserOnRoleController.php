<?php

namespace App\Http\Controllers;

use App\DataTables\UserOnRoleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserOnRoleRequest;
use App\Http\Requests\UpdateUserOnRoleRequest;
use App\Repositories\UserOnRoleRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class UserOnRoleController extends AppBaseController
{
    /** @var  UserOnRoleRepository */
    private $userOnRoleRepository;

    public function __construct(UserOnRoleRepository $userOnRoleRepo)
    {
        $this->userOnRoleRepository = $userOnRoleRepo;
    }

    /**
     * Display a listing of the UserOnRole.
     *
     * @param UserOnRoleDataTable $userOnRoleDataTable
     * @return Response
     */
    public function index(UserOnRoleDataTable $userOnRoleDataTable)
    {
        return $userOnRoleDataTable->render('userOnRoles.index');
    }

    /**
     * Show the form for creating a new UserOnRole.
     *
     * @return Response
     */
    public function create()
    {
        return view('userOnRoles.create');
    }

    /**
     * Store a newly created UserOnRole in storage.
     *
     * @param CreateUserOnRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateUserOnRoleRequest $request)
    {
        $input = $request->all();

        $userOnRole = $this->userOnRoleRepository->create($input);

        Flash::success('UserOnRole saved successfully.');

        return redirect(route('userOnRoles.index'));
    }

    /**
     * Display the specified UserOnRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userOnRole = $this->userOnRoleRepository->findWithoutFail($id);

        if (empty($userOnRole)) {
            Flash::error('UserOnRole not found');

            return redirect(route('userOnRoles.index'));
        }

        return view('userOnRoles.show')->with('userOnRole', $userOnRole);
    }

    /**
     * Show the form for editing the specified UserOnRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userOnRole = $this->userOnRoleRepository->findWithoutFail($id);

        if (empty($userOnRole)) {
            Flash::error('UserOnRole not found');

            return redirect(route('userOnRoles.index'));
        }

        return view('userOnRoles.edit')->with('userOnRole', $userOnRole);
    }

    /**
     * Update the specified UserOnRole in storage.
     *
     * @param  int              $id
     * @param UpdateUserOnRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserOnRoleRequest $request)
    {
        $userOnRole = $this->userOnRoleRepository->findWithoutFail($id);

        if (empty($userOnRole)) {
            Flash::error('UserOnRole not found');

            return redirect(route('userOnRoles.index'));
        }

        $userOnRole = $this->userOnRoleRepository->update($request->all(), $id);

        Flash::success('UserOnRole updated successfully.');

        return redirect(route('userOnRoles.index'));
    }

    /**
     * Remove the specified UserOnRole from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userOnRole = $this->userOnRoleRepository->findWithoutFail($id);

        if (empty($userOnRole)) {
            Flash::error('UserOnRole not found');

            return redirect(route('userOnRoles.index'));
        }

        $this->userOnRoleRepository->delete($id);

        Flash::success('UserOnRole deleted successfully.');

        return redirect(route('userOnRoles.index'));
    }
}
