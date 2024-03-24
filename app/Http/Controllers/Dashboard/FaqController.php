<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Repositories\Contracts\FaqContract;
use App\Repositories\Contracts\FaqSubjectContract;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseWebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FaqController extends BaseWebController
{
    protected FaqSubjectContract $faqSubjectContract;
    /**
     * FaqController constructor.
     * @param FaqContract $contract
     */
    public function __construct(FaqContract $contract, FaqSubjectContract $faqSubjectContract)
    {
        parent::__construct($contract, 'dashboard');
        $this->faqSubjectContract = $faqSubjectContract;
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
        $subjects = $this->faqSubjectContract->search(['active' => true], [], ['limit' => 0, 'page' => 0]);
        return $this->createBlade(['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FaqRequest $request
     *
     * @return RedirectResponse
     */
    public function store(FaqRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Faq $faq
     *
     * @return View|Factory|Application
     */
    public function show(Faq $faq): View|Factory|Application
    {
        return $this->showBlade(['faq' => $faq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Faq $faq
     *
     * @return View|Factory|Application
     */
    public function edit(Faq $faq): View|Factory|Application
    {
        $subjects = $this->faqSubjectContract->search(['active' => true], [], ['limit' => 0, 'page' => 0]);
        return $this->editBlade(['faq' => $faq, 'subjects' => $subjects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FaqRequest $request
     * @param Faq $faq
     *
     * @return RedirectResponse
     */
    public function update(FaqRequest $request, Faq $faq): RedirectResponse
    {
        $this->contract->update($faq, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Faq $faq
     *
     * @return RedirectResponse
     */
    public function destroy(Faq $faq): RedirectResponse
    {
        try {
            $this->contract->remove($faq);
            return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
        }catch (Exception $e){
            return $this->redirectBack()->with('error', $e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function changeActivation(Faq $faq): RedirectResponse
    {
        $this->contract->toggleField($faq, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
