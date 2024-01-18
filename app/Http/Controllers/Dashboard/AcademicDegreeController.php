<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\AcademicDegreeRequest;
use App\Models\AcademicDegree;
use App\Repositories\Contracts\AcademicDegreeContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AcademicDegreeController extends BaseWebController
{
    /**
     * AcademicDegreeController constructor.
     * @param AcademicDegreeContract $contract
     */
    public function __construct(AcademicDegreeContract $contract)
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
     * @param AcademicDegreeRequest $request
     *
     * @return RedirectResponse
     */
    public function store(AcademicDegreeRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param AcademicDegree $academicDegree
     *
     * @return View|Factory|Application
     */
    public function show(AcademicDegree $academicDegree): View|Factory|Application
    {
        return $this->showBlade(['academicDegree' => $academicDegree]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AcademicDegree $academicDegree
     *
     * @return View|Factory|Application
     */
    public function edit(AcademicDegree $academicDegree): View|Factory|Application
    {
        return $this->editBlade(['academicDegree' => $academicDegree]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AcademicDegreeRequest $request
     * @param AcademicDegree $academicDegree
     *
     * @return RedirectResponse
     */
    public function update(AcademicDegreeRequest $request, AcademicDegree $academicDegree): RedirectResponse
    {
        $this->contract->update($academicDegree, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AcademicDegree $academicDegree
     *
     * @return RedirectResponse
     */
    public function destroy(AcademicDegree $academicDegree): RedirectResponse
    {
       $this->contract->remove($academicDegree);
        return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param AcademicDegree $academicDegree
     * @return RedirectResponse
     */
    public function changeActivation(AcademicDegree $academicDegree): RedirectResponse
    {
        $this->contract->toggleField($academicDegree, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

}
