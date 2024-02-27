<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseWebController;
use App\Http\Requests\DiseaseRequest;
use App\Models\Disease;
use App\Repositories\Contracts\DiseaseContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DiseaseController extends BaseWebController
{
    /**
     * DiseaseController constructor.
     * @param DiseaseContract $contract
     */
    public function __construct(DiseaseContract $contract)
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
     * @param DiseaseRequest $request
     *
     * @return RedirectResponse
     */
    public function store(DiseaseRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Disease $disease
     *
     * @return View|Factory|Application
     */
    public function show(Disease $disease): View|Factory|Application
    {
        return $this->showBlade(['disease' => $disease]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Disease $disease
     *
     * @return View|Factory|Application
     */
    public function edit(Disease $disease): View|Factory|Application
    {
        return $this->editBlade(['disease' => $disease]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DiseaseRequest $request
     * @param Disease $disease
     *
     * @return RedirectResponse
     */
    public function update(DiseaseRequest $request, Disease $disease): RedirectResponse
    {
        $this->contract->update($disease, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Disease $disease
     *
     * @return RedirectResponse
     */
    public function destroy(Disease $disease): RedirectResponse
    {
       $this->contract->remove($disease);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Disease $disease
     * @return RedirectResponse
     */
    public function changeActivation(Disease $disease): RedirectResponse
    {
        $this->contract->toggleField($disease, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
