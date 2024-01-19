<?php

namespace App\Models;

use App\Constants\DoctorConsultationTypeConstants;
use App\Constants\DoctorRequestStatusConstants;
use App\Constants\FileConstants;
use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Doctor extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['user_id', 'academic_degree_id', 'national_id', 'university',
        'experience_years', 'consultation_type', 'request_status', 'medical_id', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = ['user.name'];
    protected array $dates = [];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = [];
    public $casts = [
        'request_status' => DoctorRequestStatusConstants::class,
        'consultation_type' => DoctorConsultationTypeConstants::class
    ];

    //---------------------relations-------------------------------------
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function medicalSpecialities(): BelongsToMany
    {
        return $this->belongsToMany(MedicalSpeciality::class, 'doctor_medical_speciality')
            ->withPivot('price');
    }

    public function academicDegree(): BelongsTo
    {
        return $this->belongsTo(AcademicDegree::class);
    }

    public function attachments(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable')
            ->where('type', FileConstants::FILE_DOCTOR_ATTACHMENTS);
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
