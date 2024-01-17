<?php

namespace App\Repositories\SQL;

use App\Models\ActivityLog;
use App\Repositories\Contracts\ActivityLogContract;
use Illuminate\Support\Facades\Storage;

class ActivityLogRepository extends BaseRepository implements ActivityLogContract
{
    /**
     * ActivityLogRepository constructor.
     * @param ActivityLog $model
     */
    public function __construct(ActivityLog $model)
    {
        parent::__construct($model);
    }

    /**
     * Check if model has relations with any other tables
     * @param ActivityLog $model
     * @return int
     */
     public function relatedData(ActivityLog $model)
     {
        return 0;
     }

     public function getModulesActions(): array
     {
         $modelFiles = Storage::disk('app')->files('Models');
         $except = ['ActivityLog'];
         $modules = collect($modelFiles)->map(function ($modelFile) {
             $model = str_replace('.php', '', $modelFile);
             return str_replace('Models/', '', $model);
         });
         $modules = $modules->filter(function($module) use ($except){
             return !in_array($module, $except);
         });
         $actions = [
             'Creation',
             'Update',
             'Removing'
         ];
         return [
             'modules' => $modules,
             'actions' => $actions
         ];
     }
}
