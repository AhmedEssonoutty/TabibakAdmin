<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Repositories\Contracts\PermissionContract;
use App\Repositories\Contracts\RoleContract;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RoleController extends BaseWebController
{
    private PermissionContract $permissionContract;

    /**
     * RoleController constructor.
     * @param RoleContract $contract
     * @param PermissionContract $permissionContract
     */
    public function __construct(RoleContract $contract, PermissionContract $permissionContract)
    {
        parent::__construct($contract, 'dashboard');
        $this->permissionContract = $permissionContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        $resources = $this->contract->search($request->all());
        return $this->indexBlade(['resources' => $resources]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $permissions = $this->permissionContract->search([], [], ['limit' => 0, 'page' => 0]);
        $permissionsModules = $permissions->groupBy('model');
        return $this->createBlade(['permissionsModules' => $permissionsModules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleRequest $request
     *
     * @return RedirectResponse
     */
    public function store(RoleRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     *
     * @return View|Factory|Application
     */
    public function show(Role $role): View|Factory|Application
    {
        $permissions = $this->permissionContract->search([], [], ['limit' => 0, 'page' => 0]);
        $permissionsModules = $permissions->groupBy('model');
        $$role = $role->load('permissions');
        return $this->showBlade(['role' => $role, 'permissionsModules' => $permissionsModules]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     *
     * @return View|Factory|Application
     */
    public function edit(Role $role): View|Factory|Application
    {
        $permissions = $this->permissionContract->search([], [], ['limit' => 0, 'page' => 0]);
        $permissionsModules = $permissions->groupBy('model');
        $role = $role->load('permissions');
        return $this->editBlade(['role' => $role, 'permissionsModules' => $permissionsModules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoleRequest $request
     * @param Role $role
     *
     * @return RedirectResponse
     */
    public function update(RoleRequest $request, Role $role): RedirectResponse
    {
        $this->contract->update($role, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     *
     * @return RedirectResponse
     */
    public function destroy(Role $role): RedirectResponse
    {
        try {
            $this->contract->remove($role);
            return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
        } catch (Exception $e) {
            return $this->redirectBack()->with('error', $e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Role $role
     * @return RedirectResponse
     */
    public function changeActivation(Role $role): RedirectResponse
    {
        $this->contract->toggleField($role, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
