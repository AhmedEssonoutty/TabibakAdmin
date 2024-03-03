<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Repositories\Contracts\CityContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CityController extends BaseWebController
{
    /**
     * CityController constructor.
     * @param CityContract $contract
     */
    public function __construct(CityContract $contract)
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
     * @param CityRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CityRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param City $city
     *
     * @return View|Factory|Application
     */
    public function show(City $city): View|Factory|Application
    {
        return $this->showBlade(['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param City $city
     *
     * @return View|Factory|Application
     */
    public function edit(City $city): View|Factory|Application
    {
        return $this->editBlade(['city' => $city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CityRequest $request
     * @param City $city
     *
     * @return RedirectResponse
     */
    public function update(CityRequest $request, City $city): RedirectResponse
    {
        $this->contract->update($city, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City $city
     *
     * @return RedirectResponse
     */
    public function destroy(City $city): RedirectResponse
    {
       $this->contract->remove($city);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param City $city
     * @return RedirectResponse
     */
    public function changeActivation(City $city): RedirectResponse
    {
        $this->contract->toggleField($city, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
