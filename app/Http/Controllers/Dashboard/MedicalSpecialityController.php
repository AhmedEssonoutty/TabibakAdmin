<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\MedicalSpecialityRequest;
use App\Models\MedicalSpeciality;
use App\Repositories\Contracts\MedicalSpecialityContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MedicalSpecialityController extends BaseWebController
{
    /**
     * MedicalSpecialityController constructor.
     * @param MedicalSpecialityContract $contract
     */
    public function __construct(MedicalSpecialityContract $contract)
    {
        parent::__construct($contract, 'MedicalSpecialitys', 'MedicalSpecialitys', 'MedicalSpeciality');
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
     * @param MedicalSpecialityRequest $request
     *
     * @return RedirectResponse
     */
    public function store(MedicalSpecialityRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param MedicalSpeciality $medicalSpeciality
     *
     * @return View|Factory|Application
     */
    public function show(MedicalSpeciality $medicalSpeciality): View|Factory|Application
    {
        return $this->showBlade(['medicalSpeciality' => $medicalSpeciality]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param MedicalSpeciality $medicalSpeciality
     *
     * @return View|Factory|Application
     */
    public function edit(MedicalSpeciality $medicalSpeciality): View|Factory|Application
    {
        return $this->editBlade(['medicalSpeciality' => $medicalSpeciality]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MedicalSpecialityRequest $request
     * @param MedicalSpeciality $medicalSpeciality
     *
     * @return RedirectResponse
     */
    public function update(MedicalSpecialityRequest $request, MedicalSpeciality $medicalSpeciality): RedirectResponse
    {
        $this->contract->update($medicalSpeciality, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param MedicalSpeciality $medicalSpeciality
     *
     * @return RedirectResponse
     */
    public function destroy(MedicalSpeciality $medicalSpeciality): RedirectResponse
    {
       $this->contract->remove($medicalSpeciality);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Role $role
     * @return RedirectResponse
     */
    public function changeActivation(MedicalSpeciality $medicalSpeciality): RedirectResponse
    {
        $this->contract->toggleField($medicalSpeciality, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
