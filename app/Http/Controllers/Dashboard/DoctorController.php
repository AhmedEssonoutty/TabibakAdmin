<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Repositories\Contracts\DoctorContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DoctorController extends BaseWebController
{
    /**
     * DoctorController constructor.
     * @param DoctorContract $contract
     */
    public function __construct(DoctorContract $contract)
    {
        parent::__construct($contract, 'Doctors', 'Doctors', 'Doctor');
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
     * @param DoctorRequest $request
     *
     * @return RedirectResponse
     */
    public function store(DoctorRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Doctor $doctor
     *
     * @return View|Factory|Application
     */
    public function show(Doctor $doctor): View|Factory|Application
    {
        return $this->showBlade(['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Doctor $doctor
     *
     * @return View|Factory|Application
     */
    public function edit(Doctor $doctor): View|Factory|Application
    {
        return $this->editBlade(['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DoctorRequest $request
     * @param Doctor $doctor
     *
     * @return RedirectResponse
     */
    public function update(DoctorRequest $request, Doctor $doctor): RedirectResponse
    {
        $this->contract->update($doctor, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Doctor $doctor
     *
     * @return RedirectResponse
     */
    public function destroy(Doctor $doctor): RedirectResponse
    {
       $this->contract->remove($doctor);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Role $role
     * @return RedirectResponse
     */
    public function changeActivation(Doctor $doctor): RedirectResponse
    {
        $this->contract->toggleField($doctor, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
