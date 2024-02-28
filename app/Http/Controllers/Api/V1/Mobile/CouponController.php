<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\CouponRequest;
use App\Http\Resources\CouponResource;
use App\Models\Coupon;
use App\Repositories\Contracts\CouponContract;
use Exception;
use Illuminate\Http\JsonResponse;

class CouponController extends BaseApiController
{
    /**
     * CouponController constructor.
     * @param CouponContract $contract
     */
    public function __construct(CouponContract $contract)
    {
        parent::__construct($contract, CouponResource::class, 'Coupon');
    }
    /**
     * Store a newly created resource in storage.
     * @param CouponRequest $request
     * @return JsonResponse
     */
    public function store(CouponRequest $request): JsonResponse
    {
        try {
            $coupon = $this->contract->create($request->validated());
            return $this->respondWithModel($coupon->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Coupon $coupon
    * @return JsonResponse
    */
   public function show(Coupon $coupon): JsonResponse
   {
       try {
           return $this->respondWithModel($coupon->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param CouponRequest $request
     * @param Coupon $coupon
     * @return JsonResponse
     */
    public function update(CouponRequest $request, Coupon $coupon) : JsonResponse
    {
        try {
            $coupon = $this->contract->update($coupon, $request->validated());
            return $this->respondWithModel($coupon->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Coupon $coupon
     * @return JsonResponse
     */
    public function destroy(Coupon $coupon): JsonResponse
    {
        try {
            $this->contract->remove($coupon);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Coupon $coupon
     * @return JsonResponse
     */
    public function changeActivation(Coupon $coupon): JsonResponse
    {
        try {
            $this->contract->toggleField($coupon, 'is_active');
            return $this->respondWithModel($coupon->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
