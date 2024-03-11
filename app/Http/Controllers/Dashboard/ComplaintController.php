<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComplaintRequest;
use App\Models\Complaint;
use App\Repositories\Contracts\ComplaintContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ComplaintController extends BaseWebController
{
    /**
     * ComplaintController constructor.
     * @param ComplaintContract $contract
     */
    public function __construct(ComplaintContract $contract)
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
     * @param ComplaintRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ComplaintRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Complaint $complaint
     *
     * @return View|Factory|Application
     */
    public function show(Complaint $complaint): View|Factory|Application
    {
        return $this->showBlade(['complaint' => $complaint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Complaint $complaint
     *
     * @return View|Factory|Application
     */
    public function edit(Complaint $complaint): View|Factory|Application
    {
        return $this->editBlade(['complaint' => $complaint]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ComplaintRequest $request
     * @param Complaint $complaint
     *
     * @return RedirectResponse
     */
    public function update(ComplaintRequest $request, Complaint $complaint): RedirectResponse
    {
        $this->contract->update($complaint, $request->validated());
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Complaint $complaint
     *
     * @return RedirectResponse
     */
    public function destroy(Complaint $complaint): RedirectResponse
    {
       $this->contract->remove($complaint);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Complaint $complaint
     * @return RedirectResponse
     */
    public function changeActivation(Complaint $complaint): RedirectResponse
    {
        $this->contract->toggleField($complaint, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
