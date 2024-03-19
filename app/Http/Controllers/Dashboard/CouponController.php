<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseWebController;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use App\Repositories\Contracts\CouponContract;
use App\Repositories\Contracts\MedicalSpecialityContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CouponController extends BaseWebController
{
    protected MedicalSpecialityContract $medicalSpecialityContract;

    /**
     * CouponController constructor.
     * @param CouponContract $contract
     * @param MedicalSpecialityContract $medicalSpecialityContract
     */
    public function __construct(CouponContract $contract, MedicalSpecialityContract $medicalSpecialityContract)
    {
        parent::__construct($contract, 'dashboard');
        $this->medicalSpecialityContract = $medicalSpecialityContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request): View|Factory|Application
    {
        $resources = $this->contract->search($request->all(), ['medicalSpecialities']);
        return $this->indexBlade(['resources' => $resources]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $types = [1 => 'percentage', 2 => 'amount'];
        $specialities = $this->medicalSpecialityContract->search([], [], ['limit' => 0, 'page' => 0]);
        return $this->createBlade(['types' => $types, 'specialities' => $specialities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CouponRequest $request
     *
     * @return RedirectResponse
     */
    public function store(CouponRequest $request): RedirectResponse
    {
        $this->contract->create($request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Coupon $coupon
     *
     * @return View|Factory|Application
     */
    public function show(Coupon $coupon): View|Factory|Application
    {
        return $this->showBlade(['coupon' => $coupon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Coupon $coupon
     *
     * @return View|Factory|Application
     */
    public function edit(Coupon $coupon): View|Factory|Application
    {
        $types = [1 => 'percentage', 2 => 'amount'];
        $specialities = $this->medicalSpecialityContract->search([], [], ['limit' => 0, 'page' => 0]);
        return $this->editBlade(['coupon' => $coupon, 'types' => $types, 'specialities' => $specialities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CouponRequest $request
     * @param Coupon $coupon
     *
     * @return RedirectResponse
     */
    public function update(CouponRequest $request, Coupon $coupon): RedirectResponse
    {
        $this->contract->update($coupon, $request->validated());
        return $this->redirectToIndex()->with('success', __('messages.actions_messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupon $coupon
     *
     * @return RedirectResponse
     */
    public function destroy(Coupon $coupon): RedirectResponse
    {
       $this->contract->remove($coupon);
       return $this->redirectBack()->with('success', __('messages.actions_messages.delete_success'));
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Coupon $coupon
     * @return RedirectResponse
     */
    public function changeActivation(Coupon $coupon): RedirectResponse
    {
        $this->contract->toggleField($coupon, 'is_active');
        return $this->redirectBack()->with('success', __('messages.actions_messages.update_success'));
    }
}
