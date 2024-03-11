<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseWebController;
use App\Models\Complaint;
use App\Repositories\Contracts\ComplaintContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
