<?php

namespace App\Services\Repositories;

use App\Constants\ConsultationVendorStatusConstants;
use App\Models\Consultation;

class ConsultationVendorService
{

    public function accept(Consultation $consultation, $vendor): bool
    {
        if (!$consultation->isMineAsVendor() || !$consultation->isPendingVendor($vendor->id))
            return false;
        $consultation->vendors()->updateExistingPivot($vendor->id,
            ['status' => ConsultationVendorStatusConstants::ACCEPTED->value]);
        return true;
    }

    public function reject(Consultation $consultation, $vendor): bool
    {
        if (!$consultation->isMineAsVendor() || !$consultation->isPendingVendor($vendor->id))
            return false;
        $consultation->vendors()->updateExistingPivot($vendor->id,
            ['status' => ConsultationVendorStatusConstants::REJECTED->value]);
        return true;
    }

}
