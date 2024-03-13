<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\VendorTypeRequest;
use App\Models\VendorType;
use App\Repositories\Contracts\VendorTypeContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class VendorTypeController extends BaseWebController
{
    /**
     * VendorTypeController constructor.
     * @param VendorTypeContract $contract
     */
    public function __construct(VendorTypeContract $contract)
    {
        parent::__construct($contract, 'dashboard');
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
     * @param VendorTypeRequest $request
     *
     * @return RedirectResponse
     */
    public function store(VendorTypeRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param VendorType $vendorType
     *
     * @return View|Factory|Application
     */
    public function show(VendorType $vendorType): View|Factory|Application
    {
        return $this->showBlade(['vendorType' => $vendorType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param VendorType $vendorType
     *
     * @return View|Factory|Application
     */
    public function edit(VendorType $vendorType): View|Factory|Application
    {
        return $this->editBlade(['vendorType' => $vendorType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VendorTypeRequest $request
     * @param VendorType $vendorType
     *
     * @return RedirectResponse
     */
    public function update(VendorTypeRequest $request, VendorType $vendorType): RedirectResponse
    {
        $this->contract->update($vendorType, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param VendorType $vendorType
     *
     * @return RedirectResponse
     */
    public function destroy(VendorType $vendorType): RedirectResponse
    {
       $this->contract->remove($vendorType);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param VendorType $vendorType
     * @return RedirectResponse
     */
    public function changeActivation(VendorType $vendorType): RedirectResponse
    {
        $this->contract->toggleField($vendorType, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
