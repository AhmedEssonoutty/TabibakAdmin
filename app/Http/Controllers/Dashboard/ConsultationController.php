<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseWebController;
use App\Http\Requests\ConsultationRequest;
use App\Models\Consultation;
use App\Repositories\Contracts\ConsultationContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConsultationController extends BaseWebController
{
    /**
     * ConsultationController constructor.
     * @param ConsultationContract $contract
     */
    public function __construct(ConsultationContract $contract)
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
     * @param ConsultationRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ConsultationRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Consultation $consultation
     *
     * @return View|Factory|Application
     */
    public function show(Consultation $consultation): View|Factory|Application
    {
        return $this->showBlade(['consultation' => $consultation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Consultation $consultation
     *
     * @return View|Factory|Application
     */
    public function edit(Consultation $consultation): View|Factory|Application
    {
        return $this->editBlade(['consultation' => $consultation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ConsultationRequest $request
     * @param Consultation $consultation
     *
     * @return RedirectResponse
     */
    public function update(ConsultationRequest $request, Consultation $consultation): RedirectResponse
    {
        $this->contract->update($consultation, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Consultation $consultation
     *
     * @return RedirectResponse
     */
    public function destroy(Consultation $consultation): RedirectResponse
    {
       $this->contract->remove($consultation);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Consultation $consultation
     * @return RedirectResponse
     */
    public function changeActivation(Consultation $consultation): RedirectResponse
    {
        $this->contract->toggleField($consultation, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
