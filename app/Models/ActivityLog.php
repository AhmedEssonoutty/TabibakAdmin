<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Activity
{
    use HasFactory, ModelTrait, SearchTrait;

    protected array $filters = [
        'duration',
        'module',
        'action',
        'user'
    ];

    public array $filterModels = [
        'User',
    ];

    public const PERMISSIONS_NOT_APPLIED = true;

    public function scopeOfDuration($query, $value)
    {
        return $query->whereDate('created_at','>=', Carbon::parse($value[0]))
            ->whereDate('created_at', '<=', Carbon::parse($value[1]));
    }

    public function scopeOfModule($query, $value)
    {
        return $query->where('properties->module', $value);
    }

    public function scopeOfAction($query, $value)
    {
        return $query->where('properties->action', $value);
    }

    public function scopeOfUser($query, $value)
    {
        return $query->where('causer_type', 'User')->where('causer_id', $value);
    }

    public static function getRelatedFilters(): array
    {
        $modelFiles = Storage::disk('app')->files('Models');
        $except = ['ActivityLog'];
        $modules = collect($modelFiles)->map(function ($modelFile) {
            $model = str_replace('.php', '', $modelFile);
            return str_replace('Models/', '', $model);
        });
        $modules = $modules->filter(function ($module) use ($except) {
            return !in_array($module, $except);
        });
        $actions = ['Creation', 'Update', 'Removing'];
        return ['modules' => $modules, 'actions' => $actions];
    }
}
