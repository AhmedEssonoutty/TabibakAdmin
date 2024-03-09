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
    protected $fillable = ['user_id', 'academic_degree_id', 'national_id', 'city_id', 'university', 'bio',
        'urgent_consultation_enabled', 'with_appointment_consultation_enabled', 'experience_years',
        'request_status', 'medical_id', 'is_active'];
    protected array $filters = ['keyword', 'requestStatus'];
    protected array $searchable = ['user.name'];
    protected array $dates = [];
    public array $filterModels = ['City', 'MedicalSpeciality', 'AcademicDegree'];
    public array $filterCustom = [];
    public array $translatable = [];
    public $casts = [
        'request_status' => DoctorRequestStatusConstants::class
    ];
    public $with = ['user'];

    //---------------------relations-------------------------------------
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function medicalSpecialities(): BelongsToMany
    {
        return $this->belongsToMany(MedicalSpeciality::class, 'doctor_medical_speciality')
            ->withPivot('price')->withTimestamps();
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

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------
    public function scopeOfRequestStatus($query, $value): void
    {
        $query->where('request_status', $value);
    }
    //---------------------Scopes-------------------------------------

}
