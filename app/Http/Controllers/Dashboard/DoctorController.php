<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Repositories\Contracts\AcademicDegreeContract;
use App\Repositories\Contracts\DoctorContract;
use App\Repositories\Contracts\MedicalSpecialityContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DoctorController extends BaseWebController
{

    protected MedicalSpecialityContract $medicalSpecialityContract;
    protected AcademicDegreeContract $academicDegreeContract;

    /**
     * DoctorController constructor.
     * @param DoctorContract $contract
     * @param MedicalSpecialityContract $medicalSpecialityContract
     * @param AcademicDegreeContract $academicDegreeContract
     */
    public function __construct(DoctorContract $contract, MedicalSpecialityContract $medicalSpecialityContract, AcademicDegreeContract $academicDegreeContract)
    {
        parent::__construct($contract, 'dashboard');
        $this->medicalSpecialityContract = $medicalSpecialityContract;
        $this->academicDegreeContract = $academicDegreeContract;
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
        $specialities = $this->medicalSpecialityContract->search([], [], ['limit' => 0, 'page' => 0]);
        $academicDegrees = $this->academicDegreeContract->search([], [], ['limit' => 0, 'page' => 0]);
        return $this->createBlade(['specialities' => $specialities, 'academicDegrees' => $academicDegrees]);
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
        $urgent_consultation_enabled = $request['urgent_consultation_enabled'] ? 1 : 0;
        $with_appointment_consultation_enabled = $request['with_appointment_consultation_enabled'] ? 1 : 0;
        $this->contract->create($request->validated() + ['urgent_consultation_enabled' => $urgent_consultation_enabled, 'with_appointment_consultation_enabled' => $with_appointment_consultation_enabled]);
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
        $specialities = $this->medicalSpecialityContract->search([], [], ['limit' => 0, 'page' => 0]);
        $academicDegrees = $this->academicDegreeContract->search([], [], ['limit' => 0, 'page' => 0]);
        return $this->editBlade(['doctor' => $doctor, 'specialities' => $specialities, 'academicDegrees' => $academicDegrees]);
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
        $urgent_consultation_enabled = $request['urgent_consultation_enabled'] ? 1 : 0;
        $with_appointment_consultation_enabled = $request['with_appointment_consultation_enabled'] ? 1 : 0;
        $this->contract->update($doctor, $request->validated() + ['urgent_consultation_enabled' => $urgent_consultation_enabled, 'with_appointment_consultation_enabled' => $with_appointment_consultation_enabled]);
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
     * @param Doctor $doctor
     * @return RedirectResponse
     */
    public function changeActivation(Doctor $doctor): RedirectResponse
    {
        $this->contract->toggleField($doctor, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
