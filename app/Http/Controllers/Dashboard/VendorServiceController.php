<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\VendorServiceRequest;
use App\Models\VendorService;
use App\Repositories\Contracts\VendorServiceContract;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class VendorServiceController extends BaseWebController
{
    /**
     * VendorServiceController constructor.
     * @param VendorServiceContract $contract
     */
    public function __construct(VendorServiceContract $contract)
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
     * @param VendorServiceRequest $request
     *
     * @return RedirectResponse
     */
    public function store(VendorServiceRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param VendorService $vendorService
     *
     * @return View|Factory|Application
     */
    public function show(VendorService $vendorService): View|Factory|Application
    {
        return $this->showBlade(['vendorService' => $vendorService]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param VendorService $vendorService
     *
     * @return View|Factory|Application
     */
    public function edit(VendorService $vendorService): View|Factory|Application
    {
        return $this->editBlade(['vendorService' => $vendorService]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VendorServiceRequest $request
     * @param VendorService $vendorService
     *
     * @return RedirectResponse
     */
    public function update(VendorServiceRequest $request, VendorService $vendorService): RedirectResponse
    {
        $this->contract->update($vendorService, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param VendorService $vendorService
     *
     * @return RedirectResponse
     */
    public function destroy(VendorService $vendorService): RedirectResponse
    {
        try {
            $this->contract->remove($vendorService);
            return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
        }catch (Exception $e) {
            return $this->redirectBack()->with('error', $e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param VendorService $vendorService
     * @return RedirectResponse
     */
    public function changeActivation(VendorService $vendorService): RedirectResponse
    {
        $this->contract->toggleField($vendorService, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
