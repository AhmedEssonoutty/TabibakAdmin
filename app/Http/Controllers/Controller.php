<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function applyCrudPermissions($name): void
    {
        $name = lcfirst($name);
        $name = str()->lower(implode('-', preg_split('/(?=[A-Z])/', $name)));
        $this->middleware('permission:read-' . $name)->only(['index', 'show']);
        $this->middleware('permission:create-' . $name)->only(['store']);
        $this->middleware('permission:update-' . $name)->only(['update']);
        $this->middleware('permission:delete-' . $name)->only(['destroy']);
    }
}
