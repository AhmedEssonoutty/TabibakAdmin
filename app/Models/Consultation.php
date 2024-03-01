<?php

namespace App\Models;

use App\Constants\ConsultationContactTypeConstants;
use App\Constants\ConsultationPaymentTypeConstants;
use App\Constants\ConsultationStatusConstants;
use App\Constants\ConsultationTransferCaseRateConstants;
use App\Constants\ConsultationTypeConstants;
use App\Constants\FileConstants;
use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Consultation extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;

    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['doctor_id', 'patient_id', 'status', 'medical_speciality_id',
        'patient_description', 'doctor_description', 'medical_review', 'prescription', 'type',
        'contact_type', 'doctor_schedule_day_shift_id', 'reminder_at', 'transfer_reason', 'transfer_notes',
        'transfer_case_rate', 'payment_type', 'amount', 'coupon_id', 'is_active'];
    protected array $filters = ['keyword', 'mineAsPatient'];
    protected array $searchable = [];
    protected array $dates = ['reminder_at'];
    public array $filterModels = [];
    public array $filterCustom = ['types', 'paymentMethods'];
    public array $translatable = [];
    protected $casts = [
        'status' => ConsultationStatusConstants::class,
        'type' => ConsultationTypeConstants::class,
        'contact_type' => ConsultationContactTypeConstants::class,
        'payment_type' => ConsultationPaymentTypeConstants::class,
        'transfer_case_rate' => ConsultationTransferCaseRateConstants::class
    ];

    //---------------------relations-------------------------------------
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function attachments(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')->where('type', FileConstants::FILE_TYPE_CONSULTATION_ATTACHMENTS);
    }

    public function medicalSpeciality(): BelongsTo
    {
        return $this->belongsTo(MedicalSpeciality::class);
    }

    public function doctorScheduleDayShift(): BelongsTo
    {
        return $this->belongsTo(DoctorScheduleDayShift::class);
    }

    public function coupon(): BelongsTo
    {
        return $this->belongsTo(Coupon::class);
    }

    public function vendors(): BelongsToMany
    {
        return $this->belongsToMany(Vendor::class, 'consultation_vendor')->withTimestamps();
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    public function scopeOfMineAsPatient($query)
    {
        return $query->where('patient_id', auth()->user()->patient?->id);
    }
    //---------------------Scopes-------------------------------------

    public static function types(): array
    {
        return ConsultationTypeConstants::valuesCollection();
    }

    public static function  paymentMethods(): array
    {
        return ConsultationPaymentTypeConstants::valuesCollection();
    }
}
