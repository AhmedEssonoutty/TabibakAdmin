<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Constants\FileConstants;
use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasTranslations,
        HasRoles, HasPermissions, ModelTrait, SearchTrait;

	protected $fillable = ['name', 'username', 'email', 'password', 'phone',
        'verification_code', 'phone_verified_at', 'is_active'];
    protected array $filters = ['keyword', 'role', 'roleName', 'email'];
    public array $filterModels = ['Role'];
    public array $filterCustom = [];
    protected array $searchable = ['name', 'email'];
    public array $translatable = ['name'];
    protected $with = ['avatar'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    //---------------------relations-------------------------------------
    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class);
    }
    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class);
    }
    public function vendor(): HasOne
    {
        return $this->hasOne(Vendor::class);
    }

    public function avatar(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', FileConstants::FILE_USER_AVATAR);
    }
    //---------------------relations-------------------------------------
    // ----------------------- Scopes -----------------------
    public function getRoleId()
    {
        $role = $this->roles()->first();
        return $role ? $role->id : null;
    }

    public function scopeOfRole($query, $value)
    {
        return $query->whereHas('roles', function ($query) use ($value) {
            $query->where('id', $value);
        });
    }

    public function scopeOfRoleName($query, $value)
    {
        $value = (array) $value;
        return $query->whereHas('roles', function ($query) use ($value) {
            $query->whereIn('name', $value);
        });
    }
    // ----------------------- Scopes -----------------------

    public function setPasswordAttribute($input): void
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function isVerified(): Attribute
    {
        return Attribute::make(fn($value) => !is_null($this->phone_verified_at)
            || !is_null($this->email_verified_at));
    }

}
