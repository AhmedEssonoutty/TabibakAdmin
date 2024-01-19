<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\VendorRequest;
use App\Models\Vendor;
use App\Repositories\Contracts\VendorContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class VendorController extends BaseWebController
{
    /**
     * VendorController constructor.
     * @param VendorContract $contract
     */
    public function __construct(VendorContract $contract)
    {
        parent::__construct($contract, 'Vendors', 'Vendors', 'Vendor');
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
        return $this->createBlade();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VendorRequest $request
     *
     * @return RedirectResponse
     */
    public function store(VendorRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Vendor $vendor
     *
     * @return View|Factory|Application
     */
    public function show(Vendor $vendor): View|Factory|Application
    {
        return $this->showBlade(['vendor' => $vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Vendor $vendor
     *
     * @return View|Factory|Application
     */
    public function edit(Vendor $vendor): View|Factory|Application
    {
        return $this->editBlade(['vendor' => $vendor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VendorRequest $request
     * @param Vendor $vendor
     *
     * @return RedirectResponse
     */
    public function update(VendorRequest $request, Vendor $vendor): RedirectResponse
    {
        $this->contract->update($vendor, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vendor $vendor
     *
     * @return RedirectResponse
     */
    public function destroy(Vendor $vendor): RedirectResponse
    {
       $this->contract->remove($vendor);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Role $role
     * @return RedirectResponse
     */
    public function changeActivation(Vendor $vendor): RedirectResponse
    {
        $this->contract->toggleField($vendor, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
