<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\FaqSubjectRequest;
use App\Models\FaqSubject;
use App\Repositories\Contracts\FaqSubjectContract;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FaqSubjectController extends BaseWebController
{
    /**
     * FaqSubjectController constructor.
     * @param FaqSubjectContract $contract
     */
    public function __construct(FaqSubjectContract $contract)
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
     * @param FaqSubjectRequest $request
     *
     * @return RedirectResponse
     */
    public function store(FaqSubjectRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param FaqSubject $faqSubject
     *
     * @return View|Factory|Application
     */
    public function show(FaqSubject $faqSubject): View|Factory|Application
    {
        return $this->showBlade(['faqSubject' => $faqSubject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param FaqSubject $faqSubject
     *
     * @return View|Factory|Application
     */
    public function edit(FaqSubject $faqSubject): View|Factory|Application
    {
        return $this->editBlade(['faqSubject' => $faqSubject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FaqSubjectRequest $request
     * @param FaqSubject $faqSubject
     *
     * @return RedirectResponse
     */
    public function update(FaqSubjectRequest $request, FaqSubject $faqSubject): RedirectResponse
    {
        $this->contract->update($faqSubject, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param FaqSubject $faqSubject
     *
     * @return RedirectResponse
     */
    public function destroy(FaqSubject $faqSubject): RedirectResponse
    {
       $this->contract->remove($faqSubject);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param FaqSubject $faqSubject
     * @return RedirectResponse
     */
    public function changeActivation(FaqSubject $faqSubject): RedirectResponse
    {
        $this->contract->toggleField($faqSubject, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
