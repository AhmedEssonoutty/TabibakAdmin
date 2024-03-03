<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Repositories\Contracts\RegionContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegionController extends BaseWebController
{
    /**
     * RegionController constructor.
     * @param RegionContract $contract
     */
    public function __construct(RegionContract $contract)
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
     * @param RegionRequest $request
     *
     * @return RedirectResponse
     */
    public function store(RegionRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Region $region
     *
     * @return View|Factory|Application
     */
    public function show(Region $region): View|Factory|Application
    {
        return $this->showBlade(['region' => $region]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Region $region
     *
     * @return View|Factory|Application
     */
    public function edit(Region $region): View|Factory|Application
    {
        return $this->editBlade(['region' => $region]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RegionRequest $request
     * @param Region $region
     *
     * @return RedirectResponse
     */
    public function update(RegionRequest $request, Region $region): RedirectResponse
    {
        $this->contract->update($region, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Region $region
     *
     * @return RedirectResponse
     */
    public function destroy(Region $region): RedirectResponse
    {
       $this->contract->remove($region);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Region $region
     * @return RedirectResponse
     */
    public function changeActivation(Region $region): RedirectResponse
    {
        $this->contract->toggleField($region, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
